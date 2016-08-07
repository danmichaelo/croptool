<?php

namespace CropTool;

use Slim\Http\Request as Request;
use Slim\Http\Response as Response;

class AuthController
{

    public function getUser(Response $response, UserService $user)
    {
        return $response->withJson([
            'user' =>  $user->username,
        ]);
    }

    public function login(Response $response, Request $request, AuthServiceInterface $auth, Session $session)
    {
        // Store ['site', 'title', 'page'] in the callback url
        $state = $request->getUri()->getQuery();
        $url = $auth->getAuthorizationUrl($state);

        return $response->withStatus(302)->withHeader('Location', $url);
    }

    public function authCallback(Response $response, Request $request, AuthServiceInterface $auth, Config $config, Session $session)
    {
        $auth->handleCallbackRequest($request->getQueryParam('oauth_verifier'));

        $state = [];
        foreach (['site', 'title', 'page'] as $key) {
            if ($request->getQueryParam($key)) {
                $state[] = $key . '=' . $request->getQueryParam($key);
            }
        }
        $state = implode('&', $state);

        return $response->withStatus(302)->withHeader('Location', $config->get('basepath') . '?' . $state);
    }

    public function logout(Response $response, AuthServiceInterface $auth, Session $session)
    {
        $auth->doLogout();
        $session->flush();

        return $response->withJson([
            'user' =>  null,
        ]);
    }
}
