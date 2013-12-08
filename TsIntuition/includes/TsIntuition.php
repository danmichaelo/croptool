<?php
/**
 * Main class.
 *
 * @copyright 2011-2012 See AUTHORS.txt
 * @license CC-BY 3.0 <https://creativecommons.org/licenses/by/3.0/>
 * @package TsIntuition
 */

// Protect against invalid entry
if( !defined( 'TS_INTUITION' ) ) {
	echo "This file is part of TsIntuition and is not a valid entry point\n";
	exit;
}

/**
 * This file contains the main class which the individual tools will
 * creating an instance of to use and configure their i18n.
 */
class TsIntuition {

	/* Variables
	 * ------------------------------------------------- */

	public $localBaseDir;

	public $registeredTextdomains;

	public $version = '0.1.4';

	public $mode = null; // 'in-tool', 'dashboard'

	// Address to the public html, must end in a slash.
	public $dashboardHome = '//toolserver.org/~intuition/';

	// Construct options
	private $currentTextdomain;

	private $currentLanguage;

	private $suppressfatal;

	private $suppressnotice;

	private $suppressbrackets;

	private $stayalive;

	private $useRequestParam;

	// Changing this will invalidate all cookies
	private $cookieNames = array(
		'userlang' => 'TsIntuition_userlang',
		'track-expire' => 'TsIntuition_expiry'
	);

	// Changing this will break existing permalinks
	private $paramNames = array( 'userlang' => 'userlang' );

	// Here everything will be stored as arrays in arrays
	// Such as: $messageBlob['Textdomain']['langcode']['messagename'] = 'Message string';
	private $messageBlob = array();

	// All loaded text domains and (if available) their information (such as url) in an array
	// $loadedTextdomains['general'] = array( ... );
	private $loadedTextdomains = array();

	// Fallbacks are stored as an array of language codes
	// with their fallback as value
	// Such as Low German falling back to German: langFallbacks['nds'] = 'de';
	private $langFallbacks = null;

	// Language names are stored as an array of language codes
	// with their native name as value
	// Such as as for Spanish: langNames['es'] = 'Español';
	private $langNames = null;

	// This array keeps track of which languages are available in atleast one textdomain
	// $languages['en'] = true;
	private $availableLanguages = array();

	// These variable names will be extracted from the message files
	private $includeVariables = array( 'messages', 'url' );

	// Redirect address and status
	private $redirectTo = null;

	// Instance of MessagesFunctions
	private $messagesFunctions = null;

	/* Init
	 * ------------------------------------------------- */

	/**
	 * Initialize TsIntuition
	 *
	 * Pass a string (domain) or array (options)
	 *
	 * Options:
	 * - lang
	 * - domain
	 * - globalfunctions
	 * - suppressfatal
	 * - suppressnotice
	 * - suppressbrackets
	 * - stayalive
	 * - param
	 */
	public function __construct( $options = array() ) {
		$this->localBaseDir = dirname( __DIR__ );

		if ( is_string( $options ) ) {
			$options = array( 'domain' => $options );
		}

		$defaultOptions = array(
			'domain' => 'general',
			'lang' => null,
			'globalfunctions' => true,
			'suppressfatal' => false,
			'suppressnotice' => true,
			'suppressbrackets' => false,
			'stayalive' => false,
			'param' => true,
			'mode' => 'in-tool',
		);
		$options = array_merge( $defaultOptions, $options );

		$this->mode = $options['mode'];

		$this->loadDomainRegistry();

		// The textdomain of your tool can be set here.
		// Otherwise defaults to 'general'. See also documentation of msg()
		// First character is case-insensitive
		if ( isset( $options['domain'] ) ) {
			$this->setDomain( $options['domain'] );
		}

		// Allow a tool to disable the loading of global functions,
		// in case they have a _() and/or _e() already.
		if ( $options['globalfunctions'] === true ) {
			require_once $this->localBaseDir . '/includes/Functions.php';
		}

		// Allow a tool to suppress fatals, which will prevent TsIntuition from showing fatal errors.
		$this->suppressfatal = $options['suppressfatal'];

		// Allow a tool to suppress notices, which will prevent TsIntuition from showing notices.
		$this->suppressnotice = $options['suppressnotice'];

		// Allow a tool to suppress brackets, msg() will return "Messagekey" instead of "[messagekey]"
		// if this is true.
		$this->suppressbrackets = $options['suppressbrackets'];

		// Allow a tool to prevent TsIntuition for exiting/dieing on fatal errors.
		$this->stayalive = $options['stayalive'];

		// TsIntuition will choose the language based on a cookie. However it
		// can be manually overriden for permalinks through a request parameter.
		// By default this is 'userlang'. If you need this parameter for something else
		// you can disable this system here. To avoid inconsistencies between tools
		// a custom parameter name will not be supported. It's either on or off.
		$this->setUseRequestParam( $options['param'] );

		// Load the initial text domain
		$this->loadTextdomain( $this->getDomain() );

		// Load fallbacks
		$this->loadFallbacks();

		// Load names
		$this->loadNames();

		// A tool may override the automatic initiation with cookies and paramters
		// (ie. during development). Note you can also override it for individual msg calls,
		// by passing the language code as third argument to msg().
		// If options['lang'] is a non-empty string, initLangSelect will use it,
		// instead of it's own routine.

		// Initialize language choise
		$this->initLangSelect( $options['lang'] );

		$this->initHook( $this );

	}

	public function initHook( $TsIntuition ) {

		// Version date (default to this file modification time)
		// Can be overwritten in LocalConfig (ie. from svn info)

		if ( function_exists( 'intuitionHookInit' ) ) {
			intuitionHookInit( $TsIntuition );
		} elseif ( function_exists( 'TsIntuition_inithook' ) ) {
			TsIntuition_inithook( $TsIntuition );
		}

	}


