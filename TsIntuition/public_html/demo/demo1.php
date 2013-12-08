<?php
/* Config */
require_once 'demoBase.php';


/* Demonstration */

// 1) Init $I18N
$I18N = new TsIntuition( 'general' /* name of textdomain here */ );

// 2) Get message
echo $I18N->msg( 'welcome' );


/* View source */
closeDemo( __FILE__ );
