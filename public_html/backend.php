<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('memory_limit', '512M');
# ini_set('display_errors', false);

require('../vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 * The array_get method from Laravel
 *
 * @param array  $data
 * @param string $key
 * @param string $default
 *
 * @return mixed
 */
function array_get($data, $key, $default = null) {
    if (!is_array($data)) {
        return $default;
    }
    return isset($data[$key]) ? $data[$key] : $default;
}

/**
 * A file containing the following keys:
 * - consumerKey: The "consumer token" given to you when registering your app
 * - consumerSecret: The "secret token" given to you when registering your app
 * - jpegtranPath: Path to jpegtran
 * - rollbarToken: Token for the Rollbar service
 * - rollbarEnv: Rollbar environment
 */
$configFile = dirname(dirname(__FILE__)) . '/config.ini';
$config = parse_ini_file($configFile);
$keyFile = dirname(dirname(__FILE__)) . '/croptool-secret-key.txt';

if ( $config === false ) {
    header( "HTTP/1.1 500 Internal Server Error" );
    echo 'The config.ini file could not be read';
    exit(0);
}

if (isset($config['rollbarToken'])) {
    Rollbar::init(array(
        'access_token' => $config['rollbarToken'],
        'environment' => $config['rollbarEnv']
    ));
}

// create a log channel
$logfile = dirname(dirname(__FILE__)) . '/logs/croptool.log';
if (!file_exists($logfile)) {
    @touch($logfile);
}
if (!is_writable($logfile)) {
    header( "HTTP/1.1 500 Internal Server Error" );
    die("Log file " . $logfile . " is not writable");
}
$log = new Logger('croptool');
$log->pushHandler(new StreamHandler($logfile, Logger::INFO));

function shutdown() {
    $error = error_get_last();
    if ($error['type'] === E_ERROR) {
        // fatal error has occured
        header( "HTTP/1.1 500 Internal Server Error" );
        print $error['message'];
    }
}

register_shutdown_function('shutdown');

/*************************************************
 * Routing
 *************************************************/

$hostname = isset($_SERVER['HTTP_X_FORWARDED_SERVER'])
                ? $_SERVER['HTTP_X_FORWARDED_SERVER']
                : $_SERVER['SERVER_NAME'];

$hostnameProd = 'tools.wmflabs.org';

if ($hostname == 'tools.wmflabs.org, tools-eqiad.wmflabs.org' || $hostname == 'tools-eqiad.wmflabs.org') {
    $hostname = $hostnameProd;
}

$basepath = dirname($_SERVER['SCRIPT_NAME']);
$testingEnv = ($hostname !== $hostnameProd);

session_name('croptool');
session_set_cookie_params(0, $basepath, $hostnameProd);
session_start();

if (isset($_GET['title'])) {
    // Store the title, so we can retrieve if after
    // having having authenticated at the OAuth endpoint
    $_SESSION['title'] = $_GET['title'];
}

if (!isset( $config['consumerKey'] ) || !isset( $config['consumerSecret'] )) {
    header( "HTTP/1.1 500 Internal Server Error" );
    echo 'Required configuration directives not found in ini file';
    exit(0);
}

Image::$pathToJpegTran = $config['jpegtranPath'];

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $input = json_decode(file_get_contents("php://input"));
    $site = isset($input->site)
        ? $input->site
        : 'en.wikipedia.org'; // use enwp as default to force re-authorization for 1.1 users
} else {
    $site = isset($_REQUEST['site'])
        ? $_REQUEST['site']
        : 'en.wikipedia.org'; // use enwp as default to force re-authorization for 1.1 users
}

$oauth = new OAuthConsumer($hostnameProd, $basepath, $testingEnv, $config, $keyFile, $log);
$apiClient = new MwApiClient($site, $oauth, null, $log, $config);
$controller = new CropToolController($apiClient, $log);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->handleRequest('POST', json_decode(file_get_contents('php://input')));
} else {
    $controller->handleRequest('GET', $_GET);
}
