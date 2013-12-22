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
	'titleform-filename-not-found' => 'File «$1» not found.',

	'fetching-progress' => 'Please wait while fetching image data and metadata... This might take some time depending on the filesize of the image...',

	'original-dimensions' => 'Original: $1 x $2 px.',
	'thumb-dimensions' => 'Thumbnail: $1 x $2 px.',
	'cropped-dimensions' => 'Cropped: $1 x $2 px.',

	'cropform-select-region' => 'Select a crop region by click-and-drag, or try the <a href ng-click="$1">magic border locator</a>.',
	'cropform-region' => 'Left: $1 px, top: $2 px, right: $3 px, bottom: $4 px.',
	'cropform-method' => 'Method:',
	'cropform-method-precise' => 'Precise',
	'cropform-method-lossless' => 'Lossless',
	'cropform-method-precise-help' => 'The <strong>precise</strong> method respects your selection, but as is usual with precise cropping, the process involves a small quality loss.',
	'cropform-method-lossless-help' => 'The <strong>lossless</strong> method makes use of jpegtran, treating the image in terms of blocks (8x8 or 16x16 px depending on sampling). If the upper left part of the crop region does not fall on a block boundary, the crop region will have to be increased so that it does. The resulting image will therefore in general be a few pixels larger than requested, but never smaller than requested, and never more than 16 px larger.',
	'cropform-preview-btn' => 'Preview',
	'cropform-help' => 'Help',

	'cropping-progress' => 'Please wait while cropping the image...',

    'previewform-lossless' => 'A lossless crop was performed.',
    'previewform-lossless-explanation' => 'The resulting image is $1 px wider and $2 px higher than the region you selected. <a href="$3">Why?</a> Note that the extra pixels included are in the left and/or top part of the image.',
    'previewform-precise' => 'A precise crop was performed.',
    'previewform-overwrite-policy' => 'Please make sure you are familiar with <a href="$1">Commons:Overwriting existing files</a>.',
    'previewform-template-removal-notice' => 'Note that the templates <tt>{{crop}}</tt> and <tt>{{remove border}}</tt> will be removed if found.',
    'previewform-overwrite' => 'Overwrite original',
    'previewform-create-new' => 'Upload as new file:',
	'previewform-new-filename' => 'New filename',
	'previewform-new-filename-exists' => 'File «$1» already exists.',
	'previewform-back-btn' => 'Back',
	'previewform-upload-btn' => 'Upload to Commons',

	'upload-progress' => 'Please wait while uploading...',

	'results-success' => 'Cropped image uploaded successfully!',
	'results-success-details' => 'Please inspect the result by going to <a href="$1">$2</a>, and refresh the page if needed.',
	'results-failure' => 'Cropped image upload failed: $1',

);

/** Message documentation (Message documentation)
 * @author Danmichaelo
 */
$messages['qqq'] = array(
	'title' => '{{Ignore}}
The title of the tool.',

	'cropform-original-dimensions' => 'Parameters:
* $1 - the width of the original image in pixels.
* $2 - the height of the original image in pixels.',

	'cropform-thumb-dimensions' => 'Parameters:
* $1 - the width of the thumbnail in pixels.
* $2 - the height of the thumbnail in pixels.',

	'results-success' => 'Message shown if the upload succeeeds.',
	'results-failure' => 'Message shown if the upload fails.
* $1 - some error message.',

);

