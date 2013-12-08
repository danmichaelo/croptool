<?php
/**
 * Entry point for loading the Intuition client.
 *
 * @copyright 2011-2013 See AUTHORS.txt
 * @license CC-BY 3.0 <https://creativecommons.org/licenses/by/3.0/>
 * @package TsIntuition
 */

/**
 * Set up
 * -------------------------------------------------
 */

// Load BaseTool
$initPath = '../../ts-krinkle-basetool';
if ( !is_readable( $initPath ) )  {
	$initPath = dirname( __DIR__ ) . '/includes/libs/ts-krinkle-basetool';
}
require_once $initPath . '/InitTool.php';

// Load Intuition
require_once dirname( __DIR__ ) . '/ToolStart.php';

// Initialize Intuition
$I18N = new TsIntuition( array(
	'domain' => 'TsIntuition',
	'mode' => 'dashboard',
) );

/**
 * Request
 * -------------------------------------------------
 */

$env = $kgReq->getVal( 'env' );

/**
 * Response
 * -------------------------------------------------
 */
header( 'content-type: text/javascript; charset=utf-8', /* replace = */ true );

if ( !$env ) {
	// HTTP 400 Bad Request
	http_response_code( 400 );
	echo '/* Parameter "env" is required. */';
	die;
}

if ( !in_array( $env, array( 'mw', 'standalone' ) ) ) {
	// HTTP 400 Bad Request
	http_response_code( 400 );
	echo '/* Invalid value for parameter "env". */';
	exit;
}


$jsEnvFile = dirname( __DIR__ ) . '/includes/js-env/intuition-' . $env . '.js';
if ( !is_readable( $jsEnvFile ) ) {
	// HTTP 500 Internal Server Error
	http_response_code( 500 );
	echo '/* Failed to read javascript file from disk. */';
	exit;
}

echo str_replace(
	'apiPath = \'api.php\',',
	'apiPath = ' . json_encode( "{$I18N->dashboardHome}api.php" ) . ',',
	file_get_contents($jsEnvFile)
);
exit;
