<?php
/**
 * LocalConfig for Toolserver instance at https://toolserver.org/~intuition/.
 */

function intuitionHookInit( $TsIntuition ) {

	// Hide certain tools for now
	$hiddenTools = array(
		'Monumentsapi',
	);

	foreach ( $hiddenTools as $hideTool ) {
		unset( $TsIntuition->registeredTextdomains[$hideTool] );
	}
}