	/* Get/Set variables
	 * ------------------------------------------------- */

	public function getLang() {
		return $this->currentLanguage;
	}

	/**
	 * Set the current language which will be used when requesting messages etc.
	 *
	 * @param $lang String of language code (lowercase). If not a valid string
	 *  setting will stay the same and false is returned.
	 * @return boolean
	 */
	public function setLang( $lang ) {
		if ( TsIntuitionUtil::nonEmptyStr( $lang ) ) {
			$this->currentLanguage = $lang;
			return true;
		}
		return false;
	}

	/**
	 * Get an array of common locale values for setlocale() for
	 * the current language.
	 *
	 * @param $lang string (optional) Pass a language code. Defaults to current language.
	 * @return array
	 */
	public function getLocale( $lang = null, $utf8 = true ) {
		$suffixes = $utf8 ? array( '.UTF-8', '.UTF-8', '.utf8' ) : array( '' );
		$normal = isset( $lang ) ? $lang : $this->getLang();
		$normalUC = strtoupper( $normal );

		// Get 'foo' from 'foo-bar'
		$parts = explode( '-', $normal );
		$short = $parts[0];
		$shortUC = strtoupper( $short );

		$versions = array(
			$normal,				// foo-br	or en
			$normalUC,				// FOO-BR	or EN
			$short.'_'.$shortUC,	// foo_FOO	or en_EN
			$short,					// foo		or en
			$shortUC,				// FOO		or EN
		);
		$return = array();
		foreach ( $versions as $version ) {
			foreach( $suffixes as $suffix ) {
				$return[] = $version.$suffix;
			}
		}
		return array_values( array_unique( $return ) );
	}

	/**
	 * Return the currently selected text domain.
	 * @return string
	 */
	public function getDomain() {
		return $this->currentTextdomain;
	}

	/**
	 * Get an array of all registered text domains.
	 * @return array
	 */
	public function getAllRegisteredDomains() {
		return $this->registeredTextdomains;
	}

	/**
	 * Set the current textdomain which will be used when requesting messages etc.
	 * @return true
	 */
	public function setDomain( $domain ) {
		// Normalise domain name (case-insensitive)
		$this->currentTextdomain = strtolower( $domain );
		return true;
	}

	/**
	 * Cookie names may change over time, don't depend on them.
	 * Each cookie-name has an alias (eg. 'userlang' instead of 'TsIntuition-pref_userlang')
	 * Use getCookieName() if you only need a single value.
	 *
	 * @return array An array of aliases as keys and actual cookienames as values
	 */
	public function getCookieNames() {
		return $this->cookieNames;
	}

	public function getCookieName( $name ) {
		return $this->cookieNames[$name];
	}

	/**
	 * Parameter names may change over time, don't depend on them.
	 * Each paramter-name has an alias (so far the same as the actual value)
	 * Use getParamName() if you only need a single value.
	 *
	 * @return array An array of aliases as keys and actual parameter names as values.
	 */
	public function getParamNames() {
		return $this->paramNames;
	}

	public function getParamName( $name ) {
		return $this->paramNames[$name];
	}

	/**
	 * Whether or not the userlang-parameter is used to determine the
	 * userlanguage during initialization.
	 *
	 * @return boolean
	 */
	public function getUseRequestParam() {
		return $this->useRequestParam;
	}

	/**
	 * Overwrite the setting to use or ignore the userlang-parameter.
	 * Note that it's likely the language intitialization/detection has already
	 * been ran. Call refreshLang() if you want it to re-check the cookies,
	 * parameters, overwrites etc.
	 *
	 * @param $bool boolean True if you want it to use the parameter, false otherwise.
	 * @return boolean False if the passed argument wasn't a boolean, true otherwise.
	 */
	public function setUseRequestParam( $bool ) {
		if ( is_bool( $bool ) ) {
			$this->useRequestParam = $bool;
			return true;
		}
		return false;
	}

	/**
	 * Get an instance of MessagesFunctions
	 *
	 * @return object Instance of MessagesFunction
	 */
	private function getMessagesFunctions() {
		if ( $this->messagesFunctions == null ) {
			require_once $this->localBaseDir . '/language/MessagesFunctions.php';
			$this->messagesFunctions = MessagesFunctions::getInstance( $this->localBaseDir, $this );
			return $this->messagesFunctions;
		} else {
			return $this->messagesFunctions;
		}
	}

	/* Message functions
	 * ------------------------------------------------- */

