<?php

use CropTool\Controllers\AuthController;
use CropTool\Controllers\FileController;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Psr7\Response;
use CropTool\WikiPageService;
use \DI\Bridge\Slim\Bridge as App;

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', __DIR__);
}

/**********************************************************************************
 * PHP config
 */

error_reporting(E_ALL);
ini_set('display_errors', 'off');
ini_set('display_startup_errors', 'off');
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

    if (!$user->loggedin()) {
        $response =  new Response();
        $response->getBody()->write((string)json_encode([
            'error' => 'Unauthorized',
            'messages' => $auth->getMessages(),
        ]));
        return $response->withStatus(401);
    }

    $response = $handler->handle($request);

    return $response;
};

$pageMiddleware = function (Request $request, RequestHandler $handler) {
    // Middleware that defines the current WikiPage

    $requestParams = $request->getMethod() === 'GET' ? $request->getQueryParams() : $request->getParsedBody();

    if ( !array_key_exists( 'title', $requestParams ) || !array_key_exists( 'site', $requestParams ) ) {
        $response =  new Response();
        $response->getBody()->write((string)json_encode([
            'error' => 'Invalid request',
            'messages' => 'No title parameter found',
        ]));
        return $response->withStatus(500);
    }

    $response = $handler->handle($request);

    $title = $requestParams['title'];
    $site = $requestParams['site'];

    $pageService = $this->get(WikiPageService::class);

    $request->withAttribute('page', $pageService->getForTitle( $title, $site ));

    return $response;
};

/**********************************************************************************
 * Init app
 */

$builder = new \DI\ContainerBuilder();

$builder->addDefinitions(ROOT_PATH . '/container.php');

$container = $builder->build();

$app = App::create($container);
$app->addErrorMiddleware(true, true, true);
$app->add(\CropTool\SessionInterface::class);
$app->addBodyParsingMiddleware();

$app->get('/api/ping', function ($request, $response) {
    $response->getBody()->write('pong');
    return $response->withStatus(200);
});

$app->get('/api/server-cleanup', function ($request, $response) {
    exec( ROOT_PATH . '/scripts/cleanup.sh &');
    $response->getBody()->write('STARTED');
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
