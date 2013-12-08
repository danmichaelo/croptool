<?php
/**
 * Static utitlities class.
 *
 * @copyright 2011-2012 See AUTHORS.txt
 * @license CC-BY 3.0 <https://creativecommons.org/licenses/by/3.0/>
 * @package TsIntuition
 */

// Protect against invalid entry
if ( !defined( 'TS_INTUITION' ) ) {
	echo "This file is part of TsIntuition and is not a valid entry point\n";
	exit;
}

/**
 * This class contains the static utility functions for the Itui class.
 */
class TsIntuitionUtil {

	private static $articlePath;

	/**
	 * Escapes a string with one of the known method and returns it
	 *
	 * @param $str string The string to be escaped
	 * @param $escape string The name of the escape routine to be used
	 *  if this is an unknown method name it will be ignored and 'plain'
	 *  will be used instead.
	 * @return string The escaped string.
	 */
	public static function strEscape( $str, $escape = 'plain' ) {
		switch ( $escape ) {
			case 'html' :
			case 'htmlspecialchars' :
				$str = htmlspecialchars( $str );
				break;
			case 'htmlentities':
				$str = htmlentities( $str, ENT_QUOTES, 'UTF-8' );
				break;
			// 'plain' or anything else: Do nothing
		}
		return $str;
	}

	public static function nonEmptyStr( $var ) {
		if ( is_string( $var ) && $var !== '' ) {
			return true;
		}
		return false;
	}

	/**
	 * Pass one or more arguments which will be checked until one fails
	 * If atleast one argument is not a non-empty string, or if no arguments / NULL passed
	 * it will return false, otherwise true;
	 */
	public static function nonEmptyStrs( /* $var .. */ ) {
		$args = func_get_args();
		if ( !isset( $args[0] ) ) {
			return false;
		}
		foreach ( $args as $arg) {
			if ( !TsIntuitionUtil::nonEmptyStr( $arg ) ) {
				return false;
			}
		}
		// If we're still here, all are good
		return true;
	}


	/**
	 * A return version of var_dump().
	 * Optionally html-escaped and wrapped in a <pre>-tag.
	 *
	 * @return string
	 */
	public static function returnDump( $var, $html = true) {
		$dump = null;
		ob_start();
		var_dump( $var );
		$dump = ob_get_contents();
		ob_end_clean();
		if ( $html ) {
			return '<pre>' . htmlspecialchars( $dump ) . '</pre>';
		}
		return $dump;
	}

	/* Primitive html building */
	/* Based on kfTag from the BaseTool class */
	public static function tag( $str, $wrapTag = 0, $attributes = array() ) {
		$selfclose = array( 'link', 'input', 'br', 'img' );

		if ( is_string( $str ) ) {
			if ( is_string( $wrapTag ) ) {
				$wrapTag = trim( strtolower( $wrapTag ) );
				$attrString = '';
				if ( is_array ( $attributes ) ) {
					foreach ( $attributes as $attrKey => $attrVal ) {
						$attrKey = htmlspecialchars( trim( strtolower( $attrKey ) ), ENT_QUOTES);
						$attrVal = htmlspecialchars( trim( $attrVal ), ENT_QUOTES);
						$attrString .= " $attrKey=\"$attrVal\"";
					}
				}
				$return = "<$wrapTag$attrString";
				if ( in_array( $wrapTag, $selfclose ) ) {
					$return .= '/>';
				} else {
					$return .= ">" . htmlspecialchars( $str ) ."</$wrapTag>";
				}
			} else {
				$return = $str;
			}
			return $return;
		} else {
			return '';
		}
	}

	/**
	 * Return a list of acceptable languages from an Accept-Language header.
	 * @param $rawList String List of language tags, formatted like an
	 * HTTP Accept-Language header (optional; defaults to $_SERVER['HTTP_ACCEPT_LANGUAGE'])
	 * @return array keyed by language codes with q-values as values.
	 */
	public static function getAcceptableLanguages( $rawList = false ) {
		// Implementation based on MediaWiki 1.21's WebRequest::getAcceptLang
		// Which is based on http://www.thefutureoftheweb.com/blog/use-accept-language-header

		if ( $rawList === false ) {
			$rawList = isset( $_SERVER['HTTP_ACCEPT_LANGUAGE'] ) ?
				$_SERVER['HTTP_ACCEPT_LANGUAGE'] :
				'';
		}

		// Return the language codes in lower case
		$rawList = strtolower( $rawList );

		// The list of elements is separated by comma and optional LWS
		// Extract the language-range and, if present, the q-value
		$lang_parse = null;
		preg_match_all(
			'/([a-z]{1,8}(-[a-z]{1,8})*|\*)\s*(;\s*q\s*=\s*(1(\.0{0,3})?|0(\.[0-9]{0,3})?)?)?/',
			$rawList,
			$lang_parse
		);

		if ( !count( $lang_parse[1] ) ) {
			return array();
		}

		$langcodes = $lang_parse[1];
		$qvalues = $lang_parse[4];
		$indices = range( 0, count( $lang_parse[1] ) - 1 );

		// Set default q factor to 1
		foreach ( $indices as $index ) {
			if ( $qvalues[$index] === '' ) {
				$qvalues[$index] = 1;
			} elseif ( $qvalues[$index] == 0 ) {
				unset( $langcodes[$index], $qvalues[$index], $indices[$index] );
			} else {
				$qvalues[$index] = floatval( $qvalues[$index] );
			}
		}

		// Sort list. First by $qvalues, then by order. Reorder $langcodes the same way
		array_multisort( $qvalues, SORT_DESC, SORT_NUMERIC, $indices, $langcodes );

		// Create a list like "en" => 0.8
		$langs = array_combine( $langcodes, $qvalues );

		return $langs;
	}