	/**
	 * Get a message from the message blob
	 *
	 * @param $key string Message key to retrieve a message for.
	 * @param $options mixed (optional) A textdomain-name or an array with one or more
	 *  of the following options:
	 *  - domain: overrides the currently selected textdomain, and if needed loads it from disk
	 *  - lang: overrides the currently selected language
	 *  - variables: numerical array to do variable replacements ($1> var[0], $2> var[1], etc.)
	 *  - raw-variables: boolean to determine whether the variables should be escaped as well
	 *  - parsemag: boolean to determine whether the message sould be tranformed
	 *              using magic phrases (PLURAL, etc.)
	 *  - escape: Optionally the return can be escaped. By default this takes place after variable
	 *            replacement. Set 'raw-variables' to true if you just want the raw message
	 *            to be escaped and have escaped the variables already.
	 *  - * 'plain'
	 *  - * 'html' (<>"& escaped)
	 *  - * 'htmlspecialchars' (alias of 'html')
	 *  - * 'htmlentities' (foreign/UTF-8 chars converted as well)
	 *
	 * @param $fail string Alternate value to return in case the message doesn't exist
	 */
	public function msg( $key = 0, $options = array(), $fail = null ) {

		// Make sure a proper key was passed.
		if ( !TsIntuitionUtil::nonEmptyStr( $key ) ) {
			return $this->bracketMsg( $key, $fail );
		}

		$defaultOptions = array(
			'domain' => $this->getDomain(),
			'lang' => $this->getLang(),
			'variables' => array(),
			'raw-variables' => false,
			'escape' => 'plain',
			'parsemag' => true,
			'externallinks' => false,
			'wikilinks' => false, // Set to a wiki article path for converting
		);

		// If $options was a domain string, convert it now.
		if ( TsIntuitionUtil::nonEmptyStr( $options ) ) {
			$options = array( 'domain' => $options );
		}

		// If $options is still not an array, ignore it and use default
		// Otherwise merge the options with the defaults.
		if ( !is_array( $options ) ) {
			$options = $defaultOptions;
		} else {
			$options = array_merge( $defaultOptions, $options );
		}

		// First character of the message-key is case-insensitive.
		$key = lcfirst( $key );

		// Load if not already loaded
		$domain = $this->loadTextdomain( $options['domain'] );
		$lang = $options['lang'];

		// In case the domain name was invalid or inexistant
		if ( !isset( $this->messageBlob[$domain] ) ) {
			return $this->bracketMsg( $key, $fail );
		}

		// Just in case, one last check:
		$rawMsg = $this->rawMsg( $domain, $lang, $key );
		if ( is_null( $rawMsg ) ) {
			$this->errTrigger( "Message \"$key\" in domain \"$domain\" not found", __METHOD__, E_NOTICE );
			// Fall back to a simple [keyname]
			return $this->bracketMsg( $key, $fail );
		}

		/* Now that we've got the message, do post-processing. */
		$msg = $rawMsg;

		$escapeDone = false;

		// Escape now or do it after variable replacement ?
		if ( $options['raw-variables'] === true ) {
			$msg = TsIntuitionUtil::strEscape( $msg, $options['escape'] );
			$escapeDone = true;
		}

		// Variable replacements
		foreach ( $options['variables'] as $i => $val ) {
			$n = $i + 1;
			$msg = str_replace( "\$$n", $val, $msg );
		}

		// Some parsing work
		if ( $options['parsemag'] === true ) {
			$msg = $this->getMessagesFunctions()->parse( $msg, $lang );
		}

		// If not already escaped, do it now
		if ( !$escapeDone ) {
			$escapeDone = true;
			$msg = TsIntuitionUtil::strEscape( $msg, $options['escape'] );
		}

		if ( is_string( $options['wikilinks'] ) ) {
			$msg = TsIntuitionUtil::parseWikiLinks( $msg, $options['wikilinks'] );
		}

		if ( $options['externallinks'] ) {
			$msg = TsIntuitionUtil::parseExternalLinks( $msg );
		}

		// Finally
		return $msg;

	}

	/**
	 * Get a raw message (handles fallback).
	 *
	 * @param $domain
	 * @param $lang
	 * @param $key
	 * @return string value or null.
	 */
	public function rawMsg( $domain, $lang, $key ) {
		// Use fallback if this message doesn't exist in the current language
		$lang = $this->getLangForTextdomain( $lang, $domain, $key );

		return $this->accessBlob( $domain, $lang, $key );
	}

	/**
	 * Access MessageBlob.
	 *
	 * @param $domain
	 * @param $lang
	 * @param $key
	 * @return string value or null.
	 */
	private function accessBlob( $domain, $lang, $key ) {
		if ( isset( $this->messageBlob[$domain][$lang][$key] ) ) {
			return $this->messageBlob[$domain][$lang][$key];
		} else {
			return null;
		}
	}

	/**
	 * Don't show [brackets] when suppressing errors.
	 * In that case there could be message files missing and invalid language codes chosen.
	 * Just return a somewhat readable string.
	 * We use square brackets for simplicity sake, using inequality brackets (< >) may cause
	 * conflicts with HTML when used wrong.
	 *
	 * @param $key Name of the key to be used
	 * @param $fail (optional) Custom failure return
	 */
	public function bracketMsg( $key, $fail = null ) {
		if ( !is_null( $fail ) ) {
			return $fail;
		}
		if ( $this->suppressbrackets ) {
			return ucfirst( $key ); // Keyname
		}
		return "[$key]"; // [keyname]
	}

	/**
	 * Check is a message exists at all.
	 * If this returns false it means msg() would return "[message-key]"
	 * Parameters the same as msg(), except $fail which is overwritten.
	 *
	 * @return boolean
	 */
	public function msgExists( $key = 0, $options = array() ) {
		// Use the $fail option of msg()
		if ( $this->msg( $key, $options, /* $fail = */ false ) === false ) {
			return false;
		}
		return true;
	}

	/**
	 * Adds or overwrites a message in the blob.
	 * This function is public so tools can use it while testing their tools
	 * and don't need a message to exist in translatewiki.net yet, but don't want to see [msgkey]
	 * either. See also addMsgs() for registering multiple messages.
	 *
	 * First two parameters are required. Others (domain, language) default to current environment.
	 */
	public function setMsg( $key, $message, $domain = null, $lang = null ) {

		if ( !TsIntuitionUtil::nonEmptyStr( $domain ) ) {
			$domain = $this->getDomain();
		} else {
			// Normalise domain name (case-insensitive)
			$domain = strtolower( $domain );
		}
		if ( !TsIntuitionUtil::nonEmptyStr( $lang ) ) {
			$lang = $this->getLang();
		}
		$this->messageBlob[$domain][$lang][$key] = $message;
	}

