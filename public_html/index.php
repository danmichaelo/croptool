<?php

if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'http') {
	$redirect = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	header("Location: $redirect");
	exit;
}

require('../TsIntuition/ToolStart.php'); // for testing
//require('/home/project/intuition/src/Intuition/ToolStart.php');
require('common.php');

// Localization using TsIntuition
// https://github.com/Krinkle/TsIntuition/wiki/Documentation

$I18N = new TsIntuition(array(
	'domain' => 'croptool',
));


?>
<!doctype html>
<html ng-app="croptool">
<head>
  <title><?php echo $I18N->msg('title'); ?></title>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8">

<script>

// if (window.location.protocol != "https:")
//     window.location.href = "https:" + window.location.href.substring(window.location.protocol.length);

</script>

  <link rel="stylesheet" type="text/css" href="//tools-static.wmflabs.org/cdnjs/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//tools-static.wmflabs.org/cdnjs/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="//tools-static.wmflabs.org/cdnjs/ajax/libs/jquery-jcrop/0.9.12/css/jquery.Jcrop.min.css">
  <link rel="stylesheet" type="text/css" href="components/ladda/dist/ladda-themeless.min.css">
  <link rel="stylesheet" type="text/css" href="app.css">

  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/angular.js/1.2.28/angular.min.js"></script>
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/angular.js/1.2.28/angular-sanitize.min.js"></script>
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/angular-ui-bootstrap/0.13.4/ui-bootstrap-tpls.min.js"></script>
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/jquery-jcrop/0.9.12/js/jquery.Jcrop.min.js"></script>
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/angular-local-storage/0.1.5/angular-local-storage.min.js"></script>
  <script src="components/ladda/js/spin.js"></script>
  <script src="components/ladda/js/ladda.js"></script>
  <script src="components/angular-ladda/dist/angular-ladda.min.js"></script>
  <script src="app.js"></script>

</head>
<body ng-controller="AppCtrl">

