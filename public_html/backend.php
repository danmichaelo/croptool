<?php

require_once('../bootstrap.php');

if (isset($_GET['title'])) {
    // Store the title, so we can retrieve if after
    // having having authenticated at the OAuth endpoint
    $_SESSION['title'] = $_GET['title'];
}

// Fetch the access token if this is the callback from requesting authorization
if (!is_null(array_get($_GET, 'oauth_verifier'))) {
    $oauth->handleCallbackRequest($_GET['oauth_verifier']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $input = json_decode(file_get_contents("php://input"));
    $site = isset($input->site)
        ? $input->site
        : 'commons.wikimedia.org';
} else {
    $site = isset($_REQUEST['site'])
        ? $_REQUEST['site']
        : 'commons.wikimedia.org';
}

$apiClient = new MwApiClient($site, $oauth, null, $log, $config);
$controller = new CropToolController($apiClient, $log);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->handleRequest('POST', json_decode(file_get_contents('php://input')));
} else {
    $controller->handleRequest('GET', $_GET);
}