	const EXT_LINK_URL_CLASS = '[^][<>"\\x00-\\x20\\x7F\p{Zs}]'; // Copied from Parser class

	/**
	 * Given a text already html-escaped which contains urls in wiki format,
	 * convert it to html.
	 * @param $text
	 * @return string
	 */
	public static function parseExternalLinks( $text ) {
		static $urlProtocols = false;
		if ( !$urlProtocols ) {
			// Allow custom protocols
			if ( function_exists( 'wfUrlProtocols' ) ) {
				$urlProtocols = wfUrlProtocols();
			} else {
				$urlProtocols = 'https?:\/\/|ftp:\/\/';
			}
		}

		$extLinkBracketedRegex = '/(?:(<[^>]*)|' .
			'\[(((?i)' . $urlProtocols . ')' .
				self::EXT_LINK_URL_CLASS .
				'+)\p{Zs}*([^\]\\x00-\\x08\\x0a-\\x1F]*?)\]|' .
			'(((?i)' . $urlProtocols . ')' .
				self::EXT_LINK_URL_CLASS .
				'+))/Su';

		return preg_replace_callback(
			$extLinkBracketedRegex,
			'self::parseExternalLinkArray',
			$text
		);
	}

	/**
	 * Changes the matches of parseExternalLinks into html.
	 */
	private static function parseExternalLinkArray( $bits ) {
		static $counter = 0;

		if ( $bits[1] != '' )
			return $bits[1];

		if ( isset( $bits[4] ) && $bits[4] != '' ) {
			return '<a href="' . $bits[2] . '">' . $bits[4] . '</a>';
		} elseif ( isset( $bits[5] ) ) {
			return '<a href="' . $bits[5] . '">' . $bits[5] . '</a>';
		} else {
			return '<a href="' . $bits[2] . '">[' . ++$counter . ']</a>';
		}
	}

	/**
	 * Given a text already html-escaped which contains wiki links, convert them to html.
	 * @param $text
	 * @param $articlePath
	 * @return string
	 */
	public static function parseWikiLinks( $text, $articlePath ) {
		self::$articlePath = $articlePath;

		return preg_replace_callback(
			'/\[\[:?([^]|]+)(?:\|([^]]*))?\]\]/',
			'self::parseWikiLinkArray',
			$text
		);
	}

	/**
	 * Changes the matches of parseWikiLinks into html
	 */
	private static function parseWikiLinkArray( $bits ) {

		if ( !isset( $bits[2] ) || $bits[2] == '' ) {
			$bits[2] = strtr( $bits[1], '_', ' ' );
		}

		$article = html_entity_decode( $bits[1], ENT_QUOTES, 'UTF-8' );

		return '<a href="' . htmlspecialchars(
			self::prettyEncodedWikiUrl( self::$articlePath, $article ), ENT_COMPAT, 'UTF-8'
		) . '">' . $bits[2] . "</a>";
	}

	/**
	 * Builds a pretty url link to a wiki article.
	 * It assumes the wiki is not hosted on IIS7.
	 *
	 * Most of this logic is taken from wfUrlencode().
	 * @param $articlePath
	 * @param $article
	 * @return string
	 */
	public static function prettyEncodedWikiUrl( $articlePath, $article ) {
		$s = strtr( $article, ' ', '_' );
		$s = urlencode( $s );
		$s = str_ireplace(
			array( '%3B', '%40', '%24', '%21', '%2A', '%28', '%29', '%2C', '%2F', '%3A' ),
			array( ';', '@', '$', '!', '*', '(', ')', ',', '/', ':' ),
			$s
		);

		$s = str_replace( '$1', $s, $articlePath );

		return $s;
	}
}
