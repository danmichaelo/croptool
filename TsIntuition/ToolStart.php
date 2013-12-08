<?php
/**
 * Primary entry point for the back-end.
 *
 * @copyright 2011-2012 See AUTHORS.txt
 * @license CC-BY 3.0 <https://creativecommons.org/licenses/by/3.0/>
 * @package TsIntuition
 */

/**
 * This file loads everything the individual tools need.
 */

// This is a valid entry, define
define( 'TS_INTUITION', __DIR__ );

// Local override
if ( file_exists( __DIR__ . '/LocalConfig.php' ) ) {
	include_once __DIR__ . '/LocalConfig.php';
}

// Files
require_once __DIR__ . '/includes/Defines.php';
require_once __DIR__ . '/includes/TsIntuitionUtil.php';
require_once __DIR__ . '/includes/TsIntuition.php';
