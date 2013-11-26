<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$params = session_get_cookie_params();
session_set_cookie_params(
    $params['lifetime'],
    dirname( $_SERVER['SCRIPT_NAME'] )
);

session_start();

require('../oauth.php');


if (isset($_GET['title'])) {
    $_SESSION['title'] = $_GET['title'];
}

// Fetch the access token if this is the callback from requesting authorization
if ( isset( $_GET['oauth_verifier'] ) && $_GET['oauth_verifier'] ) {

    $oauth = new OAuthConsumer;
    header('Location: ./?title=' . $_SESSION['title']);
    exit;

}


//$oauth = new OAuthConsumer;
// echo $oauth->doEdit();
// die('');

?>
<!doctype html>
<html ng-app="croptool">
<head>
  <title>CropTool</title>
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

    <div ng-show="user" style="float:right; padding:.3em 0;" ng-controller="LoginCtrl">
        <div class="panel-body">
            Authorized as {{user.name}} using {{user.method}}.
            <a href ng-click="logout()">Log out</a>
        </div>
    </div>

    <h1 style="padding:.4em 0; margin: 0 0 .3em 0;">
        <i class="icon-crop"></i>
        CropTool
    </h1>

    <div class="alert alert-danger" ng-show="!title">
        No title given
    </div>


    <div ng-show="title">

        <!-- ********************************************************************************************************
             Login form
             **************************************************************************************************** -->

        <div ng-controller="LoginCtrl" >

            <form class="form-inline panel panel-primary" role="form" ng-show="!user" ng-submit="tuscLogin()">

                <!--

                <div class="panel-heading">
                    <i class="icon-lock"></i> Log in using TUSC
                </div>
                <div class="panel-body">

                    <p>
                        Don't have a TUSC account? <a href="https://tools.wmflabs.org/tusc/">Register here</a>.
                        Please note that you can not <em>not</em> use your normal Wikimedia credentials!
                    </p>

                    <div class="alert alert-danger" ng-show="loginerror">
                        {{loginerror}}
                    </div>

                    <div class="form-group">
                        <label class="sr-only" for="username">Username</label>
                        <input id="username" type="text" ng-model="username" class="form-control" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <input id="password" type="password" ng-model="password" class="form-control" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>

        -->

            <form class="form-inline panel panel-primary" role="form" ng-show="!user">

                <div class="panel-heading">
                    <i class="icon-lock"></i> Authorization needed
                </div>
                <div class="panel-body">

                    <p>
                        Click "Authorize" to go to a secure Wikimedia OAuth server where you can authorize
                        the use of this tool with your Wikimedia Commons account.
                    </p>

                    <button type="submit" class="btn btn-primary" ng-click="oauthLogin()">Authorize</button>
                    <!--<button type="submit" class="btn btn-default" ng-click="logout()">Logout</button>
