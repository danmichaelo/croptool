<?php

namespace CropTool;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;

class Session implements SessionInterface
{
    protected $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    protected function startSession()
    {
        // If the configured hostname includes a port, we need to remove it
        $cookieDomain = $this->config->getCookieDomain();

        session_name($this->config->get('sessionName'));
        session_set_cookie_params(0, $this->config->get('basepath'), $cookieDomain, true, true);
        session_start();
    }

    /**
     * Called when middleware is run.
     *
     * @param Request $request Slim request
     * @param Response $response Slim response
     * @param callable $next Next middleware
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function __invoke(Request $request, RequestHandler $handler)
    {
        $this->startSession();
        $response = $handler->handle($request);

        return $response;
    }

    /**
     * Check if a session variable is set and non-empty.
     *
     * @param string $key
     *
     * @return bool
     */
    public function has($key)
    {
        return isset($_SESSION[$key]) && !empty($_SESSION[$key]);
    }

    /**
     * Retrieve a session variable.
     *
     * @param string $key
     * @param mixed  $default
     *
     * @return mixed
     */
    public function get($key, $default=null)
    {
        return array_get($_SESSION, $key, $default);
    }

    /**
     * Retrieve and delete a session variable
     *
     * @param string $key
     * @param mixed  $default
     *
     * @return mixed
     */
    public function pull($key, $default=null)
    {
        $value = array_get($_SESSION, $key, $default);
        $this->forget($key);

        return $value;
    }

    /**
     * Store a session variable.
     *
     * @param string $key
     * @param mixed  $value
     */
    public function put($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Forget a session variable.
     *
     * @param string $key
     */
    public function forget($key)
    {
        unset($_SESSION[$key]);
    }

    /**
     * Forget all session variables.
     */
    public function flush()
    {
        $_SESSION = array();
    }
}
