<?php

use CropTool\Auth\AuthServiceInterface;
use CropTool\Auth\OAuthConsumer;
use CropTool\File\FileRepository;
use Psr\Container\ContainerInterface;
use Monolog\Formatter\LineFormatter;
use Monolog\Logger;
use Monolog\Level;
use Monolog\ErrorHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Processor\PsrLogMessageProcessor;
use Psr\Log\LoggerInterface;

return [
    'root_directory' => ROOT_PATH,

    'host' => function (ContainerInterface $container) {
        return $container->get(\CropTool\Config::class)->get('hostname');
    },

    \CropTool\ApiService::class => \DI\autowire(),

    LoggerInterface::class => \DI\factory(function () {
        $formatter = new LineFormatter("[%datetime%] %channel%.%level_name%: %message% %extra%\n", null, false, true);
        $streamHandler = new RotatingFileHandler(ROOT_PATH . '/logs/croptool.log', 30, Level::Info);
        $streamHandler->setFormatter($formatter);
        $handlers = [$streamHandler];
        $processors = [new PsrLogMessageProcessor()];
        $logger = new Logger('croptool', $handlers, $processors);

        // IntrospectionProcessor adds filename, class, line to %extra%
        // $streamHandler->pushProcessor(new IntrospectionProcessor(Logger::ERROR));

        ErrorHandler::register($logger);
        return $logger;
    }),

    \CropTool\Config::class => \DI\create()
        ->constructor(\DI\string('{root_directory}/config.ini')),

    FileRepository::class => \DI\autowire()
        ->constructor(\DI\string('{root_directory}/public_html')),

    OAuthConsumer::class => \DI\autowire()
        ->constructorParameter('keyFile', \DI\string('{root_directory}/croptool-secret-key.txt'))
        ->constructorParameter('callbackUrl', \DI\string('https://{host}/api/auth/callback')),  // https://tools.wmflabs.org/croptool/api/auth/callback'),

    AuthServiceInterface::class => \DI\autowire(OAuthConsumer::class)
    ->constructorParameter('keyFile', \DI\string('{root_directory}/croptool-secret-key.txt'))
    ->constructorParameter('callbackUrl', \DI\string('https://{host}/api/auth/callback')),  // https://tools.wmflabs.org/croptool/api/auth/callback'),,

    \CropTool\SessionInterface::class => \DI\autowire(\CropTool\Session::class),

    \CropTool\WikiPageService::class => \DI\autowire()
];
