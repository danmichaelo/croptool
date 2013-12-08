<?php
/* Config */
require_once 'demoBase.php';


/* Demonstration */

// 1) Init $I18N
$I18N = new TsIntuition( 'general' /* name of textdomain here */ );

// 2) Use language names

// - Current language name
echo $I18N->getLangName();

// - Specific language name
echo '<br/>' . $I18N->getLangName( 'fr' );


/* View source */
closeDemo( __FILE__ );
