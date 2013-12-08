<?php

require_once( dirname( __FILE__ ) . '/../LanguageConverter.php' );
require_once( dirname( __FILE__ ) . '/LanguageKk_cyrl.php' );

define( 'KK_C_UC', 'АӘБВГҒДЕЁЖЗИЙКҚЛМНҢОӨПРСТУҰҮФХҺЦЧШЩЪЫІЬЭЮЯ' ); # Kazakh Cyrillic uppercase
define( 'KK_C_LC', 'аәбвгғдеёжзийкқлмнңоөпрстуұүфхһцчшщъыіьэюя' ); # Kazakh Cyrillic lowercase
define( 'KK_L_UC', 'AÄBCÇDEÉFGĞHIİÏJKLMNÑOÖPQRSŞTUÜVWXYÝZ' ); # Kazakh Latin uppercase
define( 'KK_L_LC', 'aäbcçdeéfgğhıiïjklmnñoöpqrsştuüvwxyýz' ); # Kazakh Latin lowercase
// define( 'KK_A', 'ٴابپتجحدرزسشعفقكلمنڭەوۇۋۆىيچھ' ); # Kazakh Arabic
define( 'H_HAMZA', 'ٴ' ); # U+0674 ARABIC LETTER HIGH HAMZA
// define( 'ZWNJ', '‌' ); # U+200C ZERO WIDTH NON-JOINER



/**
 * class that handles Cyrillic, Latin and Arabic scripts for Kazakh
 * right now it only distinguish kk_cyrl, kk_latn, kk_arab and kk_kz, kk_tr, kk_cn.
 *
 * @ingroup Language
 */
class LanguageKk extends LanguageKk_cyrl {

	function __construct() {
		
		parent::__construct();

		$variants = array( 'kk', 'kk-cyrl', 'kk-latn', 'kk-arab', 'kk-kz', 'kk-tr', 'kk-cn' );
		$variantfallbacks = array(
			'kk'      => 'kk-cyrl',
			'kk-cyrl' => 'kk',
			'kk-latn' => 'kk',
			'kk-arab' => 'kk',
			'kk-kz'   => 'kk-cyrl',
			'kk-tr'   => 'kk-latn',
			'kk-cn'   => 'kk-arab'
		);
	}

	/**
	 * Work around for right-to-left direction support in kk-arab and kk-cn
	 *
	 * @return bool
	 */
	function isRTL() {
		$variant = $this->getPreferredVariant();
		if ( $variant == 'kk-arab' || $variant == 'kk-cn' ) {
			return true;
		} else {
			return parent::isRTL();
		}
	}

	/**
	 * It fixes issue with ucfirst for transforming 'i' to 'İ'
	 *
	 * @param $string string
	 *
	 * @return string
	 */
	function ucfirst ( $string ) {
		$variant = $this->getPreferredVariant();
		if ( ( $variant == 'kk-latn' || $variant == 'kk-tr' ) && $string[0] == 'i' ) {
			$string = 'İ' . substr( $string, 1 );
		} else {
			$string = parent::ucfirst( $string );
		}
		return $string;
	}

	/**
	 * It fixes issue with  lcfirst for transforming 'I' to 'ı'
	 *
	 * @param $string string
	 *
	 * @return string
	 */
	function lcfirst ( $string ) {
		$variant = $this->getPreferredVariant();
		if ( ( $variant == 'kk-latn' || $variant == 'kk-tr' ) && $string[0] == 'I' ) {
			$string = 'ı' . substr( $string, 1 );
		} else {
			$string = parent::lcfirst( $string );
		}
		return $string;
	}

	/**
	 * @param $word string
	 * @param $case string
	 * @return string
	 */
	function convertGrammar( $word, $case ) {
		wfProfileIn( __METHOD__ );

		$variant = $this->getPreferredVariant();
		switch ( $variant ) {
			case 'kk-arab':
			case 'kk-cn':
				$word = parent::convertGrammarKk_arab( $word, $case );
				break;
			case 'kk-latn':
			case 'kk-tr':
				$word = parent::convertGrammarKk_latn( $word, $case );
				break;
			case 'kk-cyrl':
			case 'kk-kz':
			case 'kk':
			default:
				$word = parent::convertGrammarKk_cyrl( $word, $case );
		}

		wfProfileOut( __METHOD__ );
		return $word;
	}
}