	/**
	 * Set multiple messages in the blob.
	 *
	 * First parameter is required. Others (domain, language) default to current environment.
	 */
	public function setMsgs( $messagesByKeys, $domain = null, $lang = null ) {
		foreach ( $messagesByKeys as $key => $message ) {
			$this->setMsg( $key, $message, $domain, $lang );
		}
	}

	public function listMsgs( $domain ) {
		return array_keys( $this->messageBlob[$domain]['en'] );
	}


	/* Lang functions
	 * ------------------------------------------------- */

	/**
	 * Calculate which language can be used for the message
	 * in the given domain. If possible, returns the $lang
	 * passed right away, otherwise it looks for a suitable falback
	 *
	 * @param $lang string Preferred language
	 * @param $domain string Domain to search within (the existence of this domain should be checked
	 *  before calling this function). Note that the domainname should've been sanatized by now.
	 * @param $key string Key of the wanted message
	 * @return string Language code
	 */
	private function getLangForTextdomain( $lang, $domain, $key ) {
		$msgDomain = $this->messageBlob[$domain];

		// If it's available, just use it
		if ( isset( $msgDomain[$lang] ) && isset( $msgDomain[$lang][$key] ) ) {
			return $lang;
		}

		// Otherwise use the fallback
		$lang = $this->getLangFallback( $lang );
		if ( isset( $msgDomain[$lang] ) && isset( $msgDomain[$lang][$key] ) ) {
			return $lang;
		}

		// Otherwise use the fallback's fallback
		$lang = $this->getLangFallback( $lang );
		if ( isset( $msgDomain[$lang] ) && isset( $msgDomain[$lang][$key] ) ) {
			return $lang;
		}

		// Otherwise default to English
		return 'en';
	}

	/**
	 * Return the fallback language for the given language (if available)
	 * returns 'en' otherwise.
	 *
	 * @param $lang string Language code of language to get fallback for.
	 * @return string
	 */
	public function getLangFallback( $lang ) {

		return isset( $this->langFallbacks[$lang] ) ? $this->langFallbacks[$lang] : 'en';
	}

	/**
	 * Return the language name in the native language.
	 * @param $lang string Language code
	 * @return string
	 */
	public function getLangName( $lang = false ) {
		$lang = $lang ? $lang : $this->getLang();
		return isset( $this->langNames[$lang] ) ? $this->langNames[$lang] : '';
	}

	/**
	 * Return all known languages.
	 * @return array
	 */
	public function getLangNames() {
		return is_array( $this->langNames ) ? $this->langNames : array();
	}

	/**
	 * Return all languages loaded in at least one domain
	 * @param $domain
	 *  false - Show languages for which there is a translation in the current domain
	 *  'any' - Show languages for which there is a translation in at least one domain
	 *  domain name - Show languages for which there is a translation in the given domain
	 */
	public function getAvailableLangs($domain = 'any') {
		if ( $domain == 'any' ) {
			$from = $this->availableLanguages;
		} else {
			if ( $domain === false )
				$domain = $this->getDomain();

			$from = isset( $this->messageBlob[$domain] ) ? $this->messageBlob[$domain] : array();
		}

		$return = array();
		foreach( array_keys( $from ) as $lang ) {
			$return[$lang] = $this->getLangName( $lang );
		}
		ksort( $return );
		return $return;
	}


	/* Textdomain functions
	 * ------------------------------------------------- */

	/**
	 * Load a textdomain (if not loaded already).
	 *
	 * @param $domain string Name of the textdomain (case-insensitive)
	 * @return False on error, (normalized) domainname if success.
	 */
	public function loadTextdomain( $domain ) {

		// Generally validate input and protect against path traversal
		if ( !TsIntuitionUtil::nonEmptyStr( $domain ) ||
			strcspn( $domain, ":/\\\000" ) !== strlen( $domain )
		) {
			$this->errTrigger( "Invalid textdomain \"$domain\"", __METHOD__, E_NOTICE );
			return false;
		}

		// Normalise domain name (case-insensitive)
		$domain = strtolower( $domain );

		// Don't load if already loaded
		if ( isset( $this->loadedTextdomains[$domain] ) ) {
			return $domain;
		}

		// Error out if unregistered
		if  ( !isset( $this->registeredTextdomains[$domain] ) ) {
			return false;
		}

		// File exists ?
		$path = $this->localBaseDir . "/language/messages/" . $this->registeredTextdomains[$domain];
		if ( !file_exists( $path ) ) {
			$this->errTrigger( "Textdomain file not found for \"$domain\" at $path. Ignoring",
				__METHOD__, E_NOTICE, __FILE__, __LINE__ );
			return false;
		}

		// Load it
		$load = $this->loadTextdomainFromFile( $path, $domain );

		// Return (normalized) domainname or false
		return !!$load ? $domain : false;

	}

	/**
	 * @param string $filePath
	 * @param string $domain
	 */
	public function loadTextdomainFromFile( $filePath, $domain ) {
		if ( !TsIntuitionUtil::nonEmptyStrs( $filePath, $domain ) ) {
			$this->errTrigger( 'One or more arguments are missing', __METHOD__, E_NOTICE,
				__FILE__, __LINE__
			);
			return false;
		}

		// Load it
		$included = include $filePath;

		if ( $included === false ) {
			$this->errTrigger( "File $filePath could not be loaded ", __METHOD__, E_NOTICE,
				__FILE__, __LINE__
			);
			return false;
		}

		// Parse it
		$compact = compact( $this->includeVariables );
		$this->parseTextdomain( $compact, $domain, $filePath );
		return true;
	}

