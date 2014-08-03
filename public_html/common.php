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
