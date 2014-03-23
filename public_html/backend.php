<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('memory_limit', '512M');

require('../vendor/autoload.php');
#require('../oauth.php');
#require('../BorderLocator.php');


/*************************************************
 * Routing
 *************************************************/

$hostname = isset($_SERVER['HTTP_X_FORWARDED_SERVER'])
                ? $_SERVER['HTTP_X_FORWARDED_SERVER']
                : $_SERVER['SERVER_NAME'];

if ($hostname == 'tools.wmflabs.org, tools-eqiad.wmflabs.org' || $hostname == 'tools-eqiad.wmflabs.org') {
    $hostname = 'tools.wmflabs.org';
}

$basepath = dirname( $_SERVER['SCRIPT_NAME'] );
$testingEnv = ($hostname !== 'tools.wmflabs.org');

session_name('croptool');
session_set_cookie_params(0, $basepath, $hostname);
session_start();

if (isset($_GET['title'])) {
    // Store the title, so we can retrieve if after
    // having having authenticated at the OAuth endpoint
    $_SESSION['title'] = $_GET['title'];
}

/**
 * A file containing the following keys:
 * - consumerKey: The "consumer token" given to you when registering your app
 * - consumerSecret: The "secret token" given to you when registering your app
 * - localPassphrase: The (base64 encoded) key used for encrypting cookie content
 * - jpegtranPath: Path to jpegtran
 */
$configFile = '../config.ini';
$config = parse_ini_file($configFile);

if ( $config === false ) {
    header( "HTTP/1.1 500 Internal Server Error" );
    echo 'The ini file could not be read';
    exit(0);
}

if (!isset( $config['consumerKey'] ) || !isset( $config['consumerSecret'] )) {
    header( "HTTP/1.1 500 Internal Server Error" );
    echo 'Required configuration directives not found in ini file';
    exit(0);
}

Image::$pathToJpegTran = $config['jpegtranPath'];

$oauth = new OAuthConsumer($hostname, $basepath, $testingEnv, $config['consumerKey'], $config['consumerSecret'], $config['localPassphrase']);
$apiClient = new MwApiClient($oauth);
$ct = new CropTool($apiClient);


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $input = json_decode(file_get_contents("php://input"));

    header('Content-type: application/json');

    if (isset($input->store)) {
        echo json_encode($ct->upload($input));

    } else if (isset($_POST['username']) && isset($_POST['password'])) {
        echo json_encode($ct->tuscLogin($_POST['username'], $_POST['password']));

    } else if (isset($_GET['action']) && ($_GET['action'] == 'logout')) {
        echo json_encode($ct->logout());

    } else {
        echo json_encode($ct->doCrop($input));

    }

    exit;
}

if (isset($_GET['checkLogin'])) {
    header('Content-type: application/json');
    echo json_encode($ct->checkLogin());
    exit;

} else if (isset($_GET['pageExists'])) {
    header('Content-type: application/json');
    echo json_encode(array(
        'exists' => $ct->pageExists($_GET['pageExists']),
        'filename' => $_GET['pageExists']
    ));
    exit;

} else if (isset($_GET['title'])) {
    $title = $_GET['title'];

    if (isset($_GET['lookup'])) {
        header('Content-type: application/json');
        echo json_encode($ct->fetchImage($title));
        exit;

    } else if (isset($_GET['locateBorder'])) {
        $info = $ct->fetchImage($title);
        $bl = new BorderLocator($info['original']['name']);
        $area = $bl->selection;

        header('Content-type: application/json');
        echo json_encode(array(
            'area' => $area
        ));
        exit;
    }
}
