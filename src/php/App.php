<?php

namespace CropTool;

use CropTool\Auth\AuthServiceInterface;
use CropTool\Auth\OAuthConsumer;
use CropTool\File\FileRepository;
use DI\ContainerBuilder;
use Interop\Container\ContainerInterface;
use Monolog\Formatter\LineFormatter;
use Monolog\Logger;
use Monolog\ErrorHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Processor\IntrospectionProcessor;
use Monolog\Processor\PsrLogMessageProcessor;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class App extends \DI\Bridge\Slim\App
{
    protected function configureContainer(ContainerBuilder $builder)
    {
        $builder->addDefinitions([
            // 'settings.debug' => true,
            // 'settings.displayErrorDetails' => true,

            'notFoundHandler' => function (ContainerInterface $container) {
                return function () use ($container) {
                    return $container->get('response')
                        ->withStatus(404)
                        ->withHeader('Content-Type', 'application/json')
                        ->withJson(['error' => 'invalid route']);
                };
            },

            'errorHandler' => function (ContainerInterface $container) {
                return function (Request $request, Response $response, \Exception $exc) use ($container) {
                    $logger = $container->get(LoggerInterface::class);
                    $logger->error(
                        "Exception \"{$exc->getMessage()}\" at \"{$exc->getFile()}\", line {$exc->getLine()}"
                    );
                    return $container->get('response')
                        ->withStatus(500)
                        ->withHeader('Content-Type', 'application/json')
                        ->withJson(['error' => $exc->getMessage()]);
                };
            },

            'root_directory' => ROOT_PATH,

            'site' => function (ContainerInterface $container) {
                return $container->get('request')->getParam('site', 'commons.wikimedia.org');
            },

            'host' => function (ContainerInterface $container) {
                return $container->get(Config::class)->get('hostname');
            },

            ApiService::class => \DI\object()
                ->constructorParameter('site', \DI\get('site')),

            LoggerInterface::class => \DI\factory(function () {
                $formatter = new LineFormatter("[%datetime%] %channel%.%level_name%: %message% %extra%\n", null, false, true);
                $streamHandler = new RotatingFileHandler(ROOT_PATH . '/logs/croptool.log', 30, Logger::INFO);
                $streamHandler->setFormatter($formatter);
                $handlers = [$streamHandler];
                $processors = [new PsrLogMessageProcessor()];
                $logger = new Logger('croptool', $handlers, $processors);

                // IntrospectionProcessor adds filename, class, line to %extra%
                // $streamHandler->pushProcessor(new IntrospectionProcessor(Logger::ERROR));

                ErrorHandler::register($logger);
                return $logger;
            }),

            Config::class => \DI\object()
                ->constructor(\DI\string('{root_directory}/config.ini')),

            FileRepository::class => \DI\object()
                ->constructor(\DI\string('{root_directory}/public_html')),

            OAuthConsumer::class => \DI\object()
                ->constructorParameter('keyFile', \DI\string('{root_directory}/croptool-secret-key.txt'))
                ->constructorParameter('callbackUrl', \DI\string('https://{host}/api/auth/callback')),  // https://tools.wmflabs.org/croptool/api/auth/callback'),

            AuthServiceInterface::class => \DI\object(OAuthConsumer::class),

            SessionInterface::class => \DI\object(Session::class),

        ]);
    }
}
