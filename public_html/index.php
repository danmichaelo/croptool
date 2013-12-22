<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'http') {
    $redirect = "https://" . $_SERVER['HTTP_X_FORWARDED_SERVER'] . $_SERVER['REQUEST_URI'];
    header("Location: $redirect");
    exit;
}

require('../TsIntuition/ToolStart.php'); // for testing
//require('/home/project/intuition/src/Intuition/ToolStart.php');
require('backend.php');

// Localization using TsIntuition
// https://github.com/Krinkle/TsIntuition/wiki/Documentation

$I18N = new TsIntuition(array(
    'domain' => 'croptool',
));


?>
<!doctype html>
<html ng-app="croptool">
<head>
  <title><?php echo $I18N->msg( 'title' ); ?></title>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8">

  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
  <link rel="stylesheet" href="site.css" type="text/css">

  <script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="js/jquery.Jcrop.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.2/angular.min.js"></script>
  <script src="crop.js"></script>

</head>
<body ng-controller="AppCtrl">

<div class="container">

    <!-- ********************************************************************************************************
        Header
        **************************************************************************************************** -->

    <div ng-show="user" style="float:right; padding:.3em 0;" ng-controller="LoginCtrl">
        <div class="panel-body">
            <?php echo $I18N->msg( 'logged-in', array('variables' => array('{{user.name}}'))); ?>.
            <a href ng-click="logout()"><?php echo $I18N->msg( 'logout' ); ?></a>
        </div>
    </div>

    <h1 style="padding:.4em 0; margin: 0 0 .3em 0;">
        <a href ng-click="setTitle()">
            <i class="icon-crop"></i>
            <?php echo $I18N->msg( 'title' ); ?>
        </a>
    </h1>

    <!-- ********************************************************************************************************
        If not authorized, show "login form"
        **************************************************************************************************** -->

    <div ng-controller="LoginCtrl" ng-show="ready && !user">

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
                    <i class="icon-lock"></i>
                    <?php echo $I18N->msg( 'loginform-submit-button' ); ?>
                </button>

            </div>
        </form>

    </div>

    <!-- ********************************************************************************************************
        If authorized, but no title given, show "enter title form"
        **************************************************************************************************** -->

    <div ng-show="user && !title && !busy">

        <div class="panel panel-primary">

            <div class="panel-heading">
                <?php echo $I18N->msg( 'titleform-header' ); ?>
            </div>
            <div class="panel-body">

                <p>
                    <?php echo $I18N->msg( 'titleform-help' ); ?>
                </p>

                <form role="form" ng-submit="setTitle(filename)">

                    <div class="row">

                        <div class="form-group col-sm-8" ng-class="{ 'has-error': exists[filename] === false, 'has-success': exists[filename] === true }">
                            <label class="sr-only" for="filename">
                                <?php echo $I18N->msg( 'titleform-filename-label' ); ?>
                            </label>
                            <input type="text" ng-model="filename" class="form-control" placeholder="<?php echo $I18N->msg( 'titleform-filename-label' ); ?>">
                            <span class="help-block" ng-show="exists[filename] === false">
                                <?php echo $I18N->msg( 'titleform-filename-not-found', array('variables' => array('{{filename}}')) ); ?>
                            </span>
                        </div>

                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary">
                                <?php echo $I18N->msg( 'titleform-submit-button' ); ?>
                            </button>
                        </div>

                    </div>

                    <div style="color:red;" ng-show="metadata.error">
                        {{metadata.error}}
                    </div>

                </form>

            </div>

            <div class="panel-footer">
                <?php echo $I18N->msg( 'titleform-footer', array('variables' => array('//commons.wikimedia.org/wiki/Commons:CropTool'))); ?>
            </div>

        </div>

    </div>

    <!-- ********************************************************************************************************
        Fetching image data and metadata
        **************************************************************************************************** -->

    <div ng-show="user && !title && busy">

        <div class="panel panel-default">

            <div class="panel-heading">
                <i class="icon-camera-retro"></i>
                {{filename}}
            </div>
            <div class="panel-body">

                <p>
                    <?php echo $I18N->msg( 'fetching-progress' ); ?>
                </p>
                <img src="res/spinner.gif" alt="Spinner" style="width:220px; height:20px;">

            </div>

        </div>

    </div>

    <!-- ********************************************************************************************************
        If authorized and given a title
        **************************************************************************************************** -->

    <div ng-show="user && title">

        <!-- ********************************************************************************************************
             Crop form
             **************************************************************************************************** -->

        <form ng-submit="preview()" ng-show="!cropresults && !busy" class="panel panel-default form-inline" role="form">

            <div class="panel-heading">
                <i class="icon-camera-retro"></i>
                <a href="{{metadata.description}}">{{title}}</a>.
                <?php echo $I18N->msg( 'original-dimensions', array('variables' => array(
                    '{{metadata.original.width}}', '{{metadata.original.height}}'
                ))); ?>
                <span ng-show="metadata.thumb">
                    <?php echo $I18N->msg( 'thumb-dimensions', array('variables' => array(
                    '{{metadata.thumb.width}}', '{{metadata.thumb.height}}'
                    ))); ?>
                </span>
            </div>

            <div class="panel-body">

                <div style="color:red;padding:10px;" ng-show="error">
                    {{error}}
                </div>

                <div style="color:red;padding:10px;" ng-show="metadata.error">
                    {{metadata.error}}
                </div>

                <div ng-show="metadata && !metadata.error && !cropresults">

                    <!-- This is the image we're attaching Jcrop to -->
                    <img id="cropbox" ng-src="{{metadata.thumb ? metadata.thumb.name : metadata.original.name}}">

        			<input type="hidden" id="x" name="x" />
        			<input type="hidden" id="y" name="y" />
        			<input type="hidden" id="w" name="w" />
        			<input type="hidden" id="h" name="h" />

                    <input type="hidden" name="title" ng-model="title" />

                    <p ng-show="!crop_dim">
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

                </div>
            </div>
            <div class="panel-footer">

                <?php echo $I18N->msg( 'cropform-method' ); ?>

                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="cropmethod" value="precise" ng-model="cropmethod">
                        <?php echo $I18N->msg( 'cropform-method-precise' ); ?>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="cropmethod" value="lossless" ng-model="cropmethod">
                        <?php echo $I18N->msg( 'cropform-method-lossless' ); ?>
                    </label>
                </div>

                <button type="submit" class="btn btn-large btn-primary" ng-disabled="!crop_dim">
                    <?php echo $I18N->msg( 'cropform-preview-btn' ); ?>
                </button>

                <p>
                    <i class="icon-question-sign"></i> <?php echo $I18N->msg( 'cropform-help' ); ?>:
                </p>

                <ul>
                    <li>
                        <?php echo $I18N->msg( 'cropform-method-precise-help' ); ?>
                    </li>
                    <li>
                        <?php echo $I18N->msg( 'cropform-method-lossless-help' ); ?>
                    </li>
                </ul>

            </div>
        </form>

        <!-- ********************************************************************************************************
        Busy cropping
        **************************************************************************************************** -->

        <div ng-show="!cropresults && busy">

            <div class="panel panel-default">

                <div class="panel-heading">
                    <i class="icon-camera-retro"></i>
                    <a href="{{metadata.description}}">{{title}}</a>
                </div>
                <div class="panel-body">

                    <p>
                        <?php echo $I18N->msg( 'cropping-progress' ); ?>
                    </p>
                    <img src="res/spinner.gif" alt="Spinner" style="width:220px; height:20px;">

                </div>

            </div>

        </div>

        <!-- ********************************************************************************************************
             Preview form
             **************************************************************************************************** -->

        <form ng-submit="upload()" ng-show="cropresults && !uploadresults && !busy" class="panel panel-default form-inline" role="form">

            <div class="panel-heading">
                <i class="icon-camera-retro"></i>
                <a href="{{metadata.description}}">{{title}}</a>

            </div>

            <div class="panel-body">

                <div style="color:red;padding:10px;" ng-show="error">
                    {{error}}
                </div>

                <p ng-show="cropresults.lossless">
                    <?php echo $I18N->msg( 'previewform-lossless'); ?>
                    <span ng-show="cropresults.width!=crop_dim.w || cropresults.height!=crop_dim.h">
                        <?php echo $I18N->msg( 'previewform-lossless-explanation', array('variables' => array(
                            '{{cropresults.width - crop_dim.w}}',
                            '{{cropresults.height - crop_dim.h}}',
                            '//en.wikipedia.org/wiki/JPEG#Lossless_editing'
                        ))); ?>
                    </span>
                </p>

                <p ng-show="!cropresults.lossless">
                    <?php echo $I18N->msg( 'previewform-precise'); ?>
                </p>

                <img ng-src="{{cropresults.name}}" style="max-width:800px;" />

                <div style="padding: 1em 0;">

                <p>
                    <i class="icon-warning-sign"></i>
                    <?php echo $I18N->msg( 'previewform-overwrite-policy', array('variables' => array(
                        'https://commons.wikimedia.org/wiki/Commons:Overwriting existing files'
                    ))); ?>
                </p>
                <p ng-non-bindable>
                    <i class="icon-info-sign"></i>
                    <?php echo $I18N->msg( 'previewform-template-removal-notice'); ?>
                </p>
                    <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio" name="overwrite" ng-model="overwrite" value="overwrite">
                            <?php echo $I18N->msg( 'previewform-overwrite'); ?>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="overwrite" ng-model="overwrite" value="rename">
                            <?php echo $I18N->msg( 'previewform-create-new'); ?>
                        </label>
                    </div>

                    <div class="form-group" ng-show="overwrite=='rename'" ng-class="{ 'has-error': exists[newFilename] === true, 'has-success': exists[newFilename] === false }">
                        <label class="sr-only" for="newFilename">
                            <?php echo $I18N->msg( 'previewform-new-filename' ); ?>
                        </label>
                        <input id="newFilename" type="text" class="form-control" style="width: 400px;" ng-model="newFilename">
                        <span class="help-block" ng-show="exists[newFilename] === true">
                            <?php echo $I18N->msg( 'previewform-new-filename-exists', array('variables' => array('{{newFilename}}')) ); ?>
                        </span>
                    </div>

                </div>
            </div>

            <div class="panel-footer">

                <button type="button" class="btn btn-large" ng-click="back()">
                    <?php echo $I18N->msg( 'previewform-back-btn'); ?>
                </button>
                <button type="submit" class="btn btn-large btn-primary">
                    <?php echo $I18N->msg( 'previewform-upload-btn'); ?>
                </button>
            </div>
        </form>

        <!-- ********************************************************************************************************
        Busy uploading
        **************************************************************************************************** -->

        <div ng-show="cropresults && !uploadresults && busy">

            <div class="panel panel-default">

                <div class="panel-heading">
                    <i class="icon-camera-retro"></i>
                    <a href="{{metadata.description}}">{{title}}</a>
                </div>
                <div class="panel-body">

                    <p>
                        <?php echo $I18N->msg( 'upload-progress' ); ?>
                    </p>
                    <img src="res/spinner.gif" alt="Spinner" style="width:220px; height:20px;">

                </div>

            </div>

        </div>

        <!-- ********************************************************************************************************
             Result
             **************************************************************************************************** -->

        <div class="panel panel-default" ng-show="uploadresults">

            <div class="panel-heading">
                <i class="icon-camera-retro"></i>
                <a href="{{metadata.description}}">{{title}}</a>.
            </div>

            <div class="panel-body">

                <div ng-show="status">
                    {{status}}
                </div>

                <p ng-show="uploadresults.result == 'Success'">
                    <?php echo $I18N->msg( 'results-success'); ?>
                </p>
                <p ng-show="uploadresults.result == 'Success'">
                    <?php echo $I18N->msg( 'results-success-details', array('variables' => array(
                        '{{uploadresults.imageinfo.descriptionurl}}',
                        '{{uploadresults.filename}}'
                    ))); ?>
                </p>

                <p ng-show="uploadresults.error">
                    <?php echo $I18N->msg( 'results-failure', array('variables' => array(
                        '{{uploadresults.error.info}}'
                    ))); ?>
                </p>

            </div>
        </div>
    </div>


    <div class="push"></div>
</div>

<footer>    
        Tool by <a href="//commons.wikimedia.org/wiki/User:Danmichaelo">Danmichaelo</a>, 
        made using <a href="//github.com/tapmodo/Jcrop">Jcrop</a> and <a href="http://www.angularjs.org/">AngularJS</a>,
        inspired by <a href="//commons.wikimedia.org/wiki/User:Cropbot">Cropbot</a>.
        MIT license. 
        Please report bugs <a href="//github.com/danmichaelo/croptool">on GitHub</a>.

        <!--<?php echo $I18N->getFooterLine( 'croptool' ); ?>-->

    </footer>


<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://piwik.biblionaut.net/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();

</script>
<noscript><p><img src="//piwik.biblionaut.net/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

</body>

</html>
