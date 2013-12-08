<?php

require_once( dirname( __FILE__ ) . '/../LanguageConverter.php' );
require_once( dirname( __FILE__ ) . '/LanguageZh_hans.php' );

/**
 * class that handles both Traditional and Simplified Chinese
 * right now it only distinguish zh_hans, zh_hant, zh_cn, zh_tw, zh_sg and zh_hk.
 *
 * @ingroup Language
 */
class LanguageZh extends LanguageZh_hans {

	function __construct() {
		
		parent::__construct();

		$variants = array( 'zh', 'zh-hans', 'zh-hant', 'zh-cn', 'zh-hk', 'zh-mo', 'zh-my', 'zh-sg', 'zh-tw' );

		$variantfallbacks = array(
			'zh'      => array( 'zh-hans', 'zh-hant', 'zh-cn', 'zh-tw', 'zh-hk', 'zh-sg', 'zh-mo', 'zh-my' ),
			'zh-hans' => array( 'zh-cn', 'zh-sg', 'zh-my' ),
			'zh-hant' => array( 'zh-tw', 'zh-hk', 'zh-mo' ),
			'zh-cn'   => array( 'zh-hans', 'zh-sg', 'zh-my' ),
			'zh-sg'   => array( 'zh-hans', 'zh-cn', 'zh-my' ),
			'zh-my'   => array( 'zh-hans', 'zh-sg', 'zh-cn' ),
			'zh-tw'   => array( 'zh-hant', 'zh-hk', 'zh-mo' ),
			'zh-hk'   => array( 'zh-hant', 'zh-mo', 'zh-tw' ),
			'zh-mo'   => array( 'zh-hant', 'zh-hk', 'zh-tw' ),
		);
		$ml = array(
			'zh'      => 'disable',
			'zh-hans' => 'unidirectional',
			'zh-hant' => 'unidirectional',
		);
	}

	/**
	 * this should give much better diff info
	 *
	 * @param $text string
	 * @return string
	 */
	function segmentForDiff( $text ) {
		return preg_replace(
			"/([\\xc0-\\xff][\\x80-\\xbf]*)/e",
			"' ' .\"$1\"", $text );
	}

	/**
	 * @param $text string
	 * @return string
	 */
	function unsegmentForDiff( $text ) {
		return preg_replace(
			"/ ([\\xc0-\\xff][\\x80-\\xbf]*)/e",
			"\"$1\"", $text );
	}

	/**
	 * auto convert to zh-hans and normalize special characters.
	 *
	 * @param $string String
	 * @param $autoVariant String, default to 'zh-hans'
	 * @return String
	 */
	function normalizeForSearch( $string, $autoVariant = 'zh-hans' ) {
		wfProfileIn( __METHOD__ );

		// always convert to zh-hans before indexing. it should be
		// better to use zh-hans for search, since conversion from
		// Traditional to Simplified is less ambiguous than the
		// other way around
		$s = $this->mConverter->autoConvert( $string, $autoVariant );
		// LanguageZh_hans::normalizeForSearch
		$s = parent::normalizeForSearch( $s );
		wfProfileOut( __METHOD__ );
		return $s;

	}

	/**
	 * @param $termsArray array
	 * @return array
	 */
	function convertForSearchResult( $termsArray ) {
		$terms = implode( '|', $termsArray );
		$terms = self::convertDoubleWidth( $terms );
		$terms = implode( '|', $this->mConverter->autoConvertToAllVariants( $terms ) );
		$ret = array_unique( explode( '|', $terms ) );
		return $ret;
	}
}