-->
                </div>
            </form>

        </div>

        <!-- ********************************************************************************************************
             Crop form
             **************************************************************************************************** -->

        <form ng-submit="preview()" ng-show="user && !cropresults" class="panel panel-default form-inline" role="form">

            <div class="panel-heading">
                <i class="icon-info-sign"></i>
                File: <a href="{{metadata.description}}">{{title}}</a>.

                Original: {{metadata.original.width}} x {{metadata.original.height}} px.
                <span ng-show="metadata.thumb">Thumbnail size: {{metadata.thumb.width}} x {{metadata.thumb.height}} px</span>

            </div>

            <div class="panel-body">

                <div ng-show="status">
                    {{status}}
                </div>

                <div style="color:red;padding:10px;" ng-show="metadata.error">
                    {{metadata.error}}
                </div>

                <div ng-show="!status && metadata && !metadata.error && !cropresults">

                    <!-- This is the image we're attaching Jcrop to -->
                    <img id="cropbox" ng-src="{{metadata.thumb ? metadata.thumb.name : metadata.original.name}}">

        			<input type="hidden" id="x" name="x" />
        			<input type="hidden" id="y" name="y" />
        			<input type="hidden" id="w" name="w" />
        			<input type="hidden" id="h" name="h" />

                    <input type="hidden" name="title" ng-model="title" />

                    <p ng-show="!crop_dim">
                        Select a crop region by click-and-drag.
                    </p>

                    <p ng-show="crop_dim">
                        Crop region:
                        <span id="cropped_size">
                            {{crop_dim.w}} x {{crop_dim.h}} px, left offset: {{crop_dim.x}} px, top offset {{crop_dim.y}} px.
                        </span>
                    </p>

                </div>
            </div>
            <div class="panel-footer">

                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="cropmethod" value="lossless" ng-model="cropmethod">
                        Lossless cropping
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="cropmethod" value="exact" ng-model="cropmethod">
                        Exact cropping
                    </label>
                </div>

                <button type="submit" class="btn btn-large btn-primary" ng-disabled="!crop_dim">Preview</button>

                <p style="padding:.8em 0;">
                    <i class="icon-question-sign"></i>
                    With <strong>lossless cropping</strong>, the image is treated in
                    terms of blocks (8x8 or 16x16 px depending on sampling).
                    If the upper left part of the crop region does not fall on a block boundary,
                    the crop region will have to be increased so that it does.
                    The resulting image will therefore in general be a few pixels larger than requested,
                    but never smaller than requested, and never more than 16 px larger.<br>
                    With <strong>exact cropping</strong> the image
                    has to be resampled, a process that always result in a small quality loss.
                </p>


            </div>
        </form>

        <!-- ********************************************************************************************************
             Preview form
             **************************************************************************************************** -->

        <form ng-submit="upload()" ng-show="!status && cropresults && !uploadresults" class="panel panel-default form-inline" role="form">

            <div class="panel-heading">
                <i class="icon-info-sign"></i>
                File: <a href="{{metadata.description}}">{{title}}</a>.

                Original size: {{metadata.original.width}} x {{metadata.original.height}} px.
                Cropped size: {{cropresults.width}} x {{cropresults.height}} px.
            </div>

            <div class="panel-body">

                <p ng-show="cropresults.lossless">
                    A lossless crop was performed.
                    <span ng-show="cropresults.width!=crop_dim.w || cropresults.height!=crop_dim.h">
                        The resulting image is {{cropresults.width - crop_dim.w}} px wider
                        and {{cropresults.height - crop_dim.h}} px higher than the region you selected.
                        <a href="//en.wikipedia.org/wiki/JPEG#Lossless_editing">Why?</a>
                        Note that the extra pixels included are in the left and/or top part of the image.
                    </span>
                </p>

                <p ng-show="!cropresults.lossless">
                    An exact crop was performed.
                </p>

                <img ng-src="{{cropresults.name}}" style="max-width:800px;" />

                <div style="padding: 1em 0;">


                <p>
                    <i class="icon-warning-sign"></i> Please make sure you are familiar with
                    <a href="https://commons.wikimedia.org/wiki/Commons:Overwriting existing files">Commons:Overwriting existing files</a>.
                </p>
                <p ng-non-bindable>
                    <i class="icon-info-sign"></i> Note that the templates <tt>{{crop}}</tt> and <tt>{{remove border}}</tt> will be removed if found.
                </p>
                    <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio" name="overwrite" ng-model="overwrite" value="overwrite">
                            Overwrite original
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="overwrite" ng-model="overwrite" value="rename">
                            Upload as new file:
                        </label>
                    </div>

                    <div class="form-group">
                        <label class="sr-only" for="newFilename">New filename</label>
                        <input id="newFilename" type="text" value="{{title}}" ng-show="overwrite=='rename'" ng-model="newFilename" class="form-control" style="width: 400px;">
                    </div>

                </div>
            </div>

            <div class="panel-footer">

                <button type="button" class="btn btn-large" ng-click="cropresults=undefined">Back</button>
                <button type="submit" class="btn btn-large btn-primary">Upload to Commons</button>
            </div>
        </form>

        <!-- ********************************************************************************************************
             Result
             **************************************************************************************************** -->

        <div class="panel panel-default" ng-show="uploadresults">

            <div class="panel-heading">
                <i class="icon-info-sign"></i>
                File: <a href="{{metadata.description}}">{{title}}</a>.
            </div>

            <div class="panel-body">

                <div ng-show="status">
                    {{status}}
                </div>

                <p ng-show="uploadresults.result == 'Success'">
                    Cropped image uploaded successfully!<br /><br />

                    Please inspect the result by going to <a href="{{uploadresults.imageinfo.descriptionurl}}">{{uploadresults.filename}}</a>,
                    and refresh the page if needed.
                    Report any anomalies, so that they can be fixed.
                </p>

                <p ng-show="uploadresults.error">
                    Cropped image upload failed: {{uploadresults.error.info}}
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
    </footer>

</body>

</html>