	/**
	 * @DOCME:
	 */
	private function parseTextdomain( $data, $domain, $filePath ) {
		if ( !is_array( $data ) ) {
			$this->errTrigger( 'Invalid $data passed to ' . __FUNCTION__, __METHOD__, E_ERROR,
				__FILE__, __LINE__
			);
		}

		// Were there any message defined in the textdomain file ?
		if ( !isset( $data['messages'] ) || !is_array( $data['messages'] ) ) {
			$this->errTrigger( 'No $messages array found', __METHOD__, E_ERROR, $filePath );
		}
		unset( $data['messages']['qqq'] ); // Workaround

		// Load the message into the blob
		// overwrites the existing array of messages if it already existed
		// If you need to add or overwrite some messages temporarily,
		// use Itui::setMsg() or Itui::setMsgs() instead
		foreach ( $data['messages'] as $langcode => $messages ) {
			$this->availableLanguages[$langcode] = true;
			$this->setMsgs( (array) $messages, $domain, $langcode );
		}

		// Was there a url defined in the textdomain file ?
		$url = isset( $data['url'] ) ? $data['url'] : null;

		$this->loadedTextdomains[$domain] = array( 'url' => $url );

		return true;
	}

	/**
	 * Get information about a text domain.
	 *
	 * @param $domain string
	 * @return array
	 */
	public function getDomainInfo( $domain ) {
		// Load if registered but not already loaded
		$normalised = $this->loadTextdomain( $domain );

		if ( isset( $this->loadedTextdomains[$normalised] ) &&
			is_array( $this->loadedTextdomains[$normalised] )
		) {
			return $this->loadedTextdomains[$normalised];
		} else {
			return array();
		}
	}


	/* Cookie functions
	 * ------------------------------------------------- */

	/**
	 * Set a cookie.
	 *
	 * @param $name string Canonical name of the cookie.
	 * @param $val string Value to be set.
	 * @param $lifetime int Lifetime in seconds from now.
	 *
	 * @return boolean
	 */
	public function setCookie( $key, $val, $lifetime = 2592000, $track = TSINT_COOKIE_TRACK ) {
			// Validate cookie name
			$name = $this->getCookieName( $key );
			if ( !$name ) {
				return false;
			}

			$val = strval( $val );
			$lifetime = intval( $lifetime );
			$expire = time() + $lifetime;

			// Set a 30-day domain-wide cookie
			setcookie( $name, $val, $expire, '/' );

			// In order to keep track of the expiration date, we set another cookie
			if ( $track === TSINT_COOKIE_TRACK ) {
				$this->setExpiryTrackerCookie( $lifetime );
			}

			return true;
	}

	/**
	 * Browsers don't send the expiration date of cookies with the request
	 * In order to keep track of the expiration date, we set an additional cookie.
	 */
	private function setExpiryTrackerCookie( $lifetime ) {
		$val = time() + $lifetime;
		$this->setCookie( 'track-expire', $val, $lifetime, TSINT_COOKIE_NOTRACK );
		return true;
	}

	/**
	 * Renew all cookies
	 */
	public function renewCookies( $lifetime = 2592000 /* 30 days */ ) {
		foreach( $this->getCookieNames() as $key => $name ) {
			if ( $key === 'track-expire' ) {
				continue;
			}
			$this->setCookie( $key, $_COOKIE[$name], $lifetime, TSINT_COOKIE_NOTRACK );
		}
		$this->setExpiryTrackerCookie( $lifetime );
		return true;
	}

	/**
	 * Delete all TsIntuition cookies.
	 * It's recommended to redirectTo() directly after this.
	 * @return boolean
	 */
	public function wipeCookies() {
		$week = 7 * 24 * 3600;
		foreach( $this->getCookieNames() as $key => $name ) {
			$this->setCookie( $key, '', 0 - $week, TSINT_COOKIE_NOTRACK );
			unset( $_COOKIE[$name] );
		}
		return true;
	}

	/**
	 * Get expiration timestamp.
	 * @return integer Unix timestamp of expiration date or 0 if not available.
	 */
	public function getCookieExpiration() {
		$name = $this->getCookieName( 'track-expire' );
		$expire = isset( $_COOKIE[$name] ) ? intval( $_COOKIE[$name] ) : 0;
		return $expire;
	}

	/**
	 * Get expected lifetime left in seconds.
	 * Returns 0 if expired or unavailable.
	 */
	public function getCookieLifetime() {
		$expire = $this->getCookieExpiration();
		$lifetime = $expire - time();
		// If already expired (-xxx), return 0
		return $lifetime < 0 ? 0 : $lifetime;
	}

	public function hasCookies() {
		return isset( $_COOKIE[ $this->getCookieName( 'userlang' ) ] );
	}


	/* Magic words
	 * ------------------------------------------------- */

	/**
	 * FIXME: Implement in language/MessagesFunctions.php.
	 *
	 * @todo
	 */
	public function gender( $male, $female, $neutral ) {
		// Depends on getGender() which doesn't exist yet
		throw new BadMethodCallException( 'Not supported yet!' );
	}

	/**
	 * Can be founded in language/MessagesFunctions.php.
	 *
	 * @see MessagesFunctions::parse
	 * @see MessagesFunctions::plural
	 * @deprecated
	 */
	public function plural( $count, $forms ) {
		throw new BadMethodCallException(
			"Use msg() with \"parse\" option to support PLURAL!"
		);
	}


	/* Load functions
	 * ------------------------------------------------- */


