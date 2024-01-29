<?php

use CropTool\Controllers\AuthController;
use CropTool\Controllers\FileController;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use \DI\Bridge\Slim\Bridge as App;
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

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', __DIR__);
}

/**********************************************************************************
 * PHP config
 */

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', 1);
ini_set('memory_limit', '512M');


/**********************************************************************************
 * The array_get method from Laravel
 *
 * @param array  $data
 * @param string $key
 * @param string $default
 *
 * @return mixed
 */
if (! function_exists('array_get')) {

    function array_get($data, $key, $default = null) {
        if (!is_array($data)) {
            return $default;
        }
        return isset($data[$key]) ? $data[$key] : $default;
    }
}

/**********************************************************************************
 * Middleware
 */

$authMiddleware = function (Request $request, RequestHandler $handler) {
    $user = $this->get(\CropTool\Auth\UserService::class);
    $auth = $this->get(\CropTool\Auth\AuthServiceInterface::class);
    $response = $handler->handle($request);
    if (!$user->loggedin()) {
        $response->getBody()->write((string)json_encode([
            'error' => 'Unauthorized',
            'messages' => $auth->getMessages(),
        ]));
        return $response->withStatus(401);
    }

    return $response;
};

$pageMiddleware = function (Request $request, RequestHandler $handler) {
    // Middleware that defines the current WikiPage

    $response = $handler->handle($request);

    $requestParams = $request->getMethod() === 'GET' ? $request->getQueryParams() : $request->getParsedBody();

    if ( !array_key_exists( 'title', $requestParams ) ) {
        $response->getBody()->write((string)json_encode([
            'error' => 'Invalid request',
            'messages' => 'No title parameter found',
        ]));
        return $response->withStatus(500);
    }

    $title = $requestParams['title'];

    $factory = $this->get('DI\FactoryInterface');

    $this->set(CropTool\WikiPage::class, $factory->make(CropTool\WikiPage::class, [
        'title' => $title,
    ]));

    return $response;
};

/**********************************************************************************
 * Init app
 */

$builder = new \DI\ContainerBuilder();

$builder->addDefinitions([
    'root_directory' => ROOT_PATH,

    'site' => function (ContainerInterface $container) {
        return $container->get('request')->getParam('site', 'commons.wikimedia.org');
    },

    'host' => function (ContainerInterface $container) {
        return $container->get(\CropTool\Config::class)->get('hostname');
    },

    \CropTool\ApiService::class => \DI\autowire()
        ->constructorParameter('site', \DI\get('site')),

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

    FileRepository::class => \DI\create()
        ->constructor(\DI\string('{root_directory}/public_html')),

    OAuthConsumer::class => \DI\autowire()
        ->constructorParameter('keyFile', \DI\string('{root_directory}/croptool-secret-key.txt'))
        ->constructorParameter('callbackUrl', \DI\string('https://{host}/api/auth/callback')),  // https://tools.wmflabs.org/croptool/api/auth/callback'),

    AuthServiceInterface::class => \DI\autowire(OAuthConsumer::class)
    ->constructorParameter('keyFile', \DI\string('{root_directory}/croptool-secret-key.txt'))
    ->constructorParameter('callbackUrl', \DI\string('https://{host}/api/auth/callback')),  // https://tools.wmflabs.org/croptool/api/auth/callback'),,

    \CropTool\SessionInterface::class => \DI\autowire(\CropTool\Session::class),
]);

$container = $builder->build();

$app = App::create($container);
//$app->addErrorMiddleware(true, true, true);
$app->add(\CropTool\SessionInterface::class);

$app->get('/api/ping', function ($request, $response) {
    $response->getBody()->write('pong');
    return $response->withStatus(200);
});

/**********************************************************************************
 * Auth routes
 */

$app->group('/api/auth', function (Slim\Routing\RouteCollectorProxy $app) use ($authMiddleware) {
    $app->get('/login', [AuthController::class, 'login']);
    $app->get('/callback', [AuthController::class, 'authCallback']);
    $app->get('/logout', [AuthController::class, 'logout']);
    $app->get('/user', [AuthController::class, 'getUser'])->add($authMiddleware);

});

/**********************************************************************************
 * Page routes
 */

$app->group('/api/file', function ( Slim\Routing\RouteCollectorProxy $app) {

    $app->get('/exists', [FileController::class, 'exists']);
    $app->get('/info', [FileController::class, 'info']);
    $app->get('/autodetect', [FileController::class, 'autodetect']);
    $app->get('/crop', [FileController::class, 'crop']);
    $app->post('/publish', [FileController::class, 'publish']);

})->add($authMiddleware)->add($pageMiddleware);

return $app;
