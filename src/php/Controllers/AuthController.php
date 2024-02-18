<?php

namespace CropTool\Controllers;

use CropTool\Auth\AuthServiceInterface;
use CropTool\Config;
use CropTool\SessionInterface;
use CropTool\Auth\UserService;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class AuthController
{

    public function getUser(Response $response, UserService $user)
    {
        $response->getBody()->write((string)json_encode([
            'user' =>  $user->username,
        ]));
        return $response;
    }

    public function login(Response $response, Request $request, AuthServiceInterface $auth, SessionInterface $session)
    {
        // Store ['site', 'title', 'page'] in the callback url
        $state = $request->getUri()->getQuery();
        $url = $auth->getAuthorizationUrl($state);

        return $response->withStatus(302)->withHeader('Location', $url);
    }

    public function authCallback(Response $response, Request $request, AuthServiceInterface $auth, Config $config, SessionInterface $session)
    {
        $auth->handleCallbackRequest($request->getQueryParams()['oauth_verifier']);

        $state = [];
        foreach (['site', 'title', 'page'] as $key) {
            if ($request->getQueryParams()[$key]) {
                $state[] = $key . '=' . $request->getQueryParams()[$key];
            }
        }
        $state = implode('&', $state);

        return $response->withStatus(302)->withHeader('Location', $config->get('basepath') . '?' . $state);
    }

    public function logout(Response $response, AuthServiceInterface $auth, SessionInterface $session)
    {
        $auth->doLogout();
        $session->flush();

        $response->getBody()->write((string)json_encode([
            'user' =>  null,
        ]));

        return $response;
    }
}