	/**
	 * Load domains
	 *
	 * @private
	 *
	 * @return true
	 */
	private function loadDomainRegistry() {

		// Don't load twice
		if ( is_array( $this->registeredTextdomains ) ) {
			return false;
		}

		$path = $this->localBaseDir . '/language/Domains.php';
		if ( !file_exists( $path ) ) {
			$this->errTrigger( 'Domains.php is missing', __METHOD__, E_NOTICE, __FILE__, __LINE__ );
			return false;
		}

		// Load it
		$domains = array();
		include $path;
		$this->registeredTextdomains = $domains;

		return true;
	}


	/**
	 * Load fallbacks
	 *
	 * @private
	 *
	 * @return true
	 */
	private function loadFallbacks() {

		// Don't load twice
		if ( is_array( $this->langFallbacks ) ) {
			return false;
		}

		$path = $this->localBaseDir . '/language/Fallbacks.php';
		if ( !file_exists( $path ) ) {
			$this->errTrigger( 'Fallbacks.php is missing', __METHOD__, E_NOTICE, __FILE__, __LINE__ );
			return false;
		}

		// Load it
		$fallbacks = array();
		include $path;
		$this->langFallbacks = $fallbacks;

		return true;
	}

	/**
	 * Load names
	 *
	 * @private
	 *
	 * @return true
	 */
	private function loadNames() {

		// Don't load twice
		if ( is_array( $this->langNames ) ) {
			return false;
		}

		$path = $this->localBaseDir . '/language/mw-classes/Names.php';
		if ( !file_exists( $path ) ) {
			$this->errTrigger( 'Names.php is missing', __METHOD__, E_NOTICE, __FILE__, __LINE__ );
			return false;
		}

		// Load it
		$coreLanguageNames = array();
		include $path;
		$this->langNames = $coreLanguageNames;

		return true;
	}


	/* Output promo and dashboard backlinks
	 * ------------------------------------------------- */

	/**
	 * Show a link that explains that this tool has been
	 * localized via Toolserver Intuition and that they
	 * can change the language by setting their preference
	 * in the dashboard. Or (if they've done so already)
	 * that they can manage their settings there
	 */
	public function dashboardBacklink() {

		if ( $this->hasCookies() ) {
			$text = $this->msg( 'bl-mysettings', 'tsintuition' );
		} else {
			$text = $this->msg( 'bl-mysettings-new', 'tsintuition' );
		}
		return '<span class="tsint-dashboardbacklink">' . TsIntuitionUtil::tag(
			$text,
			'a',
			array(
				'href' => $this->getDashboardReturnToUrl(),
				'title' => $this->msg( 'bl-changelanguage', 'tsintuition' ),
			)
		) . '</span>';
	}

	/**
	 * Show a promobox on the bottom of your tool.
	 *
	 * @param $imgSize integer (optional) Defaults to 28px.
	 * If 0 or a non-integer the image will be hidden.
	 * @param $helpTranslateDomain mixed (optional)
	 * - null (or nothing, default): Current domain
	 * - true: All domains
	 * - string: Custom domain
	 * - false: Disable this message all together.
	 * @return The HTML for the promo box.
	 */
	public function getPromoBox( $imgSize = 28, $helpTranslateDomain = TSINT_HELP_CURRENT ) {

		// Logo
		if ( is_int( $imgSize ) && $imgSize > 0 ) {
			$src = '//upload.wikimedia.org/wikipedia/commons/thumb/b/be'
				. '/Wikimedia_Community_Logo-Toolserver.svg'
				. "/{$imgSize}px-Wikimedia_Community_Logo-Toolserver.svg.png";
			$img = TsIntuitionUtil::tag( '', 'img', array(
				'src' => $src,
				'width' => $imgSize,
				'height' => $imgSize,
				'alt' => '',
				'title' => '',
				'class' => 'tsint-logo',
			) );
		} else {
			$img = '';
		}

		// Promo message
		$promoMsgOpts = array(
			'domain' => 'tsintuition',
			'escape' => 'html',
			'raw-variables' => true,
			'variables' => array(
				'<a href="//translatewiki.net/">translatewiki.net</a>',
				'<a href="' . $this->dashboardHome . '">Toolserver Intuition</a>'
			),
		);
		$powered = $this->msg( 'bl-promo', $promoMsgOpts );
		$change = $this->msg( 'bl-changelanguage', 'tsintuition' );

		// Help translation
		if ( $helpTranslateDomain === TSINT_HELP_ALL ) {
			$helpTranslateDomain = '0-all';
			$twLinkText = $this->msg( 'help-translate-all', 'tsintuition' );

		} elseif ( $helpTranslateDomain === TSINT_HELP_CURRENT ) {
			$helpTranslateDomain = $this->getDomain();
			$twLinkText = $this->msg( 'help-translate-tool', 'tsintuition' );

		} else { // TSINT_HELP_NONE
			$twLinkText = $this->msg( 'help-translate-tool', 'tsintuition' );
		}

		$helpTranslateLink = '';

		if ( is_string( $helpTranslateDomain ) ) {

			$helpTranslateDomain = strtolower( $helpTranslateDomain );

			// translatewiki.net/w/i.php?language=nl&title=Special:Translate&group=tsint-0-all
			$twParams = array(
				'title' => 'Special:Translate',
				'language' => $this->getLang(),
				'group' => "tsint-$helpTranslateDomain",
			);
			$twParams = http_build_query( $twParams );
			$helpTranslateLink = '<small>(' . TsIntuitionUtil::tag( $twLinkText, 'a', array(
				'href' => "//translatewiki.net/w/i.php?$twParams",
				'title' => $this->msg( 'help-translate-tooltip', 'tsintuition' )
			) ) . ')</small>';
		}

		// Build output
		return
			"<div class=\"tsint-promobox\"><p><a href=\"{$this->getDashboardReturnToUrl()}\">$img</a> "
			. "$powered {$this->dashboardBacklink()} $helpTranslateLink</p></div>";
	}

