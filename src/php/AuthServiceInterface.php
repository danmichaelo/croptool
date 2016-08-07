<?php

namespace CropTool;

interface AuthServiceInterface
{
    public function signRequestAndReturnHeader($method, $url, $data = array());

    public function getAuthorizationUrl($state);

    public function handleCallbackRequest($oauth_verifier);

    public function doLogout();

    public function isAuthorized();
}
