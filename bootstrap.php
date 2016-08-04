<?php

define('ROOT_PATH', dirname(__FILE__));

require(ROOT_PATH . '/vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use CropTool\Image;
use CropTool\OAuthConsumer;

/**********************************************************************************
 * PHP config
 */

# error_reporting(E_ALL);
# ini_set('display_errors', '1');
ini_set('memory_limit', '512M');

function shutdown() {
    $error = error_get_last();
    if ($error['type'] === E_ERROR) {
        // fatal error has occured
        header( "HTTP/1.1 500 Internal Server Error" );
        print $error['message'];
    }
}

register_shutdown_function('shutdown');

/**********************************************************************************
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

/**********************************************************************************
 * Initialize session
 */

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

/**********************************************************************************
 * Load config:
 * - consumerKey: The "consumer token" given to you when registering your app
 * - consumerSecret: The "secret token" given to you when registering your app
 * - jpegtranPath: Path to jpegtran
 * - rollbarToken: Token for the Rollbar service
 * - rollbarEnv: Rollbar environment
 */

$config = parse_ini_file(ROOT_PATH . '/config.ini');
if ( $config === false ) {
    header( "HTTP/1.1 500 Internal Server Error" );
    echo 'The config.ini file could not be read';
    exit(0);
}
if (!isset( $config['consumerKey'] ) || !isset( $config['consumerSecret'] )) {
    header( "HTTP/1.1 500 Internal Server Error" );
    echo 'Required configuration directives not found in ini file';
    exit(0);
}

Image::$pathToJpegTran = $config['jpegtranPath'];

/**********************************************************************************
 * Init Rollbar
 */

if (isset($config['rollbarToken'])) {
    Rollbar::init(array(
        'access_token' => $config['rollbarToken'],
        'environment' => $config['rollbarEnv']
    ));
}

/**********************************************************************************
 * Setup logging
 */

$logfile = ROOT_PATH . '/logs/croptool.log';
if (!file_exists($logfile)) {
    @touch($logfile);
}
if (!is_writable($logfile)) {
    header( "HTTP/1.1 500 Internal Server Error" );
    die("Log file " . $logfile . " is not writable");
}
$log = new Logger('croptool');
$log->pushHandler(new StreamHandler($logfile, Logger::INFO));

/**********************************************************************************
 * Create our OAuthConsumer
 */

$keyFile = ROOT_PATH . '/croptool-secret-key.txt';
$oauth = new OAuthConsumer('tools.wmflabs.org', 'croptool', false, $config, $keyFile, $log);
