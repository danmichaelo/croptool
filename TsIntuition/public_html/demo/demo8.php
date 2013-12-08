<?php
/* Config */
require_once 'demoBase.php';


/* Demonstration */

// 1) Init $I18N
$I18N = new TsIntuition( 'general' /* name of textdomain here */ );

// 2) Register some interesting messages
$I18N->setMsgs( array(
	'welcomeback' => 'Welcome back, $1! Would you like some $2?',
	'basket' => 'The basket contains $1 {{PLURAL:$1|apple|apples}}.',
) );

// 2) Use rendering and formatting

// - Raw echo
echo $I18N->msg( 'apple-stats' );

echo '<br/>';

// - Pass variables
echo '<br/>' . $I18N->msg( 'welcomeback', array( 'variables' => array( 'John', 'coffee' ) ) );

// - Pass variables
echo '<br/>' . $I18N->msg( 'welcomeback', array( 'variables' => array( 'George', 'tea' ) ) );

echo '<br/>';

// - Trigger parser magic, setting $1 to '1'
echo '<br/>' . $I18N->msg( 'basket', array( 'variables' => array( '1' ), 'parsemag' => true ) );

// - Trigger parser magic, setting $1 to '7'
echo '<br/>' . $I18N->msg( 'basket', array( 'variables' => array( '7' ), 'parsemag' => true ) );


/* View source */
closeDemo( __FILE__ );
