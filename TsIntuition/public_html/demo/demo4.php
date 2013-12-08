<?php
/* Config */
require_once 'demoBase.php';


/* Demonstration */

// 1) Init TsIntuition
$options = array(
	'domain' => 'tsintuition',

	// Hide any sign of an undefined message to the end-user
	'suppressbrackets' => true,
);
$I18N = new TsIntuition( $options );

// 2) Request an undefined message
// Because 'suppressbrackets' is true,
// this will display "R4nd0mstr1n9" instead of [r4nd0mstr1n9]
echo $I18N->msg( 'r4nd0mstr1n9' );


/* View source */
closeDemo( __FILE__ );