	/**
	 * Show a typical "powered by .." footer line.
	 * Same as getPromoBox() but without the image.
	 */
	public function getFooterLine( $helpTranslateDomain = TSINT_HELP_CURRENT ) {
		return $this->getPromoBox( 'no-image', $helpTranslateDomain );
	}

	/**
	 * Build a permalink to the dashboard with a returnto query
	 * to return to the current page. To be used in other tools.
	 *
	 * @example:
	 *  Location: //toolserver.org/~foo/JohnDoe.php?wiki=loremwiki_p
	 *  HTML:
	 *  '<p>Change the settings <a href="' . $I18N->getDashboardReturnToUrl() . '">here</a>';
	 *
	 *
	 */
	public function getDashboardReturnToUrl() {
		$p = array(
			'returnto' => $_SERVER['SCRIPT_NAME'],
			'returntoquery' => http_build_query( $_GET ),
		);
		$p = http_build_query( $p );
		return "{$this->dashboardHome}?$p#tab-settingsform";
	}


	/* Redirect functions
	 * ------------------------------------------------- */

	/**
	 * Redirect or refresh to url. Pass null to undo redirection.
	 *
	 * @param $url string
	 * @param $code integer (optional)
	 *
	 * @return false on failure.
	 */
	public function redirectTo( $url = 0, $code = 302 ) {
		if ( is_null( $url ) ) {
			$this->redirectTo = null;
			return true;
		}
		if ( !is_string( $url ) || !is_int( $code ) ) {
			return false;
		}
		$this->redirectTo = array( $url, $code );
	}

	public function doRedirect() {
		if ( is_array( $this->redirectTo ) ) {
			header( 'Content-Type: text/html; charset=utf-8' );
			header( 'Location: ' . $this->redirectTo[0], true, $this->redirectTo[1] );
			exit;
		} else {
			return false;
		}
	}

	public function isRedirecting() {
		return is_array( $this->redirectTo );
	}


	/* Other functions
	 * ------------------------------------------------- */

	public function parentheses( /* $this->msg( [arguments] ) */ ) {
		$msg = call_user_func_array(
			array( $this, 'msg' ),
			func_get_args()
		);
		return $this->parensWrap( $msg );
	}

	/**
	 * @param string $content: Text or HTML to be wrapped in parentheses.
	 * @param string $escape: Any valid format for TsIntuitionUtil::strEscape.
	 */
	public function parensWrap( $content, $escape = 'plain' ) {
		return $this->msg(
			'parentheses',
			array(
				'domain' => 'general',
				'raw-variables' => true,
				'variables' => array( TsIntuitionUtil::strEscape( $content, $escape ) ),
			)
		);
	}

	/**
	 * Get a localized date. Pass a format, time or both.
	 * Defaults to the current timestamp in the language's default date format.
	 *
	 * @param $format string Date format compatible with strftime()
	 * @param $timestamp mixed Timestamp (seconds since unix epoch) or string (ie. "2011-12-31")
	 * @param $lang string Language code. Defaults to current langauge (through getLocale() )
	 *
	 * @return string
	 */
	public function dateFormatted( $first = null, $second = null, $lang = null ) {

		// One argument or less
		if ( is_null( $second ) ) {

			// No arguments
			if ( is_null( $first ) ) {
				$format = $this->msg( 'dateformat', 'general' );
				$timestamp = time();

			// Timestamp only
			} elseif ( is_int( $first ) ) {
				$format = $this->msg( 'dateformat', 'general' );
				$timestamp = $first;

			// Date string only
			} elseif ( strtotime( $first ) ) {
				$format = $this->msg( 'dateformat', 'general' );
				$timestamp = strtotime( $first );

			// Format only
			} else {
				$format = $first;
				$timestamp = time();
			}

		// Two arguments
		} else {
			$format = $first;
			$timestamp = is_int( $second ) ? $second : strtotime( $second );
		}

		// Save current setlocale
		$saved = setlocale( LC_ALL, 0 );

		// Overwrite for current language
		setlocale( LC_ALL, $this->getLocale( $lang ) );
		$return = strftime( $format, $timestamp );

		// Reset back to what it was
		setlocale( LC_ALL, $saved );

		return $return;

	}

