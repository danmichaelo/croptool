<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('memory_limit', '512M');

require('../vendor/autoload.php');
#require('../oauth.php');
#require('../BorderLocator.php');
ini_set('display_errors', false);


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

$oauth = new OAuthConsumer($site, $hostname, $basepath, $testingEnv, $config['consumerKey'], $config['consumerSecret'], $config['localPassphrase']);
