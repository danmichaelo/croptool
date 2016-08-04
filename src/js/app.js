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

    console.log('Init LoginService');

    var that = this;

    this.checkLogin = function(response) {
        if (response.user) {
            that.user = { name: response.user };
        } else {
            that.user = undefined;
        }
        that.loginResponse = response;
        $rootScope.$broadcast('loginStatusChanged', response);
    };

    $http.get('backend.php?action=checkLogin')
      .success(this.checkLogin)
      .error(function(err, code) {
        that.loginResponse = { error: { code: code, info: err }};
        $rootScope.$broadcast('loginStatusChanged');
      });

}]).


service('WindowService', ['$rootScope', '$window', function($rootScope, $window) {

    var windowWidth = $window.outerWidth;
    angular.element($window).bind('resize',function() {
        $rootScope.$broadcast('windowWidthChanged', { oldValue: windowWidth, value: $window.outerWidth });
        windowWidth = $window.outerWidth;
        $rootScope.$apply();
     });

}]).

controller('LoginCtrl', ['$scope', '$http', 'LoginService', function($scope, $http, LoginService) {

    $scope.user = LoginService.user;
    $scope.ready = false;

    $scope.oauthLogin = function() {
        window.location.href = './backend.php?action=authorize';
    };

    $scope.logout = function() {
        $http.get('backend.php?action=logout').
        success(function(response) {
            console.log('LOGOUT');
            LoginService.checkLogin(response);
            $scope.user = LoginService.user;
        });
    };

    $scope.$on('loginStatusChanged', function() {

        $scope.user = LoginService.user;
        $scope.ready = true;
        if (LoginService.loginResponse.error) {
            var err = LoginService.loginResponse.error ? LoginService.loginResponse.error.code + ' : ' + LoginService.loginResponse.error.info : null;
            $scope.oauthError = err;
        }

        $scope.oauthWarnings = LoginService.loginResponse.warnings;

    });

    console.log('Init LoginCtrl');

}]).

