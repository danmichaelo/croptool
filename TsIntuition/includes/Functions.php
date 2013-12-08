<?php
/**
 * Global functions optoinally loaded with option 'globalfunctions'.
 * @see TsIntuition::__construct
 *
 * @copyright 2011-2013 See AUTHORS.txt
 * @license CC-BY 3.0 <https://creativecommons.org/licenses/by/3.0/>
 * @package TsIntuition
 */

// Protect against invalid entry
if ( !defined( 'TS_INTUITION' ) ) {
	echo "This file is part of TsIntuition and is not a valid entry point\n";
	exit;
}

/**
 * This file contains global functions that will be made available
 * through ToolStart.php. These assume the an instance of the TsIntuition Class
 * is available in the global $I18N variable. These four function are shortcodes
 * for the most common usecases. You can disable them by setting the 'globalfunctions'
 * option to false when constructing the TsIntuition Class.
 */

/**
 * Get a message from the global TsIntuition instance.
 *
 * @deprecated since 0.1.3: These conflict with native functions when PHP is compiled
 *  with gettext library (see http://php.net/_).
 * @param string $key
 * @param Array [$options]
 * @return string
 */
if ( !function_exists( '_' ) ) {
	function _( $key, $options = array() ) {
		global $I18N;
		return $I18N->msg( $key, $options );
	}
}

// Return a message from the 'general' domain
if ( !function_exists( '_g' ) ) {
	function _g( $key, $options = array() ) {
		global $I18N;
		if ( is_string( $options ) ) {
			$options = array( 'domain' => $options );
		}
		$options = array_merge( $options, array( 'domain' => 'general' ) );
		return $I18N->msg( $key, $options );
	}
}

// Return a message escaped as html
if ( !function_exists( '_html' ) ) {
	function _html( $key, $options = array() ) {
		global $I18N;
		if ( is_string( $options ) ) {
			$options = array( 'domain' => $options );
		}
		$options = array_merge( $options, array( 'escape' => 'html' ) );
		return $I18N->msg( $key, $options );
	}
}

// Echo a message
if ( !function_exists( '_e' ) ) {
	function _e( $key, $options = array() ) {
		global $I18N;
		echo $I18N->msg( $key, $options );
	}
}
