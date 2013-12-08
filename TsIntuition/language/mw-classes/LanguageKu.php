<?php
require_once( dirname( __FILE__ ) . '/../LanguageConverter.php' );
require_once( dirname( __FILE__ ) . '/LanguageKu_ku.php' );


/**
 * Kurdish (Kurdî / كوردی)
 *
 * @ingroup Language
 */
class LanguageKu extends LanguageKu_ku {

	function __construct() {
		
		parent::__construct();

		$variants = array( 'ku', 'ku-arab', 'ku-latn' );
		$variantfallbacks = array(
			'ku'      => 'ku-latn',
			'ku-arab' => 'ku-latn',
			'ku-latn' => 'ku-arab',
		);
	}
}
