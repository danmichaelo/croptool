<?php
/**
 * Entry point for the Intuition API.
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

function i18nApiResp( $data ) {
	global $kgReq;

	$callback = $kgReq->getVal( 'callback' );

	// Serve as JSON or JSON-P
	if ( $callback === null ) {
		header( 'content-type: application/json; charset=utf-8', /* replace = */ true );
		echo json_encode( $data );
	} else {
		header( 'content-type: text/javascript; charset=utf-8', /* replace = */ true );

		// Sanatize callback
		$callback = kfSanatizeJsCallback( $callback );
		echo $callback . '(' . json_encode( $data ) .');';
	}

	exit;
}

$domains = $kgReq->getVal( 'domains', false );
$lang = $kgReq->getVal( 'lang', $I18N->getLang() );

/**
 * Response
 * -------------------------------------------------
 */

$resp = array();

if ( !$domains ) {
	// HTTP 400 Bad Request
	http_response_code( 400 );
	$resp['error'] = 'Parameter "domains" is required';
	i18nApiResp( $resp );
}

$domains = explode( '|', $domains );

$resp['messages'] = array();

foreach ( $domains as $domain ) {
	$normalisedDomain = $I18N->loadTextdomain( $domain );

	if ( !$normalisedDomain ) {
		// Doesn't exist
		$resp['messages'][$domain] = false;
		continue;
	}

	if ( $normalisedDomain !== $domain ) {
		$resp['normalised']['domains'][$domain] = $normalisedDomain;
	}

	$keys = $I18N->listMsgs( $normalisedDomain );

	foreach ( $keys as $msgKey ) {
		$resp['messages'][$domain][$msgKey] = $rawMsg = $I18N->rawMsg( $normalisedDomain, $lang, $msgKey );
	}
}

i18nApiResp( $resp );