<div class="container2">

    <?php echo $testingEnv ? '<p style="position:absolute; right:0; top: 0; font-size: 80%; background: yellow;"><strong>NOTE:</strong> We are in a testing environment</p>' : ''; ?>

    <!-- ********************************************************************************************************
        Notice
        **************************************************************************************************** -->

    <div ng-show="showNotice" style="padding: .3em; background: #eeee88; text-align:center; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px;">
        <a style="float:right; padding: .1em 2em;" href="#" ng-click="dismissNotice();">[Dismiss]</a>
        20 Sept: CropTool now supports PNG and (animated) GIF files.
        <a href="https://github.com/danmichaelo/croptool/issues">Report issues here</a>
    </div>

    <!-- ********************************************************************************************************
        Header
        **************************************************************************************************** -->

    <div ng-show="user" style="float:right; padding:.3em 0;" ng-controller="LoginCtrl">
        <div class="panel-body">
            <?php echo $I18N->msg('logged-in', array('variables' => array('{{user.name}}'))); ?>.
            <a href ng-click="logout()"><?php echo $I18N->msg('logout'); ?></a>
        </div>
    </div>

    <h1>
        <a href ng-click="imageUrlOrTitle = ''; openFile()">
            <i class="fa fa-crop"></i>
            <?php echo $I18N->msg('title'); ?></a>
        <span ng-show="metadata">
        : {{title}}
        </span>
    </h1>

    <!-- ********************************************************************************************************
        If not authorized, show "login form"
        **************************************************************************************************** -->

    <div ng-controller="LoginCtrl" ng-show="ready && !user">

        <div ng-show="oauthError" class="alert alert-danger" role="alert">
            <span class="fa fa-warning"></span>
            <span ng-bind-html="oauthError"></span>
        </div>


        <form class="form-inline panel panel-primary" role="form">

            <div class="panel-heading">
                <?php echo $I18N->msg( 'loginform-header' ); ?>
            </div>

            <div class="panel-body">

                <p>
                    <?php echo $I18N->msg( 'loginform-blurb', array('variables' => array(
						'//commons.wikimedia.org/wiki/Commons:CropTool'
					))); ?>
                </p>

                <p>
                    <?php echo $I18N->msg( 'loginform-help' ); ?>
                </p>

                <button type="submit" class="btn btn-primary" ng-click="oauthLogin()">
                    <i class="fa fa-lock"></i>
                    <?php echo $I18N->msg( 'loginform-submit-button' ); ?>
                </button>

            </div>
        </form>

    </div>

    <!-- ********************************************************************************************************
        If authorized, but no title given, show "enter title form"
        **************************************************************************************************** -->

    <div ng-show="user && !metadata && !busy">

        <div class="panel panel-primary">

            <div class="panel-heading">
                <?php echo $I18N->msg('titleform-header'); ?>
            </div>
            <div class="panel-body">

                <p>
                    <?php echo $I18N->msg('titleform-help'); ?>
                </p>

                <form role="form" ng-submit="openFile()">

                    <div class="row">

                        <div class="form-group col-sm-8" ng-class="{ 'has-error': exists[site+':'+title] === false, 'has-success': exists[site+':'+title] === true }">
                            <label class="sr-only" for="imageUrlOrTitle">
                                <?php echo $I18N->msg('titleform-file-label'); ?>
                            </label>
                            <input type="text" ng-model="imageUrlOrTitle" class="form-control" placeholder="<?php echo $I18N->msg('titleform-file-label'); ?>">
                            <span class="help-block" ng-show="exists[site+':'+title] === false">
                                <?php echo $I18N->msg('titleform-file-not-found', array('variables' => array('{{title}}', '{{site}}'))); ?>
                            </span>
                            <span class="help-block" ng-show="exists[site+':'+title] === true">
                                <?php echo $I18N->msg('titleform-file-found', array('variables' => array('{{title}}', '{{site}}'))); ?>
                            </span>
                        </div>

                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary">
                                <?php echo $I18N->msg('titleform-submit-button'); ?>
                            </button>
                        </div>

                    </div>

                    <div ng-show="error" class="alert alert-danger" role="alert">
                        <span class="fa fa-warning"></span>
                        <span ng-bind-html="error"></span>
                    </div>

                </form>

            </div>

            <div class="panel-footer">
                <?php echo $I18N->msg('titleform-footer', array('variables' => array('//commons.wikimedia.org/wiki/Commons:CropTool'))); ?>
            </div>

        </div>

    </div>

    <!-- ********************************************************************************************************
        Fetching image data and metadata
        **************************************************************************************************** -->

    <div ng-show="!metadata && busy">

        <p>
            <?php echo $I18N->msg('fetching-progress'); ?>
        </p>

        <div class="mainLoader" style="margin-top: 1em;"></div>

    </div>

    <!-- ********************************************************************************************************
        If authorized and given a title
        **************************************************************************************************** -->

    <div ng-show="user && metadata">

        <!-- ********************************************************************************************************
             Header
             **************************************************************************************************** -->
        <div>
            <p>
                <a href="{{metadata.description}}">View at {{site}}</a>.
                <?php echo $I18N->msg( 'original-dimensions', array('variables' => array(
					'{{metadata.original.width}}', '{{metadata.original.height}}'
				))); ?>

                <span ng-show="crop_dim && !cropresults">
                    Crop: {{crop_dim.w}} x {{crop_dim.h}} px.
                </span>

                <span ng-show="cropresults">
                    Crop: {{cropresults.width}} x {{cropresults.height}} px.
                </span>
            </p>
        </div>


        <!-- ********************************************************************************************************
             Main form
             **************************************************************************************************** -->
        <div class="row2" ng-show="metadata && !metadata.error" style="padding-bottom:1.5em;">


            <!-- ********************************************************************************************************
                 Left column
                 **************************************************************************************************** -->
            <div class="leftcol" style="min-width:600px;">


                <!-- ********************************************************************************************************
                     Step 1
                     **************************************************************************************************** -->
                <div ng-show="!cropresults" class="inner" ng-style="{'width': (metadata.thumb ? metadata.thumb.width : metadata.original.width) + 'px', 'margin-left': 'auto', 'margin-right': 'auto'}">

                    <!-- This is the image we're attaching Jcrop to -->
                    <img id="cropbox" ng-src="{{metadata.thumb ? metadata.thumb.name : metadata.original.name}}">

                </div>

                <!-- ********************************************************************************************************
                     Step 2 & Step 3
                     **************************************************************************************************** -->
                <div ng-show="cropresults" class="inner transparentBg" ng-style="{'width': (cropresults.thumb ? cropresults.thumb.width : cropresults.width) + 'px', 'margin-left': 'auto', 'margin-right': 'auto'}">

                    <img ng-src="{{cropresults.thumb ? cropresults.thumb.name : cropresults.name}}" class="img-responsive" />

                </div>

            </div>


            <!-- ********************************************************************************************************
                 Right column
                 **************************************************************************************************** -->
            <div class="rightcol">

                <!-- ********************************************************************************************************
                     Step 1: Select crop region
                     **************************************************************************************************** -->

                <form ng-show="!cropresults" ng-submit="preview()" role="form">

                    <input type="hidden" id="x" name="x" />
                    <input type="hidden" id="y" name="y" />
                    <input type="hidden" id="w" name="w" />
                    <input type="hidden" id="h" name="h" />

                    <input type="hidden" name="title" ng-model="title" />

                    <p>
                        <?php echo $I18N->msg( 'cropform-select-region', array('variables' => array(
							'locateBorder();'
						))); ?>
                        <img src="res/spinner1.gif" ng-show="borderLocatorBusy">
                    </p>

                    <p ng-show="crop_dim">
                        <span id="cropped_size">
                            <?php echo $I18N->msg( 'cropform-region', array('variables' => array(
								'{{crop_dim.x}}',
								'{{crop_dim.y}}',
								'{{crop_dim.right}}',
								'{{crop_dim.bottom}}',
							))); ?>
                        </span>
                    </p>

                    <div ng-show="metadata.mime == 'image/jpeg'">
                        <?php echo $I18N->msg('cropform-method'); ?>

                        <div class="form-group">
                            <label class="radio-inline"
                                popover="<?php echo $I18N->msg('cropform-method-precise-help'); ?>"
                                popover-trigger="mouseenter"
                                popover-animation="false"
                                popover-append-to-body="true"
                                popover-placement="bottom"
                                popover-popup-delay="0.5"
                            >
                                <input type="radio" name="cropmethod" value="precise" ng-model="cropmethod">
                                <?php echo $I18N->msg('cropform-method-precise'); ?>
                            </label>
                            <label class="radio-inline"
                                popover="<?php echo $I18N->msg('cropform-method-lossless-help'); ?>"
                                popover-trigger="mouseenter"
                                popover-animation="false"
                                popover-append-to-body="true"
                                popover-placement="bottom"
                                popover-popup-delay="0.5"
                            >
                                <input type="radio" name="cropmethod" value="lossless" ng-model="cropmethod">
                                <?php echo $I18N->msg('cropform-method-lossless'); ?>
                            </label>
                        </div>
                    </div>

                    <div style="color:red; padding:1em 0;" ng-show="error">
                        {{error}}
                    </div>

                    <button type="submit"
                        class="btn btn-primary"
                        ng-disabled="!crop_dim"
                        ladda="busy"
                        data-style="slide-up"><?php echo $I18N->msg('cropform-preview-btn'); ?></button>

                </form>


                <!-- ********************************************************************************************************
                     Step 2: Preview crop
                     **************************************************************************************************** -->

                <div ng-show="cropresults && !uploadresults">

                    <p ng-show="cropresults.method=='precise'">
                        <?php echo $I18N->msg( 'previewform-precise'); ?>
                    </p>

                    <p ng-show="cropresults.method=='lossless'">
                        <?php echo $I18N->msg( 'previewform-lossless'); ?>
                        <span ng-show="cropresults.width!=crop_dim.w || cropresults.height!=crop_dim.h">
                            <?php echo $I18N->msg( 'previewform-lossless-explanation', array('variables' => array(
								'{{cropresults.width - crop_dim.w}}',
								'{{cropresults.height - crop_dim.h}}',
								'//en.wikipedia.org/wiki/JPEG#Lossless_editing'
							))); ?>
                        </span>
                    </p>

                    <form ng-submit="upload()" role="form">

                        <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" name="overwrite" ng-model="overwrite" value="overwrite" ng-disabled="busy" ng-change="updateUploadComment()">
                                <?php echo $I18N->msg( 'previewform-overwrite' ); ?>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="overwrite" ng-model="overwrite" value="rename" ng-disabled="busy" ng-change="updateUploadComment()">
                                <?php echo $I18N->msg( 'previewform-create-new' ); ?>
                            </label>
                        </div>

                        <p ng-show="site == 'commons.wikimedia.org' && overwrite=='overwrite'">
                            <i class="fa fa-warning"></i>
                            <?php echo $I18N->msg( 'previewform-overwrite-policy', array('variables' => array(
								'https://commons.wikimedia.org/wiki/Commons:Overwriting existing files'
							))); ?>
                        </p>

                        <div class="form-group" ng-show="overwrite=='rename'" ng-class="{ 'has-error': exists[site + ':' + newTitle] === true, 'has-success': exists[site + ':' + newTitle] === false }">
                            <label class="sr-only" for="newTitle">
                                <?php echo $I18N->msg( 'previewform-new-title' ); ?>
                            </label>
                            <input id="newTitle" type="text" class="form-control" ng-model="newTitle" ng-disabled="busy">
                            <span class="help-block" ng-show="exists[site + ':' + newTitle] === true">
                                <?php echo $I18N->msg( 'previewform-new-title-exists', array('variables' => array('{{newTitle}}')) ); ?>
                            </span>
                        </div>

                        <div class="form-group" ng-show="cropresults.page.elems.border !== undefined">
                            <label title="<?php echo $I18N->msg( 'previewform-removed-border-help' ); ?>">
                                <input type="checkbox" ng-model="cropresults.page.elems.border" ng-change="updateUploadComment()">
                                <?php echo $I18N->msg( 'previewform-removed-border' ); ?>
                            </label>
                        </div>

                        <div class="form-group" ng-show="cropresults.page.elems.watermark !== undefined">
                            <label title="<?php echo $I18N->msg( 'previewform-removed-watermark-help' ); ?>">
                                <input type="checkbox" ng-model="cropresults.page.elems.watermark" ng-change="updateUploadComment()">
                                <?php echo $I18N->msg( 'previewform-removed-watermark' ); ?>
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="uploadComment">
                                <?php echo $I18N->msg( 'previewform-upload-comment' ); ?>:
                            </label>
                            <textarea rows="4" id="uploadComment" type="text" class="form-control" ng-model="uploadComment" ng-disabled="busy"></textarea>
                        </div>

                        <div style="color:red; margin-bottom: 1em;" ng-show="error">
                            {{error}}
                        </div>

                        <button type="button" class="btn btn-large" ng-click="back()" ng-disabled="busy">
                            <?php echo $I18N->msg('previewform-back-btn'); ?>
                        </button>

                        <button type="submit"
                            class="btn btn-large btn-primary"
                            ladda="busy"
                            data-style="slide-up"><?php echo $I18N->msg('previewform-upload-btn'); ?></button>

                    </form>

                </div>

                <!-- ********************************************************************************************************
                     Step 3: Upload complete
                     **************************************************************************************************** -->

                <div ng-show="uploadresults">
                    <div ng-show="status">
                        {{status}}
                    </div>

                    <p ng-show="uploadresults.result == 'Success'" style="background: url(res/yes_check-24px.png) left no-repeat; padding: 5px 5px 5px 30px;">
                        <?php echo $I18N->msg( 'results-success'); ?>
                    </p>
                    <p ng-show="uploadresults.result == 'Success'">
                        <?php echo $I18N->msg( 'results-success-details', array('variables' => array(
							'{{uploadresults.imageinfo.descriptionurl}}?action=purge',
							'{{uploadresults.filename}}'
						))); ?>
                    </p>

                    <p ng-show="uploadresults.error" style="background: url(res/x_mark-24px.png) left no-repeat; padding: 5px 5px 5px 30px;">
                        <?php echo $I18N->msg( 'results-failure', array('variables' => array(
							'{{uploadresults.error.info}}'
						))); ?>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="push"></div>
</div>

<footer>
    <a href="https://commons.wikimedia.org/wiki/CropTool">Tutorial</a>
    •
    <a href="//github.com/danmichaelo/croptool">Source code and issue tracker</a>
    
    <!--•<?php echo $I18N->getFooterLine('croptool'); ?>-->

</footer>

</body>

</html>
