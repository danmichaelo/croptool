<?php
/**
 * Get fallbacks from MediaWiki core.
 *
 * @copyright 2011-2012 See AUTHORS.txt
 * @license CC-BY 3.0 <https://creativecommons.org/licenses/by/3.0/>
 * @package TsIntuition
 */

$dir = '/path/to/mediawiki-core/languages/messages/';

// $ getFallbacks.php /path/to/messages
if ( isset( $argv[0] ) && strpos( $argv[0], '/messages' ) ) {
	$dir = $argv[0];
// $ php getFallbacks.php /path/to/messages
} elseif ( isset( $argv[1] ) && strpos( $argv[1], '/messages' ) ) {
	$dir = $argv[1];
}
if ( !is_readable( $dir ) ) {
	echo "Path to languages/messages not found.\n";
	exit(1);
}
$files = scandir( $dir );

$output = fopen( __DIR__ . '/getFallbacks.out', 'w' );

$reg = "@fallback \\= \\'(.*?)\\'\\;@i";

foreach ( $files as $file ) {
	if ( $file === '.' || $file === '..' || $file === '.svn' ) {
		continue;
	}

	$file = $dir.'/'.$file;

	$content = file_get_contents( $file );

	if ( !$content ) {
		exit( 'Error: ' . $file );
	}

	if ( preg_match( $reg, $content, $match ) ) {
		$fallback_lang = $match[1];
		preg_match( '@Messages(.*?)\\.php@', $file, $file_match );
		$source_lang = $file_match[1];
		$source_lang = strtolower( $source_lang );
		fwrite( $output, "\t'" . $source_lang . "' => '" . $fallback_lang . "',\n" );
	}
}
