<?php
/**
 * Interface messages for CropTool.
 *
 * @toolowner danmichaelo
 */

$url = '//tools.wmflabs.org/cropcrop/';

$messages = array();

/**
 * English
 *
 * @author Danmichaelo
 */
$messages['en'] = array(
	'title' => 'CropTool', // Ignore
	'logged-in' => 'Authorized as $1',
	'logout' => 'Logout',

	'loginform-header' => 'Authorization required',
	'loginform-blurb' => 'CropTool is a tool for cropping images (currently only jpeg files) at Wikimedia Commons. <a href="$1">Learn more</a>.',
	'loginform-help' => 'To use CropTool you need to connect it to your Wikimedia Commons account. This process is secure and your password will not be given to CropTool.',
	'loginform-submit-button' => 'Connect',

	'titleform-header' => 'What to crop?',
	'titleform-help' => 'Enter the filename for a Wikimedia Commons image you would like to crop.',
	'titleform-filename-label' => 'Filename',
	'titleform-submit-button' => 'Open',
	'titleform-footer' => 'Tip: You can open CropTool directly from a media file at Wikimedia Commons. <a href="$1">Learn more</a>.',

	'fetching-progress-title' => 'Fetching image',
	'fetching-progress-body' => 'Please wait while fetching image data and metadata... This might take some time depending on the filesize of the image...',

);

/** Message documentation (Message documentation)
 * @author Danmichaelo
 */
$messages['qqq'] = array(
	'title' => '{{Ignore}}
The title of the tool.',

);

