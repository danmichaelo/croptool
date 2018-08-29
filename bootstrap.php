<?php

use CropTool\AuthController;
use CropTool\FileController;
use Slim\Http\Request;
use Slim\Http\Response;

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', __DIR__);
}

/**********************************************************************************
 * PHP config
 */

error_reporting(E_ALL);
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', 1);
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

$authMiddleware = function (Request $request, Response $response, $next) {
    $user = $this->get(CropTool\UserService::class);
    $auth = $this->get(CropTool\AuthServiceInterface::class);
    if (!$user->loggedin()) {
        return $response->withStatus(401)->withJson([
            'error' => 'Unauthorized',
            'messages' => $auth->getMessages(),
        ]);
    }

    return $next($request, $response);
};

$pageMiddleware = function (Request $request, Response $response, $next) {
    // Middleware that defines the current WikiPage

    $title = $request->isGet() ? $request->getQueryParam('title') : $request->getParsedBodyParam('title');

    $factory = $this->get('DI\FactoryInterface');

    $this->set(CropTool\WikiPage::class, $factory->make(CropTool\WikiPage::class, [
        'title' => $title,
    ]));

    return $next($request, $response);
};

/**********************************************************************************
 * Init app
 */

$app = new CropTool\App();
$app->add(CropTool\SessionInterface::class);

$app->get('/api/ping', function ($request, $response) {
    return $response->write('pong');
});

/**********************************************************************************
 * Auth routes
 */

$app->group('/api/auth', function () use ($authMiddleware) {

    $this->get('/login', [AuthController::class, 'login']);
    $this->get('/callback', [AuthController::class, 'authCallback']);
    $this->get('/logout', [AuthController::class, 'logout']);
    $this->get('/user', [AuthController::class, 'getUser'])->add($authMiddleware);

});

/**********************************************************************************
 * Page routes
 */

$app->group('/api/file', function () use ($authMiddleware) {

    $this->get('/exists', [FileController::class, 'exists']);
    $this->get('/thumb', [FileController::class, 'thumb']);
    $this->get('/autodetect', [FileController::class, 'autodetect']);
    $this->get('/crop', [FileController::class, 'crop']);
    $this->post('/publish', [FileController::class, 'publish']);

})->add($authMiddleware)->add($pageMiddleware);

return $app;
