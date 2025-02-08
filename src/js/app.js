'use strict';

// Declare app level module which depends on filters, and services
angular.module('croptool', ['LocalStorageModule', 'ngSanitize', 'ui.bootstrap', 'angular-ladda', 'pascalprecht.translate']).

config(['$translateProvider', function($translateProvider) {
    $translateProvider.useSanitizeValueStrategy('escapeParameters');
    $translateProvider.useStaticFilesLoader({
        prefix: 'locale/',
        suffix: '.json'
    });
    $translateProvider.preferredLanguage('en');
}]).

service('LoginService', ['$http', '$rootScope', function($http, $rootScope) {

    // console.log('Init LoginService');

    var that = this;

    this.checkLogin = function(res) {
        var data = res.data;
        if (data.user) {
            that.user = { name: data.user };
        } else {
            that.user = undefined;
        }
        that.loginResponse = data;
        if (typeof that.loginResponse != 'object') {
            that.loginResponse = {
                error: 'The CropTool backend is currently having problems.',
            };
        }
        that.loginResponse.code = res.status;
        $rootScope.$broadcast('loginStatusChanged', that.loginResponse);
    };

    $http.get('./api/auth/user')
      .then(this.checkLogin, this.checkLogin);

}]).


service('WindowService', ['$rootScope', '$window', function($rootScope, $window) {

    var windowWidth = $window.outerWidth;
    angular.element($window).bind('resize',function() {
        $rootScope.$broadcast('windowWidthChanged', { oldValue: windowWidth, value: $window.outerWidth });
        windowWidth = $window.outerWidth;
        $rootScope.$apply();
     });

}]).

controller('LoginCtrl', ['$scope', '$http', '$httpParamSerializer', 'LoginService', function($scope, $http, $httpParamSerializer, LoginService) {

    $scope.user = LoginService.user;
    $scope.ready = false;

    $scope.oauthLogin = function() {
        window.location.href = './api/auth/login?' + $httpParamSerializer($scope.currentUrlParams);
    };

    $scope.logout = function() {
        $http.get('./api/auth/logout')
        .then(function(response) {
            LoginService.checkLogin(response.data);
            $scope.user = LoginService.user;
        });
    };

    $scope.$on('loginStatusChanged', function() {

        $scope.user = LoginService.user;
        $scope.ready = true;
        if (LoginService.loginResponse.error) {
            var err = LoginService.loginResponse.code == 401
                ? null
                : LoginService.loginResponse.code + ' ' + LoginService.loginResponse.error;
            $scope.oauthError = err;
        }

        $scope.oauthWarnings = LoginService.loginResponse.warnings;

    });

    // console.log('Init LoginCtrl');

}]).

directive('ctCropper', ['$timeout', function($timeout) {
    return {
        scope: {
            onCrop: '&',
            aspectRatio: '@',
            rotation: '@'
        },
        link: function(scope, element) {
            element.on('load', function() { $timeout(initCropper); });
            element.bind('$destroy', destroy);
            scope.$watch('aspectRatio', aspectRatioChanged);
            scope.$watch('rotation', rotationChanged);
            scope.$on('crop-input-changed', cropInputChanged);

            function initCropper() {
                destroy();
                // SVG files might not contain an explicit width/height in
                // which case the size of the browsers viewport is used.
                // Enforce that we always use the server's calculation for image width/height.
                Object.defineProperty(
                        element[0],
                        'naturalWidth',
                        { value: element[0].getAttribute( 'width' ) }
                );
                Object.defineProperty(
                        element[0],
                        'naturalHeight',
                        { value: element[0].getAttribute( 'height' ) }
                );
                scope.cropper = new Cropper(element[0], {
                    aspectRatio: scope.aspectRatio,
                    crop: cropperCrop,

                    // restrict cropbox to size of canvas, and restrict canvas
                    // to fit within container
                    viewMode: 2,
                });
            }
            function cropperCrop($event) {
                if (angular.isFunction(scope.onCrop)) {
                    scope.$applyAsync(function() {
                        scope.onCrop({$event: $event});
                    });
                }
            }
            function aspectRatioChanged(aspectRatio) {
                if (scope.cropper) {
                    scope.cropper.setAspectRatio(aspectRatio);
                }
            }
            function rotationChanged(rotation) {
                if (scope.cropper) {
                    scope.cropper.rotateTo(rotation);
                    var imageData = scope.cropper.getImageData();
                    var canvasData = scope.cropper.getCanvasData();
                    var ratio = Math.min(imageData.width / canvasData.width, imageData.height / canvasData.height);
                    scope.cropper.zoomTo(ratio);
                    var data = scope.cropper.getData();
                    scope.cropper.setData(data);
                }
            }
            function cropInputChanged(_event, inputData) {
                if (inputData && typeof inputData === 'object') {
                    var data = scope.cropper.getData();
                    data.x = inputData.left;
                    data.y = inputData.top;
                    data.width = inputData.width;
                    data.height = inputData.height;
                    scope.cropper.setData(data);
                }
            }
            function destroy() {
                if (scope.cropper) {
                    scope.cropper.destroy();
                }
            }
        }
    };
}]).

