<?php

namespace CropTool\Auth;

use DI\FactoryInterface;
use CropTool\Auth\AuthServiceInterface;
use CropTool\MagicParameterTrait;
use Psr\Log\LoggerInterface;

/**
 * @property null|string username
 */
class UserService
{
    use MagicParameterTrait;

    protected $api;
    protected $auth;
    protected $logger;

    public function __construct(AuthServiceInterface $auth, FactoryInterface $factory, LoggerInterface $logger)
    {
        $this->api = $factory->make(\CropTool\ApiService::class);
        $this->auth = $auth;
        $this->logger = $logger;
    }

    public function loggedin()
    {
        return ($this->username != null);
    }

    protected function fetchUsername()
    {
        if (!$this->auth->isAuthorized()) {
            return null;
        }

        $res = $this->api->request([
            'format' => 'json',
            'action' => 'query',
            'meta' => 'userinfo',
        ]);

        if (isset($res->error)) {
            // We're not authorized!
            return null;
        }

        if (isset($res->query->userinfo->anon)) {
            return null;
        }

        return $res->query->userinfo->name;
    }

    /**
     * Returns the username of the authorized user or NULL if not authorized
     */
    public function getUsernameParameter()
    {
        // Cache username in session so we don't have to request it over and over.
        // Session is destroyed on logout.
        if (!isset($_SESSION['username'])) {
            $_SESSION['username'] = $this->fetchUsername();
        }
        return $_SESSION['username'];
    }
}
