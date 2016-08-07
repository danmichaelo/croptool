<?php

namespace CropTool;

use DI\ContainerBuilder;
use Interop\Container\ContainerInterface;
use Monolog\Formatter\LineFormatter;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Processor\PsrLogMessageProcessor;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class App extends \DI\Bridge\Slim\App
{

    public function __construct()
    {
        parent::__construct();

        $container = $this->getContainer();

        $config = $container->get(Config::class);
        $this->configureRollbar($config);
    }

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
                return function (Request $request, Response $response, \Exception $exception) use ($container) {
                    $logger = $container->get(LoggerInterface::class);
                    $logger->error($exception->getMessage());
                    return $container->get('response')
                        ->withStatus(500)
                        ->withHeader('Content-Type', 'application/json')
                        ->withJson(['error' => $exception->getMessage()]);
                };
            },

            'root_directory' => ROOT_PATH,

            'site' => function (ContainerInterface $container) {
                return $container->get('request')->getParam('site', 'commons.wikimedia.org');
            },

            ApiService::class => \DI\object()
                ->constructorParameter('site', \DI\get('site')),

            LoggerInterface::class => \DI\factory(function () {
                $formatter = new LineFormatter("[%datetime%] %channel%.%level_name%: %message%\n", null, false, true);
                $streamHandler = new StreamHandler(ROOT_PATH . '/logs/croptool.log', Logger::INFO);
                $streamHandler->setFormatter($formatter);
                $handlers = [$streamHandler];
                $processors = [new PsrLogMessageProcessor()];
                return new Logger('croptool', $handlers, $processors);
            }),

            Config::class => \DI\object()
                ->constructor(\DI\string('{root_directory}/config.ini')),

            FileRepository::class => \DI\object()
                ->constructor(\DI\string('{root_directory}/public_html')),

            OAuthConsumer::class => \DI\object()
                ->constructorParameter('keyFile', \DI\string('{root_directory}/croptool-secret-key.txt'))
                ->constructorParameter('callbackUrl', 'https://tools.wmflabs.org/croptool/api/auth/callback'),

            AuthServiceInterface::class => \DI\object(OAuthConsumer::class),

        ]);
    }

    protected function configureRollbar(Config $config)
    {
        if ($config->has('rollbarToken')) {
            \Rollbar::init([
                'access_token' => $config->get('rollbarToken'),
                'environment' => $config->get('rollbarEnv'),
            ]);
        }
    }
}
