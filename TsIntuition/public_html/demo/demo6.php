<?php
/* Config */
require_once 'demoBase.php';


/* Demonstration */

// 1) Init $I18N
$I18N = new TsIntuition( 'general' /* name of textdomain here */ );

// 2) Do it

// Simple parentheses
echo $I18N->parentheses( 'hello' );

// Variables
echo '<br/>' . $I18N->msg( 'toolversionstamp', array(
	'variables' => array( '1.0', $I18N->dateFormatted( '2001-01-15' ) ),
) );

// msgExists
echo '<br/>msgExists: ';
var_dump(

	$I18N->msgExists( 'welcome' )

);
var_dump(

	$I18N->msgExists( 'foobar' )

);

// nonEmptyStr
echo '<br/>nonEmptyStr: ';
var_dump(

	TsIntuitionUtil::nonEmptyStr( 'one' )

);

// nonEmptyStrs
echo '<br/>nonEmptyStrs: ';
var_dump(

	TsIntuitionUtil::nonEmptyStrs( 'one', '', 'three' )

);
var_dump(

	TsIntuitionUtil::nonEmptyStrs( 'one', 'three' )

);

// GetAcceptableLanguages
echo "<br/>getAcceptableLanguages: (default: \$_SERVER['HTTP_ACCEPT_LANGUAGE']: " .
	htmlspecialchars( $_SERVER['HTTP_ACCEPT_LANGUAGE'] ) .
	"):<br/>";
var_dump(

	TsIntuitionUtil::getAcceptableLanguages( $_SERVER['HTTP_ACCEPT_LANGUAGE'] )

);

$acceptLang = 'nl-be,nl;q=0.7,en-us,en;q=0.3';
echo "<br/>getAcceptableLanguages: ( '{$acceptLang}' ):<br/>";
var_dump(

	TsIntuitionUtil::getAcceptableLanguages( $acceptLang )

);


/* View source */
closeDemo( __FILE__ );
