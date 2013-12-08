<?php

require_once( dirname( __FILE__ ) . '/../LanguageConverter.php' );
require_once( dirname( __FILE__ ) . '/LanguageSr_ec.php' );
require_once( dirname( __FILE__ ) . '/LanguageSr_el.php' );

/**
 * Serbian (Српски / Srpski)
 *
 * @ingroup Language
 */
class LanguageSr extends LanguageSr_ec {
	function __construct() {
		

		parent::__construct();

		$variants = array( 'sr', 'sr-ec', 'sr-el' );
		$variantfallbacks = array(
			'sr'    => 'sr-ec',
			'sr-ec' => 'sr',
			'sr-el' => 'sr',
		);

		$flags = array(
			'S' => 'S', 'писмо' => 'S', 'pismo' => 'S',
			'W' => 'W', 'реч'   => 'W', 'reč'   => 'W', 'ријеч' => 'W', 'riječ' => 'W'
		);
	}

	/**
	 * @param $count int
	 * @param $forms array
	 *
	 * @return string
	 */
	function convertPlural( $count, $forms ) {
		if ( !count( $forms ) ) {
			return '';
		}

		// if no number with word, then use $form[0] for singular and $form[1] for plural or zero
		if ( count( $forms ) === 2 ) {
			return $count == 1 ? $forms[0] : $forms[1];
		}

		// @todo FIXME: CLDR defines 4 plural forms. Form with decimals missing.
		// See http://unicode.org/repos/cldr-tmp/trunk/diff/supplemental/language_plural_rules.html#ru
		$forms = $this->preConvertPlural( $forms, 3 );

		if ( $count > 10 && floor( ( $count % 100 ) / 10 ) == 1 ) {
			return $forms[2];
		} else {
			switch ( $count % 10 ) {
				case 1:  return $forms[0];
				case 2:
				case 3:
				case 4:  return $forms[1];
				default: return $forms[2];
			}
		}
	}

}
