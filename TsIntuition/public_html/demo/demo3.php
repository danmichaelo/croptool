<?php
/* Config */
require_once 'demoBase.php';


/* Demonstration */

// 1) Init TsIntuition
$options = array(
	'domain' => 'tsintuition',

	// Show notices
	'suppressnotice' => false,
);
$I18N = new TsIntuition( $options );

// 2) Request an undefined message
// Because 'suppressnotices' is false,
// this will trigger a Notice: 'r4nd0mstr1n9' undefined
echo $I18N->msg( 'r4nd0mstr1n9' );


/* View source */
closeDemo( __FILE__ );