controller('AppCtrl', ['$scope', '$http', '$timeout', '$q', '$window', '$httpParamSerializer', 'LoginService', 'localStorageService', 'WindowService', function($scope, $http, $timeout, $q, $window, $httpParamSerializer, LoginService, LocalStorageService, WindowService) {

    var everPushedSomething = false,
        pixelratio = [1,1],
        setSelectCalled = false;

    $scope.currentUrlParams = {};
    /*.site = '';     // Site-part of the URL
    $scope.currentUrlParams.title = '';    // Title-part of the URL
*/
    function getParameterByName(name, source) {
        name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(source ? source : location.search);
        return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    $scope.updateCoords = function(c) {
        if (setSelectCalled) {
            // If this call was triggered by a change in scope.crop_dim (by the user),
            // we should not update scope.crop_dim now, since we don't want to get into
            // a recursive update loop!
            setSelectCalled = false;
            return;
        }

        var new_size = [
            Math.round(c.width * pixelratio[0]),
            Math.round(c.height * pixelratio[1])
        ];
        var new_offset = [
            Math.round(c.x * pixelratio[0]),
            Math.round(c.y * pixelratio[1])
        ];

        if (!$scope.metadata) { return; }

        $scope.crop_dim = {
            x: new_offset[0],
            y: new_offset[1],
            w: new_size[0],
            h: new_size[1],
            right: $scope.metadata.original.width - new_offset[0] - new_size[0],
            bottom: $scope.metadata.original.height - new_offset[1] - new_size[1],
            rotate: c.rotate
        };
    }

    //LocalStorageService.setPrefix('croptool');
    $scope.showNotice = !LocalStorageService.get('croptool-notice-4');

    $scope.dismissNotice = function() {
        LocalStorageService.add('croptool-notice-4','hide');
        $scope.showNotice = false;
    }

    $scope.back = function() {
        $scope.cropresults = undefined;
        $scope.error = '';
    };

    $scope.pageChanged = function() {
        $scope.openFile();
    };

    $scope.onCropDimChange = function(current_coord) {

        var ratio = getAspectRatio();
        if (ratio != 0) {
            if (current_coord == 'w') {
                $scope.crop_dim.h = Math.round($scope.crop_dim.w / ratio);
            } else if (current_coord == 'h') {
                $scope.crop_dim.w = Math.round($scope.crop_dim.h / ratio);
            }
        }

        if ($scope.crop_dim.x === undefined || $scope.crop_dim.y === undefined || $scope.crop_dim.w === undefined || $scope.crop_dim.h === undefined) {
            return;
        }

        setSelectCalled = true; // let updateCoords know we did this
        $scope.$broadcast('crop-input-changed', {
            left: $scope.crop_dim.x / pixelratio[0],
            top: $scope.crop_dim.y / pixelratio[1],
            width: $scope.crop_dim.w / pixelratio[0],
            height: $scope.crop_dim.h / pixelratio[1]
        });

    };

    $scope.$on('loginStatusChanged', function() {

        if (LoginService.user) {
            // console.log('[AppCtrl] Logged in as ' + LoginService.user.name);
        }

        $scope.status = '';
        $scope.user = LoginService.user;

    });

    function fetchImage() {

        // console.log('[fetchImage] Site: ' + $scope.currentUrlParams.site + ', title: ' + $scope.currentUrlParams.title + ', page: ' + $scope.currentUrlParams.page);

        if (!$scope.currentUrlParams.title) {
            // console.log('[fetchImage] No title given, nothing to fetch');
            return;
        }

        // Reset
        $scope.error = '';
        $scope.busy = true;
        $scope.crop_dim = undefined;
        $scope.rotation = {angle: 0};

        $http.get('./api/file/info?' + $httpParamSerializer({
            title: $scope.currentUrlParams.title,
            site: $scope.currentUrlParams.site,
            page: $scope.currentUrlParams.page,
        }))
        .then(function(res) {

            $scope.busy = false;

            var response = res.data;

            if (response.error) {
                $scope.error = response.error;
                $scope.metadata = null;
                return;
            }

            $scope.metadata = response;

            if ($scope.currentUrlParams.left !== '' || $scope.currentUrlParams.right !== '' || $scope.currentUrlParams.ratio !== '') {
                setTimeout(function () {
                    var crop_dim = {
                        x: 0,
                        y: 0,
                        w: 100,
                        h: 100,
                    };
                    if ($scope.currentUrlParams.left !== '' && $scope.currentUrlParams.right !== '') {
                        crop_dim.x = + $scope.currentUrlParams.left;
                        crop_dim.w = + response.original.width - $scope.currentUrlParams.right - $scope.currentUrlParams.left;
                    } else if ($scope.currentUrlParams.left !== '') {
                        crop_dim.x = + $scope.currentUrlParams.left;
                        crop_dim.w = + $scope.currentUrlParams.width;
                    } else if ($scope.currentUrlParams.right !== '') {
                        crop_dim.x = + response.original.width - $scope.currentUrlParams.right - $scope.currentUrlParams.width;
                        crop_dim.w = + $scope.currentUrlParams.width;
                    }
                    if ($scope.currentUrlParams.top !== '' && $scope.currentUrlParams.bottom !== '') {
                        crop_dim.y = + $scope.currentUrlParams.top;
                        crop_dim.h = + response.original.height - $scope.currentUrlParams.bottom - $scope.currentUrlParams.top;
                    } else if ($scope.currentUrlParams.top !== '') {
                        crop_dim.y = + $scope.currentUrlParams.top;
                        crop_dim.h = + $scope.currentUrlParams.height;
                    } else if ($scope.currentUrlParams.bottom !== '') {
                        crop_dim.y = + response.original.height - $scope.currentUrlParams.bottom - $scope.currentUrlParams.top;
                        crop_dim.h = + $scope.currentUrlParams.height;
                    }

                    $scope.crop_dim = crop_dim;
                    if ($scope.currentUrlParams.ratio !== '' && $scope.currentUrlParams.ratio.split(':').length == 2) {
                        var parts = $scope.currentUrlParams.ratio.split(':');
                        $scope.aspectratio = 'fixed';
                        $scope.aspectratio_cx = parts[0];
                        $scope.aspectratio_cy = parts[1];
                    } else {
                        $scope.aspectratio = $scope.currentUrlParams.ratio || 'free';
                    }
                    $scope.onCropDimChange();

                    // If aspect ratio is "keep", we need to find that aspect ratio
                    // now that we have the coordinates of the image file.
                    $scope.aspectRatioChanged();

                }, 300);
            }

            // If aspect ratio is "keep", we need to find that aspect ratio
            // now that we have the coordinates of the image file.
            $scope.aspectRatioChanged();

            $scope.availablePages = [];
            for (var i = 1; i <= $scope.metadata.pagecount; i++) {
                $scope.availablePages.push(i);
            }

            if ($scope.metadata.thumb) {
                pixelratio = [$scope.metadata.original.width/$scope.metadata.thumb.width, $scope.metadata.original.height/$scope.metadata.thumb.height];
            } else {
                pixelratio = [1,1];
            }

            if (!response.error) {

                var p = $scope.currentUrlParams.title.lastIndexOf('.');
                var cropText;
		var ext = $scope.currentUrlParams.title.substr(p);
                if ( $scope.metadata.overrideResultExtension ) {
                    ext = '.' + $scope.metadata.overrideResultExtension
                }
                if ($scope.currentUrlParams.page && $scope.metadata.pagecount > 1) {
                    cropText = ' (page ' + $scope.currentUrlParams.page + ' crop)';
                } else {
                    cropText = ' (cropped)';
                }
                $scope.newTitle = $scope.currentUrlParams.title.substr(0, p) + cropText + ext;
            }

        }, function(res) {
            $scope.metadata = null;
            $scope.error = res.data.error;
            $scope.busy = false;
        });
    }

    $scope.locateBorder = function() {
        if ($scope.borderLocatorBusy) return;

        $scope.borderLocatorBusy = true;
        $http.get('./api/file/autodetect?' + $httpParamSerializer({
            title: $scope.currentUrlParams.title,
            site: $scope.currentUrlParams.site,
            page: $scope.currentUrlParams.page
        }))
        .then(function(res) {
            var response = res.data;
            $scope.borderLocatorBusy = false;
            console.log(response);
            var area = response.area;
            $scope.$broadcast('crop-input-changed', {
                left: area[0] / pixelratio[0],
                top: area[1] / pixelratio[1],
                width: (area[2] - area[0]) / pixelratio[0],
                height: (area[3] - area[1]) / pixelratio[1]
            });
        }, function(res) {
            $scope.error = 'An error occurred: ' + res.status + ' ' + res.data.error;
            $scope.borderLocatorBusy = false;
        });
    };

    $scope.cropMethodChanged = function() {
        LocalStorageService.set('croptool-cropmethod', $scope.cropmethod);
        while ($scope.rotation.angle < 0) {
            $scope.rotation.angle += 360;
        }
        $scope.rotation.angle = Math.round($scope.rotation.angle / 90) * 90;
    };

    function getAspectRatio() {
        var ratio = 0;
        if ($scope.aspectratio == 'keep') {
            if ($scope.metadata && $scope.metadata.original) {
                ratio = $scope.metadata.original.width / $scope.metadata.original.height;
            }
        } else if ($scope.aspectratio == 'fixed') {
            var cx = parseInt($scope.aspectratio_cx),
                cy = parseInt($scope.aspectratio_cy);
            if (!cx || cx < 0 || !cy || cy < 0) {
                // TODO: Indicate invalid state by css class
                return;
            }
            ratio = $scope.aspectratio_cx / $scope.aspectratio_cy;
        }
        return ratio;
    }

    $scope.aspectRatioChanged = function() {
        var ratio = getAspectRatio();
        if (ratio === null) {
            return;
        }
        $scope.aspectratio_cxy = ratio;

        LocalStorageService.set('croptool-aspectratio', $scope.aspectratio);
        LocalStorageService.set('croptool-aspectratio-x', $scope.aspectratio_cx);
        LocalStorageService.set('croptool-aspectratio-y', $scope.aspectratio_cy);
    };

    function parseImageUrlOrTitle( params ) {

        var pattern1 = /([a-z0-9.\-]+)\.(wikimedia.org|wikipedia.org|wmflabs.org|wikisource.org)\/wiki\/([^?]+)/,
            pattern2 = /([a-z0-9.\-]+)\.(wikimedia.org|wikipedia.org|wmflabs.org|wikisource.org)\/w\/index.php/,
            matches1 = params.title.match(pattern1),
            matches2 = params.title.match(pattern2);

        var qs = '?' + params.title.split('?')[1];
        if (matches1) {
            params.site = matches1[1] + '.' + matches1[2];
            params.title = matches1[3];
            params.page = getParameterByName('page', qs) || params.page;
        } else if (matches2) {
            params.site = matches2[1] + '.' + matches2[2];
            params.title = getParameterByName('title', qs);
            params.page = getParameterByName('page', qs);
        } else {
            params.site = params.site || 'commons.wikimedia.org';
            params.page = getParameterByName('page', qs) || params.page;
        }

        try {
            params.title = decodeURIComponent(params.title);
        } catch (e) {
            // Ignore
        }

        params.title = params.title
            .replace(/_/g, ' ')
            .replace(/^[^:]+:/, '');  // Strip off File:, Fil:, etc.

        if (params.title.match(/\.(pdf|djvu|tiff?)$/) && !params.page) {
            params.page = 1;
        }

        return params;
    }


    $scope.openFile = function(updateHistory) {

        if (updateHistory === false) {
            $scope.currentUrlParams = {
                site: getParameterByName('site'),
                title: getParameterByName('title'),
                page: getParameterByName('page'),
                left: getParameterByName('left'),
                top: getParameterByName('top'),
                right: getParameterByName('right'),
                bottom: getParameterByName('bottom'),
                width: getParameterByName('width'),
                height: getParameterByName('height'),
                ratio: getParameterByName('ratio'),
            };
        }

        if (updateHistory !== false) {
            var params = $httpParamSerializer($scope.currentUrlParams);
            var newUrl = location.href.split('?', 1)[0] + (params.length ? '?' + params : '');
            window.history.pushState(null, null, newUrl);
            everPushedSomething = true;
        }

        // Resetting state
        $scope.error = '';
        $scope.newTitle = '';
        $scope.cropresults = null;
        $scope.uploadresults = null;

        if (!$scope.currentUrlParams.title) {
            $scope.metadata = null;
            $scope.currentUrlParams = {};
            return;
        }

        // console.log('   params before parse: ',$scope.currentUrlParams);
        $scope.currentUrlParams = parseImageUrlOrTitle($scope.currentUrlParams);
        // console.log('    params after parse: ',$scope.currentUrlParams);
        if ($scope.currentUrlParams.page) {
            $scope.overwrite = 'rename';  // Force rename
        }


        // $scope.currentUrlParams.site = o.site;
        // $scope.currentUrlParams.title = o.title;
        // $scope.currentUrlParams.page = o.page;

        fetchImage();
    };

    $scope.preview = function() {
        if ($scope.crop_dim === undefined) {
            alert('Please select a crop region then press submit.');
            return false;
        }

        $scope.error = '';
        $scope.allowIgnoreWarnings = false;
        $scope.ignoreWarnings = false;
        $scope.confirmOverwrite = false;
        $scope.ladda = true;

        $http.get('./api/file/crop?' + $httpParamSerializer({
            title: $scope.currentUrlParams.title,
            site: $scope.currentUrlParams.site,
            page: $scope.currentUrlParams.page,
            method: $scope.cropmethod,
            x: $scope.crop_dim.x,
            y: $scope.crop_dim.y,
            rotate: $scope.crop_dim.rotate,
            width: $scope.crop_dim.w,
            height: $scope.crop_dim.h
        }))
        .then(function(res) {
            var response = res.data;
            $scope.ladda = false;
            if (response.page.hasAssessmentTemplates || response.page.hasDoNotCropTemplate) {
                $scope.overwrite = "rename";
            }

            // TODO: Add timestamps to invalidate cache!

            $scope.cropresults = response;
            if (response.page.elems.wikidata) {
                var entityId = response.page.elems['wikidata-item'];
                var entityLabel = response.wikidata.labels.en;
                if (entityLabel) {
                    $scope.cropresults.wikidataLink = '<a target="_blank" href="https://www.wikidata.org/wiki/' + entityId + '">' + entityLabel + ' (' + entityId + ')</a>';
                } else {
                    $scope.cropresults.wikidataLink = '<a target="_blank" href="https://www.wikidata.org/wiki/' + entityId + '">' + entityId + '</a>';
                }
                $scope.overwrite = 'rename';
            }
            $scope.updateUploadComment();
        }, function(res) {
            $scope.error = '[Error] ' + res.data.error;
            $scope.ladda = false;
        });


    };

    $scope.upload = function(isRetrying) {

        $scope.ladda2 = true;
        $scope.error = '';
        $scope.allowIgnoreWarnings = false;

        var params = {
            title: $scope.currentUrlParams.title,
            site: $scope.currentUrlParams.site,
            page: $scope.currentUrlParams.page,
            overwrite: $scope.overwrite,
            comment: $scope.uploadComment,
            filename: $scope.newTitle,
            elems: $scope.cropresults.page.elems,
            store: true
        };

        if ($scope.ignoreWarnings || $scope.confirmOverwrite) {
            params.ignorewarnings = '1';
        }

        $http.post('./api/file/publish', params)
        .then(function(res) {
            var response = res.data;

            // console.log(response);

            $scope.ladda2 = false;
            if (response.result === 'Success') {
                $scope.uploadresults = response; //.imageinfo.descriptionurl;

            } else if (response.result == 'Warning') {
                var warnings = Object.keys(response.warnings);

                // Don't allow overwriting other files or pages
                $scope.allowIgnoreWarnings = (warnings.indexOf('exists') == -1 && warnings.indexOf('page-exists') == -1);

                if (warnings.length == 1 && warnings[0] == 'was-deleted') {
                    // This is safe to ignore. Retry right away, but only once
                    if (!isRetrying) {
                        $scope.ignoreWarnings = true;
                        $scope.upload(true);
                    }
                } else {
                    $scope.error = 'Upload failed because of the following warning(s): ' + warnings.join(', ') + '.';
                }

            } else {
                $scope.error = 'Upload failed! ';
                if (response.error) {
                    $scope.error += response.error.info;
                }
            }

        }, function(res) {
            $scope.ladda2 = false;
            $scope.error = 'Upload failed! ' + res.data.error;
        });

    };

    angular.element($window).bind('popstate', function(e) {

        if (!everPushedSomething) {
            // Chrome and Safari always emit a popstate event on page load, but Firefox doesn't.
            // If we've newer pushed anything, we assume this event was called on page load and ignore it.
            return;
        }
        $scope.$apply(function() {
            $scope.openFile(false);
        });
    });

    $scope.openFile(false);

    $scope.status = 'Checking login';

    // Defaults
    $scope.cropmethod = LocalStorageService.get('croptool-cropmethod') || 'precise';
    $scope.aspectratio = LocalStorageService.get('croptool-aspectratio') || 'free';
    $scope.aspectratio_cx = LocalStorageService.get('croptool-aspectratio-x') || '16';
    $scope.aspectratio_cy = LocalStorageService.get('croptool-aspectratio-y') || '9';;
    $scope.overwrite = LocalStorageService.get('croptool-overwrite') || 'overwrite';;
    $scope.rotation = {angle: 0};
    $scope.aspectRatioChanged();

    // On filename change, check with the MediaWiki API if the file exists.
    // Delay 500 ms before checking in case the user is in the process of typing.
    // Code below might eventually better be separated out into a directive or something.

    var canceler;

    $scope.exists = [];

    function fileExists( site, title ) {

        if (!canceler) {
            //console.log('nothing to abort');
        } else if (canceler && canceler.resolve) {
            // Aborts the $http request if it isn't finished.
            //console.log('abort http');
            canceler.resolve();
        } else {
            // Abort the timer
            // console.log('abort timer');
            $timeout.cancel(canceler);
        }

        if (title == '') {
            canceler = null;
            return;
        }

        canceler = $timeout(function() {

            canceler = $q.defer();

            // console.log('Check existence of site:' + site + ', title:' + title);

            $http.get('./api/file/exists?' + $httpParamSerializer({
                site: site,
                title: title
            }), {
                timeout: canceler.promise,
            }).then(function(res) {
                var response = res.data;
                var key = site + ':' + title;

                $scope.error = response.error;

                if (response.error) {
                    $scope.error = response.error;
                } else {
                    $scope.exists[key] = response.exists;
                    // console.log($scope.exists);
                }
                canceler = null;
            });

        }, 300);
    }

    // Check for file existence as you type
    $scope.$watch('titleInput', function() {

        if (!$scope.titleInput) {
            return;
        }

        var params = parseImageUrlOrTitle({title: $scope.titleInput}),
            key = params.site + ':' + params.title;

        if (params.title && $scope.exists[key] === undefined) {
            if ($scope.title !== params.title) {
                $scope.error = '';
                fileExists( params.site, params.title );
            }
        }

        $scope.currentUrlParams = params;
    });

    $scope.updateUploadComment = function() {
        console.log('UPDATE UPLOAD COMM', $scope.cropresults.page.elems);

        LocalStorageService.set('croptool-overwrite', $scope.overwrite);

        // Cropped {x % using CropTool}
        // Removed border by cropping {x % using CropTool}
        // Removed watermark by cropping {x % using CropTool}

        // [[File:X]] cropped x % using CropTool
        // Removed border from [[File:X]] by cropping {x % using CropTool}
        // Removed watermark from [[File:X]] by cropping {x % using CropTool}

        var s = '';
        if ($scope.overwrite == 'rename') {
            s += '[[:File:' + $scope.currentUrlParams.title + ']] cropped';
        } else {
            s += 'Cropped';
        }

        // %s % horizontally, %s % vertically, rotated %s° using [[Commons:CropTool|CropTool]] with %s mode.
        s += ' ' + $scope.cropresults.dim;

        if ($scope.cropresults.page.elems.border) {
            s += ' Removed border.';
        }
        if ($scope.cropresults.page.elems.trimming) {
            s += ' Image was trimmed.';
        }
        if ($scope.cropresults.page.elems.watermark) {
            s += ' Removed watermark.';
        }
        if ($scope.cropresults.page.elems.wikidata) {
            s += ' Crop for [[:wikidata:' + $scope.cropresults.page.elems['wikidata-item'] + '|Wikidata]].';
        }
        $scope.uploadComment = s;
    };

    $scope.$watch('newTitle', function() {

        // TODO: !!! pageExists -> imageUrlOrTitleExists

        if ($scope.newTitle && $scope.exists[$scope.currentUrlParams.site + ':' + $scope.newTitle] === undefined) {
            fileExists($scope.currentUrlParams.site, $scope.newTitle);
        }

    });

    $scope.$on('windowWidthChanged', function(evt, val) {
        //console.log('Width changed');
        //console.log(val);
    });

}]);
