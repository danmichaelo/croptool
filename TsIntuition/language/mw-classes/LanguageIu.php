<?php
/**
  * @addtogroup Language
  */

/*
* Conversion script between Latin and Syllabics for Inuktitut.
* - Syllabics -> lowercase Latin
* - lowercase/uppercase Latin -> Syllabics
* 
*
* Based on:
*   - http://commons.wikimedia.org/wiki/Image:Inuktitut.png
*   - LanguageSr.php
*
* @ingroup Language
*/

/**
 * Inuktitut
 *
 * @ingroup Language
 */
class LanguageIu extends Language {
	function __construct() {
		

		parent::__construct();

		$variants = array( 'iu', 'ike-cans', 'ike-latn' );
		$variantfallbacks = array(
			'iu'    => 'ike-cans',
			'ike-cans' => 'iu',
			'ike-latn' => 'iu',
		);

		$flags = array();
	}
}
