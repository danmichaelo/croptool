'use strict';

// Declare app level module which depends on filters, and services
angular.module('croptool', ['LocalStorageModule', 'ngSanitize', 'ui.bootstrap', 'angular-ladda', 'pascalprecht.translate']).

config(['$translateProvider', function($translateProvider) {
    $translateProvider.useStaticFilesLoader({
        prefix: 'locale/',
        suffix: '.json'
    });
    $translateProvider.preferredLanguage('en');
}]).

service('LoginService', ['$http', '$rootScope', function($http, $rootScope) {

    // console.log('Init LoginService');

    var that = this;

    this.checkLogin = function(response, code) {
        if (response.user) {
            that.user = { name: response.user };
        } else {
            that.user = undefined;
        }
        that.loginResponse = response;
        if (typeof that.loginResponse != 'object') {
            that.loginResponse = {
                error: 'The CropTool backend is currently having problems.',
            };
        }
        that.loginResponse.code = code;
        $rootScope.$broadcast('loginStatusChanged', that.loginResponse);
    };

    $http.get('./api/auth/user')
      .success(this.checkLogin)
      .error(this.checkLogin);

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
        $http.get('./api/auth/logout').
        success(function(response) {
            LoginService.checkLogin(response);
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

controller('AppCtrl', ['$scope', '$http', '$timeout', '$q', '$window', '$httpParamSerializer', 'LoginService', 'localStorageService', 'WindowService', function($scope, $http, $timeout, $q, $window, $httpParamSerializer, LoginService, LocalStorageService, WindowService) {

    var jcrop_api,
        everPushedSomething = false,
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

    function updateCoords(c) {
        var new_size = [
            Math.round(c.w * pixelratio[0]),
            Math.round(c.h * pixelratio[1])
        ];
        var new_offset = [
            Math.round(c.x * pixelratio[0]),
            Math.round(c.y * pixelratio[1])
        ];

        $scope.crop_dim = {
            x: new_offset[0],
            y: new_offset[1],
            w: new_size[0],
            h: new_size[1],
            right: $scope.metadata.original.width - new_offset[0] - new_size[0],
            bottom: $scope.metadata.original.height - new_offset[1] - new_size[1],
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

        setSelectCalled = true; // let onSelect know we did this
        jcrop_api.setSelect([$scope.crop_dim.x / pixelratio[0],
                             $scope.crop_dim.y / pixelratio[1],
                             ($scope.crop_dim.x + $scope.crop_dim.w) / pixelratio[0],
                             ($scope.crop_dim.y + $scope.crop_dim.h) / pixelratio[1]
                             ]);

    };

    $scope.$on('loginStatusChanged', function() {

        if (LoginService.user) {
            console.log('[AppCtrl] Logged in as ' + LoginService.user.name);
        }

        $scope.status = '';
        $scope.user = LoginService.user;

    });

    function fetchImage() {

        console.log('[fetchImage] Site: ' + $scope.currentUrlParams.site + ', title: ' + $scope.currentUrlParams.title + ', page: ' + $scope.currentUrlParams.page);

        if (!$scope.currentUrlParams.title) {
            console.log('[fetchImage] No title given, nothing to fetch');
            return;
        }

        $scope.error = '';
        $scope.busy = true;
        $scope.crop_dim = undefined;

        $http.get('./api/file/thumb?' + $httpParamSerializer({
            title: $scope.currentUrlParams.title,
            site: $scope.currentUrlParams.site,
            page: $scope.currentUrlParams.page
        })).
        error(function(response, status, headers) {
            $scope.metadata = null;
            $scope.error = response.error;
            $scope.busy = false;
        }).
        success(function(response) {

            $scope.busy = false;

            if (response.error) {
                $scope.error = response.error;
                $scope.metadata = null;
                return;
            }

            $scope.metadata = response;

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
                if ($scope.currentUrlParams.page) {
                    $scope.newTitle = $scope.currentUrlParams.title.substr(0, p) + ' (page ' + $scope.currentUrlParams.page + ' crop).jpg';
                } else {
                    $scope.newTitle = $scope.currentUrlParams.title.substr(0, p) + ' (cropped)' + $scope.currentUrlParams.title.substr(p);
                }

                $timeout(function() {
                    console.log('Enabling Jcrop');

                    $('#cropbox').Jcrop({
                        bgColor: 'transparent',
                        addClass: 'transparentBg',
                        aspectRatio: getAspectRatio(),
                        onSelect: function(c) {
                            if (setSelectCalled) {
                                // The change was triggered by a manual setSelect() call
                                setSelectCalled = false;
                            } else {
                                $scope.$apply(function() { updateCoords(c); });
                            }
                        },
                        onRelease: function() {
                            $scope.$apply(function() { $scope.crop_dim = undefined; });
                        }
                    }, function() {
                        jcrop_api = this;
                    });

                    if (getParameterByName('action') == 'magic') {
                        $scope.locateBorder();
                    }

                }, 200);
            }

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
            .success(function(response) {
                $scope.borderLocatorBusy = false;
                console.log(response);
                var area = [
                    response['area'][0]/pixelratio[0],
                    response['area'][1]/pixelratio[1],
                    response['area'][2]/pixelratio[0],
                    response['area'][3]/pixelratio[1]
                ];
                console.log(area);
                setTimeout(function() {
                    jcrop_api.setSelect(area);
                }, 0); // update outside the digest cycle (TODO: Rewrite JCrop to be fully compatible with AngularJS)
            })
            .error(function(response, status, headers) {
                $scope.error = 'An error occured: ' + status + ' ' + response.error;
                $scope.borderLocatorBusy = false;
            });
    };

    $scope.cropMethodChanged = function() {
        LocalStorageService.set('croptool-cropmethod', $scope.cropmethod);
    };

    function getAspectRatio() {
        var ratio = 0;
        if ($scope.aspectratio == 'keep') {
            ratio = $scope.metadata.original.width / $scope.metadata.original.height;
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

        LocalStorageService.set('croptool-aspectratio', $scope.aspectratio);
        LocalStorageService.set('croptool-aspectratio-x', $scope.aspectratio_cx);
        LocalStorageService.set('croptool-aspectratio-y', $scope.aspectratio_cy);

        jcrop_api.setOptions({ aspectRatio: ratio });
        if ($scope.crop_dim) {
            var c = jcrop_api.tellSelect();
            updateCoords(jcrop_api.tellSelect());
            // jcrop_api.focus();
        }
    };

    function parseImageUrlOrTitle( params ) {

        var pattern1 = /([a-z0-9.]+)\.(wikimedia.org|wikipedia.org|wmflabs.org|wikisource.org)\/wiki\/([^?]+)/,
            pattern2 = /([a-z0-9.]+)\.(wikimedia.org|wikipedia.org|wmflabs.org|wikisource.org)\/w\/index.php/,
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
            params.title = params.title.split('?')[0];
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

        if (params.title.match(/\.(pdf|djvu)$/) && !params.page) {
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
            };
        }

        if (updateHistory !== false) {
            var params = $httpParamSerializer($scope.currentUrlParams);
            var newUrl = location.href.split('?', 1)[0] + (params.length ? '?' + params : '');
            window.history.pushState(null, null, newUrl);
            everPushedSomething = true;
        }


        if (jcrop_api) {
            jcrop_api.destroy();
            $('#cropbox').removeAttr('style');
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

        console.log('   params before parse: ',$scope.currentUrlParams);
        $scope.currentUrlParams = parseImageUrlOrTitle($scope.currentUrlParams);
        console.log('    params after parse: ',$scope.currentUrlParams);
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
        $scope.ladda = true;

        $http.get('./api/file/crop?' + $httpParamSerializer({
            title: $scope.currentUrlParams.title,
            site: $scope.currentUrlParams.site,
            page: $scope.currentUrlParams.page,
            method: $scope.cropmethod,
            x: $scope.crop_dim.x,
            y: $scope.crop_dim.y,
            width: $scope.crop_dim.w,
            height: $scope.crop_dim.h
        })).
        success(function(response) {
            $scope.ladda = false;
            if (!response.page.allowOverwrite) {
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
        }).
        error(function(response, status, headers) {
            $scope.error = '[Error] ' + response.error;
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

        if ($scope.ignoreWarnings) {
            params.ignorewarnings = '1';
        }

        $http.post('./api/file/publish', params).
        success(function(response) {

            console.log(response);

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

        }).
        error(function(response, status, headers) {
            $scope.ladda2 = false;
            $scope.error = 'Upload failed! ' + response.error;
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

            console.log('Check existence of site:' + site + ', title:' + title);

            $http.get('./api/file/exists?' + $httpParamSerializer({
                site: site,
                title: title
            }), {
                timeout: canceler.promise,
            }).success(function(response) {
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

        LocalStorageService.set('croptool-overwrite', $scope.overwrite);

        // Cropped {x % using CropTool}
        // Removed border by cropping {x % using CropTool}
        // Removed watermark by cropping {x % using CropTool}

        // [[File:X]] cropped x % using CropTool
        // Removed border from [[File:X]] by cropping {x % using CropTool}
        // Removed watermark from [[File:X]] by cropping {x % using CropTool}

        var s = '';
        console.log($scope.cropresults);
        if ($scope.cropresults.page.elems.border || $scope.cropresults.page.elems.watermark || $scope.cropresults.page.elems.wikidata) {
            if ($scope.cropresults.page.elems.border) {
                s = 'Removed border';
            } else if ($scope.cropresults.page.elems.watermark) {
                s = 'Removed watermark';
            } else if ($scope.cropresults.page.elems.wikidata) {
                s = 'Cropped for [[:wikidata:' + $scope.cropresults.page.elems['wikidata-item'] + '|Wikidata]]';
            } else {
                s = 'Cropped';
            }
            if ($scope.overwrite == 'rename') {
                s += ' from [[File:' + $scope.currentUrlParams.title + ']]';
            }
            s += ' by cropping';
        } else {
            if ($scope.overwrite == 'rename') {
                s += '[[File:' + $scope.currentUrlParams.title + ']] cropped';
            } else {
                s += 'Cropped';
            }
        }
        s += ' ' + $scope.cropresults.dim;
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