	/**
	 * Check language choice tree in the following order:
	 * - First: Construct override
	 * - Second: Parameter override
	 * - Third: Saved cookie
	 * - Fourth: Preferences from Accept-Language header
	 * - Fifth: A language which is a prefix for one of the
	 * Accept-Language preferences.
	 * - Sixth: English (default stays)
	 *
	 * @private
	 *
	 * @return true
	 */
	private function initLangSelect( $option ) {
		$set = false;

		if ( isset( $option ) && !empty( $option ) ) {
			$set = $this->setLang( $option );
		}

		if ( !$set && $this->getUseRequestParam() === true &&
			isset( $_GET[ $this->paramNames['userlang'] ] )
		) {
			$set = $this->setLang( $_GET[ $this->paramNames['userlang'] ] );
		}

		if ( !$set && isset( $_COOKIE[ $this->cookieNames['userlang'] ] ) ) {
			$set = $this->setLang( $_COOKIE[ $this->cookieNames['userlang'] ] );
		}

		if ( !$set ) {
			$acceptableLanguages = TsIntuitionUtil::GetAcceptableLanguages();
			foreach ( $acceptableLanguages as $acceptLang => $qVal ) {

				if ( $acceptLang === '*' ) {

					/**
					 * We pick the first available language which is not in $acceptableLanguages.
					 * The special * range matches every tag not matched by any other range.
					 * Other language codes in $acceptableLanguages will either have a lower q-value,
					 * or be missing from availableLanguages.
					 * The order will be the one in the i18n file: en, af, ar...
					 */
					foreach ( $this->availableLanguages as $availableLang => $true ) {
						if ( !isset( $acceptableLanguages[$availableLang] ) ) {
							$n = strstr( $availableLang, '-' );
							// Assumption: We won't have translations for languages with more than
							// 1 dashe on the language tag
							if ( $n !== false &&
								!isset( $acceptableLanguages[ substr( $availableLang, 0, $n - 1 ) ] )
							) {
								// if we have non-Chinese translations, zh-hans should not be
								// picked for "fr,*;q=0.3,zh;q=0.1".
								continue;
							}

							$set = $this->setLang( $availableLangf );
							break;
						}
					}
					if ( $set ) {
						break;
					}

				} elseif ( isset( $this->availableLanguages[$acceptLang] ) ) {
					$set = $this->setLang( $acceptLang );
					break;
				}
			}
		}

		/* From this point on, we are choosing amongst languages with a $qVal of 0 */

		if ( !$set ) {
			/**
			 * Some browsers show (apparently by default) only a tag,
			 * such as "ru-RU", "fr-FR" or "es-mx".
			 * This is broken behavior! The browser should be providing
			 * appropriate guidance.
			 * Providing only a full tag is doing a disservice.
			 * See RFC 2616 section 1.4 - http://tools.ietf.org/html/rfc2616#page-105
			 */
			foreach ( $acceptableLanguages as $acceptLang => $qVal ) {
				if ( !$qVal ) {
					continue;
				}

				while ( ( $n = strstr( $acceptLang, '-' ) ) !== false ) {
					$acceptLang = substr( $acceptLang, 0, $n - 1 );

					if ( isset( $this->availableLanguages[$acceptLang] ) ) {
						$set = $this->setLang( $acceptLang );
						break 2;
					}
				}
			}
		}

		if ( !$set ) {
			$set = $this->setLang( 'en' );
		}

		return $set;
	}

	/**
	 * Take a list of strings and build a locale-friendly comma-separated
	 * list, using the local comma-separator message.
	 * The last two strings are chained with an "and".
	 *
	 * @param $l Array
	 * @return string
	 */
	function listToText( $l ) {
		$s = '';
		$m = count( $l ) - 1;
		if ( $m == 1 ) {
			$s = $l[0] . $this->msg( 'and', array( 'domain' => 'general' ) ) .
				$this->msg( 'word-separator', array( 'domain' => 'general' ) ) .
				$l[1];
		} else {
			for ( $i = $m; $i >= 0; $i-- ) {
				if ( $i == $m ) {
					$s = $l[$i];
				} elseif ( $i == $m - 1 ) {
					$s = $l[$i] . $this->msg( 'and', array( 'domain' => 'general' ) ) .
						$this->msg( 'word-separator', array( 'domain' => 'general' ) ) .
						$s;
				} else {
					$s = $l[$i] .
						$this->msg( 'comma-separator', array( 'domain' => 'general' ) ) .
						$s;
				}
			}
		}
		return str_replace( '&#32;', ' ', $s );
	}

	/**
	 * Redo language init
	 * Use this when you've changed the cookies and don't want to refresh
	 * for it to be applied
	 * @return true
	 */
	public function refreshLang() {
		$this->initLangSelect();
		return true;
	}

	private function errMsg( $msg, $context ) {
		return "[$context] $msg";
	}

	// Custom version of trigger_error() that can be passed a custom filename and line number
	public function errTrigger( $msg, $context, $level = E_WARNING, $file = '', $line = '' ) {
		$die = false;
		$error = false;
		$notice = false;
		switch ( $level ) {
			// Fatal
			case E_ERROR:
			case E_CORE_ERROR:
			case E_COMPILE_ERROR:
			case E_USER_ERROR:
			case E_RECOVERABLE_ERROR:
				$code = 'Fatal error';
				$error = true;
				$die = true;
				break;

			// Warning
			case E_WARNING:
			case E_CORE_WARNING:
			case E_COMPILE_WARNING:
			case E_USER_WARNING:
				$code = 'Warning';
				$error = true;
				break;

			// Notice
			case E_NOTICE:
				$code = 'Notice';
				$notice = true;
				break;

			// Unknown
			default:
				$code = 'Unknown error';
		}

		if ( $error && $this->suppressfatal ) {
			return;
		}
		if ( $notice && $this->suppressnotice ) {
			return;
		}

		if ( PHP_SAPI === 'cli' ) {
			echo "$code: " . $this->errMsg( $msg, $context ) .
				( $file ? " in $file" : '' ) .
				( $line ? " on line $line" : '' ) .
				'.';
		} else {
			echo "<b>$code: </b>" . htmlspecialchars( $this->errMsg( $msg, $context ) ) .
				( $file ? " in <b>$file</b>" : '' ) .
				( $line ? " on line <b>$line</b>" : '' ) .
				'.<br/>';
		}

		if ( $die && !$this->stayalive ) {
			die;
		}
	}

	/**
	 * Returns true if a language is Right-to-left
	 * @param $code String Language code to get the property from,
	 * current language if missing
	 * @return Boolean
	 */
	public function isRtl( $code = null ) {
		if ( !$code ) {
			$code = $this->getLang();
		}
		require $this->localBaseDir . '/language/Rtl.php';

		return in_array( $code, $rtlLanguages );
	}

	/**
	 * Return the correct HTML 'dir' attribute value for this language.
	 * @return String
	 */
	public function getDir( $code = null ) {
		return $this->isRtl( $code ) ? 'rtl' : 'ltr';
	}
}
