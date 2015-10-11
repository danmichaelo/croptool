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
	'loginform-blurb' => 'CropTool is a tool for cropping images (JPG, PNG or GIF files) at Wikimedia sites. <a href="$1">Learn more</a>.',
	'loginform-help' => 'To use CropTool you need to connect it to your Wikimedia account. This process is secure and your password will not be given to CropTool.',
	'loginform-submit-button' => 'Connect',

	'titleform-header' => 'What to crop?',
	'titleform-help' => 'Enter the URL or filename for an image you would like to crop.',
	'titleform-file-label' => 'URL or filename',
	'titleform-submit-button' => 'Open',
	'titleform-footer' => 'Tip: You can open CropTool directly from a media file. <a href="$1">Learn more at Commons</a>.',
	'titleform-file-found' => 'File «$1» found on «$2».',
	'titleform-file-not-found' => 'File «$1» not found on «$2».',

	'fetching-progress' => 'Please wait while fetching image data and metadata... This might take some time depending on the image size...',

	'original-dimensions' => 'Original: $1 x $2 px.',
	'thumb-dimensions' => 'Thumbnail: $1 x $2 px.',
	'cropped-dimensions' => 'Cropped: $1 x $2 px.',

	'cropform-select-region' => 'Select a crop region by click-and-drag, or try the <a href ng-click="$1">magic border locator</a>.',
	'cropform-region' => 'Left: $1 px. Right: $3 px.<br>Top: $2 px. Bottom: $4 px.',
	'cropform-method' => 'Crop method:',
	'cropform-method-precise' => 'Precise',
	'cropform-method-lossless' => 'Lossless',
	'cropform-method-precise-help' => 'This method fully respects your selection, but as is usual with precise cropping, the process involves a small quality loss.',
	'cropform-method-lossless-help' => 'This method makes use of jpegtran, treating the image in terms of blocks (8x8 or 16x16 px depending on sampling). If the upper left part of the crop region does not fall on a block boundary, the crop region will have to be increased so that it does. The resulting image will therefore in general be a few pixels larger than requested, but never smaller than requested, and never more than 16 px larger.',
	'cropform-preview-btn' => 'Preview',
	'cropform-help' => 'Help',
	'cropform-aspect-ratio' => 'Aspect ratio:',
	'cropform-aspect-ratio-free' => 'Free',
	'cropform-aspect-ratio-keep' => 'Keep',
	'cropform-aspect-ratio-fixed' => 'Custom',

	'cropping-progress' => 'Please wait while cropping...',

    'previewform-lossless' => 'A lossless crop was performed.',
    'previewform-lossless-explanation' => 'The resulting image is $1 px wider and $2 px higher than the region you selected. <a href="$3">Why?</a> Note that the extra pixels included are in the left and/or top part of the image.',
    'previewform-precise' => 'A precise crop was performed.',
    'previewform-overwrite-policy' => 'Before overwriting, make sure you are familiar with <a href="$1">COM:CROP</a>.',

    'previewform-removed-border' => 'I\'ve removed the border',
    'previewform-removed-border-help' => 'Confirms removal of the \'remove border\' template',
    'previewform-removed-watermark' => 'I\'ve removed the watermark',
    'previewform-removed-watermark-help' => 'Confirms removal of the \'watermark\' template',

    'previewform-overwrite' => 'Overwrite',
    'previewform-create-new' => 'Upload as new file',
	'previewform-new-title' => 'New filename',
	'previewform-new-title-exists' => 'File «$1» already exists.',
	'previewform-upload-comment' => 'Upload comment',
	'previewform-back-btn' => 'Back',
	'previewform-upload-btn' => 'Upload',

	'upload-progress' => 'Please wait while uploading...',

	'results-success' => 'Cropped image uploaded successfully!',
	'results-success-details' => '<a href="$1">View the result</a>. Refreshing the page might be necessary.',
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

