<?php

if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'http') {
    $redirect = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    header("Location: $redirect");
    exit;
}
?>
<!doctype html>
<html ng-app="croptool">
<head>
  <title translate>title</title>
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

  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/angular.js/1.4.7/angular.min.js"></script>
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/angular.js/1.4.7/angular-sanitize.min.js"></script>
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/angular-ui-bootstrap/0.14.0/ui-bootstrap-tpls.min.js"></script>
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/jquery-jcrop/0.9.12/js/jquery.Jcrop.min.js"></script>
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/angular-local-storage/0.2.2/angular-local-storage.min.js"></script>
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/angular-translate/2.8.1/angular-translate.min.js"></script>
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/angular-translate/2.8.1/angular-translate-loader-static-files/angular-translate-loader-static-files.min.js"></script>
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
            <span translate translate-value-user="{{user.name}}">logged-in</span>
            <a href ng-click="logout()" translate>logout</a>
        </div>
    </div>

    <h1>
        <a href ng-click="imageUrlOrTitle = ''; openFile()">
            <i class="fa fa-crop"></i>
            <span translate>title</span>
        </a>
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

            <div class="panel-heading" translate>loginform-header</div>

            <div class="panel-body">

                <p translate translate-value-url="//commons.wikimedia.org/wiki/Special:MyLanguage/Commons:CropTool">
                    loginform-blurb
                </p>

                <p translate>loginform-help</p>

                <button type="submit" class="btn btn-primary" ng-click="oauthLogin()">
                    <i class="fa fa-lock"></i>
                    <span translate>loginform-submit-button</span>
                </button>

            </div>
        </form>

    </div>

    <!-- ********************************************************************************************************
        If authorized, but no title given, show "enter title form"
        **************************************************************************************************** -->

    <div ng-show="user && !metadata && !busy">

        <div class="panel panel-primary">

            <div class="panel-heading" translate>titleform-header</div>
            <div class="panel-body">

                <p translate>titleform-help</p>

                <form role="form" ng-submit="openFile()">

                    <div class="row">

                        <div class="form-group col-sm-8" ng-class="{ 'has-error': exists[site+':'+title] === false, 'has-success': exists[site+':'+title] === true }">
                            <label class="sr-only" for="imageUrlOrTitle">
                                <span translate>titleform-file-label</span>
                            </label>
                            <input type="text" ng-model="imageUrlOrTitle" class="form-control" placeholder="{{'titleform-file-label' | translate}}">
                            <span class="help-block" ng-show="exists[site+':'+title] === false">
                                <span translate translate-value-title="{{title}}" translate-value-site="{{site}}">titleform-file-not-found</span>
                            </span>
                            <span class="help-block" ng-show="exists[site+':'+title] === true">
                                <span translate translate-value-title="{{title}}" translate-value-site="{{site}}">titleform-file-found</span>
                            </span>
                        </div>

                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary" translate>titleform-submit-button</button>
                        </div>

                    </div>

                    <div ng-show="error" class="alert alert-danger" role="alert">
                        <span class="fa fa-warning"></span>
                        <span ng-bind-html="error"></span>
                    </div>

                </form>

            </div>

            <div class="panel-footer" translate translate-value-url="//commons.wikimedia.org/wiki/Special:MyLanguage/Commons:CropTool">
                titleform-footer
            </div>

        </div>

    </div>

    <!-- ********************************************************************************************************
        Fetching image data and metadata
        **************************************************************************************************** -->

    <div ng-show="!metadata && busy">

        <p translate>fetching-progress</p>

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
                <span translate translate-value-width="{{metadata.original.width}}" translate-value-height="{{metadata.original.height}}">original-dimensions</span>

                <span ng-show="crop_dim && !cropresults">
                    <span translate translate-value-width="{{crop_dim.w}}" translate-value-height="{{crop_dim.h}}">crop-dimensions</span>
                </span>

                <span ng-show="cropresults">
                    <span translate translate-value-width="{{cropresults.width}}" translate-value-height="{{cropresults.height}}">crop-dimensions</span>
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
                        <span translate translate-value-url="locateBorder()">cropform-select-region</span>
                        <img src="res/spinner1.gif" ng-show="borderLocatorBusy">
                    </p>

                    <p ng-show="crop_dim" style="font-size:90%; color: #666; margin-left: 1em;">
                        <span translate translate-value-left="{{crop_dim.x}}" translate translate-value-top="{{crop_dim.y}}" translate translate-value-right="{{crop_dim.right}}" translate translate-value-bottom="{{crop_dim.bottom}}">cropform-region</span>
                    </p>

                    <div style="margin-bottom:.8em;">
                        <span translate>cropform-aspect-ratio</span>

                        <div>
                            <label class="radio-inline">
                                <input type="radio" name="aspectratio" value="free" ng-model="aspectratio" ng-change="aspectRatioChanged()">
                                <span translate>cropform-aspect-ratio-free</span>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="aspectratio" value="keep" ng-model="aspectratio" ng-change="aspectRatioChanged()">
                                <span translate>cropform-aspect-ratio-keep</span>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="aspectratio" value="fixed" ng-model="aspectratio" ng-change="aspectRatioChanged()">
                                <span translate>cropform-aspect-ratio-fixed</span>
                            </label>
                            <div ng-show="aspectratio=='fixed'" style="border:1px solid #ccc; display:inline-block;">
                                <input type="text" ng-model="aspectratio_cx" ng-change="aspectRatioChanged()" style="width:22px; text-align: right; border:none; outline: none;">:<input type="text" ng-model="aspectratio_cy" ng-change="aspectRatioChanged()" style="width:22px; border:none; outline: none;">
                            </div>
                        </div>
                    </div>

                    <div ng-show="metadata.mime == 'image/jpeg'" style="margin-bottom:.8em;">
                        <span translate>cropform-method</span>

                        <div class="form-group">
                            <label class="radio-inline"
                                uib-popover="{{'cropform-method-precise-help' | translate}}"
                                popover-trigger="mouseenter"
                                popover-animation="false"
                                popover-placement="bottom"
                                popover-popup-delay="0.5"
                            >
                                <input type="radio" name="cropmethod" value="precise" ng-model="cropmethod" ng-change="cropMethodChanged()">
                                <span translate>cropform-method-precise</span>
                            </label>
                            <label class="radio-inline"
                                uib-popover="{{'cropform-method-lossless-help' | translate}}"
                                popover-trigger="mouseenter"
                                popover-animation="false"
                                popover-placement="bottom"
                                popover-popup-delay="0.5"
                            >
                                <input type="radio" name="cropmethod" value="lossless" ng-model="cropmethod" ng-change="cropMethodChanged()">
                                <span translate>cropform-method-lossless</span>
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
                        data-style="slide-up">
                        <span translate>cropform-preview-btn</span>
                    </button>

                </form>


                <!-- ********************************************************************************************************
                     Step 2: Preview crop
                     **************************************************************************************************** -->

                <div ng-show="cropresults && !uploadresults">

                    <p ng-show="cropresults.method=='precise'">
                        <span translate>previewform-precise</span>
                    </p>

                    <p ng-show="cropresults.method=='lossless'">
                        <span translate>previewform-lossless</span>
                        <span ng-show="cropresults.width!=crop_dim.w || cropresults.height!=crop_dim.h">
                            <span translate translate-value-wider="{{cropresults.width - crop_dim.w}}" translate-value-higher="{{cropresults.height - crop_dim.h}}" translate-value-url="//en.wikipedia.org/wiki/JPEG#Lossless_editing">previewform-lossless-explanation</span>
                        </span>
                    </p>

                    <form ng-submit="upload()" role="form">

                        <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" name="overwrite" ng-model="overwrite" value="overwrite" ng-disabled="busy" ng-change="updateUploadComment()">
                                <span translate>previewform-overwrite</span>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="overwrite" ng-model="overwrite" value="rename" ng-disabled="busy" ng-change="updateUploadComment()">
                                <span translate>previewform-create-new</span>
                            </label>
                        </div>

                        <p ng-show="site == 'commons.wikimedia.org' && overwrite=='overwrite'">
                            <i class="fa fa-warning"></i>
                            <span translate translate-value-url="https://commons.wikimedia.org/wiki/Special:MyLanguage/Commons:Overwriting existing files">previewform-overwrite-policy</span>
                        </p>

                        <div class="form-group" ng-show="overwrite=='rename'" ng-class="{ 'has-error': exists[site + ':' + newTitle] === true, 'has-success': exists[site + ':' + newTitle] === false }">
                            <label class="sr-only" for="newTitle">
                                <span translate>previewform-new-title</span>
                            </label>
                            <input id="newTitle" type="text" class="form-control" ng-model="newTitle" ng-disabled="busy">
                            <span class="help-block" ng-show="exists[site + ':' + newTitle] === true">
                                <span translate translate-value-title="{{newTitle}}">previewform-new-title-exists</span>
                            </span>
                        </div>

                        <div class="form-group" ng-show="cropresults.page.elems.border !== undefined">
                            <label title="{{'previewform-removed-border-help' | translate}}">
                                <input type="checkbox" ng-model="cropresults.page.elems.border" ng-change="updateUploadComment()">
                                <span translate>previewform-removed-border</span>
                            </label>
                        </div>

                        <div class="form-group" ng-show="cropresults.page.elems.watermark !== undefined">
                            <label title="{{'previewform-removed-watermark-help' | translate}}">
                                <input type="checkbox" ng-model="cropresults.page.elems.watermark" ng-change="updateUploadComment()">
                                <span translate>previewform-removed-watermark</span>
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="uploadComment">
                                <span translate>previewform-upload-comment</span>
                            </label>
                            <textarea rows="4" id="uploadComment" type="text" class="form-control" ng-model="uploadComment" ng-disabled="busy"></textarea>
                        </div>

                        <div style="color:red; margin-bottom: 1em;" ng-show="error">
                            {{error}}
                        </div>

                        <div ng-show="allowIgnoreWarnings">
                            <label>
                                <input type="checkbox" ng-model="ignoreWarnings">
                                Ignore warnings (please use with care)
                            </label>
                        </div>

                        <button type="button" class="btn btn-large" ng-click="back()" ng-disabled="busy">
                            <span translate>previewform-back-btn</span>
                        </button>

                        <button type="submit"
                            class="btn btn-large btn-primary"
                            ladda="busy"
                            data-style="slide-up">
                            <span translate>previewform-upload-btn</span>
                        </button>

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
                        <span translate>results-success</span>
                    </p>
                    <p ng-show="uploadresults.result == 'Success'">
                        <span translate translate-value-url="{{uploadresults.imageinfo.descriptionurl}}?action=purge">results-success-details</span>
                    </p>

                    <p ng-show="uploadresults.error" style="background: url(res/x_mark-24px.png) left no-repeat; padding: 5px 5px 5px 30px;">
                        <span translate translate-value-error="{{uploadresults.error.info}}">results-failure</span>
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
</footer>

</body>

</html>