controller('AppCtrl', ['$scope', '$http', '$timeout', '$q', '$window', 'LoginService', 'localStorageService', 'WindowService', function($scope, $http, $timeout, $q, $window, LoginService, LocalStorageService, WindowService) {

    var jcrop_api,
        everPushedSomething = false,
        pixelratio = [1,1],
        setSelectCalled = false;

    $scope.site = '';     // Site-part of the URL
    $scope.title = '';    // Title-part of the URL

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
    $scope.showNotice = !LocalStorageService.get('croptool-notice-3');

    $scope.dismissNotice = function() {
        LocalStorageService.add('croptool-notice-3','hide');
        $scope.showNotice = false;
    }

    $scope.back = function() {
        $scope.cropresults = undefined;
        $scope.error = '';
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

        console.log('[fetchImage] Site: ' + $scope.site + ', title: ' + $scope.title + ', page: ' + $scope.page);

        if (!$scope.title) {
            console.log('[fetchImage] No title given, nothing to fetch');
            return;
        }

        $scope.error = '';
        $scope.busy = true;
        $scope.crop_dim = undefined;

        $http.get('backend.php?action=metadata&title=' + encodeURIComponent($scope.title) + '&site=' + encodeURIComponent($scope.site) + '&page=' + encodeURIComponent($scope.page)).
        error(function(response, status, headers) {
            $scope.metadata = null;
            $scope.error = 'An error occured: ' + status + ' ' + response.error;
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

            if ($scope.metadata.thumb) {
                pixelratio = [$scope.metadata.original.width/$scope.metadata.thumb.width, $scope.metadata.original.height/$scope.metadata.thumb.height];
            } else {
                pixelratio = [1,1];
            }

            if (!response.error) {

                var p = $scope.title.lastIndexOf('.');
                if ($scope.page) {
                    $scope.newTitle = $scope.title.substr(0, p) + ' (page ' + $scope.page + ' crop).jpg';
                } else {
                    $scope.newTitle = $scope.title.substr(0, p) + ' (cropped)' + $scope.title.substr(p);
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
        $http.get('backend.php?action=locateBorder&title=' + encodeURIComponent($scope.title) + '&site=' + encodeURIComponent($scope.site) + '&page=' + encodeURIComponent($scope.page))
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
            .error(function() {
                alert("An error occured while trying to locate the border");
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

    function parseImageUrlOrTitle( imageUrlOrTitle ) {

        var pattern1 = /([a-z0-9.]+)\.(wikimedia.org|wikipedia.org|wmflabs.org)\/wiki\/([^?]+)/,
            pattern2 = /([a-z0-9.]+)\.(wikimedia.org|wikipedia.org|wmflabs.org)\/w\/index.php/,
            matches1 = imageUrlOrTitle.match(pattern1),
            matches2 = imageUrlOrTitle.match(pattern2),
            o = { site: 'commons.wikimedia.org', title: '', page: 0 };

        var qs = '?' + imageUrlOrTitle.split('?')[1]
        if (matches1) {
            o.site = matches1[1] + '.' + matches1[2];
            o.title = matches1[3];
            o.page = getParameterByName('page', qs);
        } else if (matches2) {
            o.site = matches2[1] + '.' + matches2[2];
            o.title = getParameterByName('title', qs);
            o.page = getParameterByName('page', qs);
        } else {
            o.title = imageUrlOrTitle.split('?')[0];
            o.page = getParameterByName('page', qs);
        }

        try {
            o.title = decodeURIComponent(o.title);
        } catch (e) {
            // Ignore
        }

        o.title = o.title
            .replace(/_/g, ' ')
            .replace(/^[^:]+:/, '');  // Strip off File:, Fil:, etc.

        return o;
    }


    $scope.openFile = function(updateHistory) {

        if (updateHistory !== false) {
            var newUrl = location.href.split('?', 1)[0] + ($scope.imageUrlOrTitle ? '?title=' + encodeURIComponent($scope.imageUrlOrTitle.replace(/ /g, '_')) : '');
            window.history.pushState(null, null, newUrl);
            everPushedSomething = true;
        }

        if (!$scope.imageUrlOrTitle) {
            if (jcrop_api) {
                jcrop_api.destroy();
                $('#cropbox').removeAttr('style');
            }
            $scope.site = ''; // Site part of URL
            $scope.title = ''; // Title part of URL
            $scope.newTitle = ''; // Title part of URL
            $scope.cropresults = null;
            $scope.uploadresults = null;
            $scope.metadata = null;
            return;
        }

        var o = parseImageUrlOrTitle($scope.imageUrlOrTitle);
        $scope.site = o.site;
        $scope.title = o.title;
        $scope.page = o.page;
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
        $scope.busy = true;

        $http.post('backend.php', {
            title: $scope.title,
            site: $scope.site,
            page: $scope.page,
            cropmethod: $scope.cropmethod,
            x: $scope.crop_dim.x,
            y: $scope.crop_dim.y,
            w: $scope.crop_dim.w,
            h: $scope.crop_dim.h
        }).
        success(function(response) {
            $scope.busy = false;
            $scope.cropresults = response;
            $scope.updateUploadComment();
        }).
        error(function(response, status, headers) {
            $scope.error = '[Error] ' + response.error;
            $scope.busy = false;
        });


    };

    $scope.upload = function(isRetrying) {

        $scope.busy = true;
        $scope.error = '';
        $scope.allowIgnoreWarnings = false;

        var params = {
            title: $scope.title,
            site: $scope.site,
            page: $scope.page,
            overwrite: $scope.overwrite,
            comment: $scope.uploadComment,
            filename: $scope.newTitle,
            elems: $scope.cropresults.page.elems,
            store: true
        };

        if ($scope.ignoreWarnings) {
            params.ignorewarnings = '1';
        }

        $http.post('backend.php', params).
        success(function(response) {

            console.log(response);

            $scope.busy = false;
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
            $scope.busy = false;
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
            console.log('LOCATION CHANGED: ' + getParameterByName('imageUrlOrTitle'));
            $scope.imageUrlOrTitle = getParameterByName('imageUrlOrTitle');
            $scope.openFile(false);
        });
    });

    var tmp = getParameterByName('title');
    if (!tmp) tmp = getParameterByName('imageUrlOrTitle');  // deprecated
    $scope.currentUrl = tmp;
    $scope.imageUrlOrTitle = $scope.currentUrl;
    $scope.page = getParameterByName('page');

    $scope.openFile(false);

    $scope.status = 'Checking login';

    // Defaults
    $scope.cropmethod = LocalStorageService.get('croptool-cropmethod') || 'precise';
    $scope.aspectratio = LocalStorageService.get('croptool-aspectratio') || 'free';
    $scope.aspectratio_cx = LocalStorageService.get('croptool-aspectratio-x') || '16';
    $scope.aspectratio_cy = LocalStorageService.get('croptool-aspectratio-y') || '9';;
    $scope.overwrite = LocalStorageService.get('croptool-overwrite') || 'overwrite';;
    if ($scope.page) {
        $scope.overwrite = 'rename';  // Force rename
    }


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

            $http.get('backend.php?action=exists&site=' + encodeURIComponent(site) + '&title=' + encodeURIComponent(title), {
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

    $scope.$watch('imageUrlOrTitle', function() {

        var o = parseImageUrlOrTitle( $scope.imageUrlOrTitle ),
            key = o.site + ':' + o.title;

        $scope.site = o.site;
        $scope.title = o.title;

        if ($scope.imageUrlOrTitle !== undefined && $scope.exists[key] === undefined) {
            if ($scope.imageUrlOrTitle !== $scope.currentUrl) {
                $scope.error = '';
                $scope.currentUrl = $scope.imageUrlOrTitle;
                fileExists( $scope.site, $scope.title );
            }
        }

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
        if ($scope.cropresults.page.elems.border || $scope.cropresults.page.elems.watermark) {
            if ($scope.cropresults.page.elems.border) {
                s = 'Removed border';
            } else if ($scope.cropresults.page.elems.watermark) {
                s = 'Removed watermark'
            }
            if ($scope.overwrite == 'rename') {
                s += ' from [[File:' + $scope.title + ']]';
            }
            s += ' by cropping';
        } else {
            if ($scope.overwrite == 'rename') {
                s += '[[File:' + $scope.title + ']] cropped';
            } else {
                s += 'Cropped';
            }
        }
        s += ' ' + $scope.cropresults.dim;
        $scope.uploadComment = s;
    };

    $scope.$watch('newTitle', function() {

        // TODO: !!! pageExists -> imageUrlOrTitleExists

        if ($scope.newTitle && $scope.exists[$scope.site + ':' + $scope.newTitle] === undefined) {
            fileExists($scope.site, $scope.newTitle);
        }

    });

    $scope.$on('windowWidthChanged', function(evt, val) {
        //console.log('Width changed');
        //console.log(val);
    });

}]);
