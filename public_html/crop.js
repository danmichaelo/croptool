'use strict';

// Declare app level module which depends on filters, and services
angular.module('croptool', ['LocalStorageModule', 'ngSanitize']).

service('LoginService', ['$http', '$rootScope', function($http, $rootScope) {

    console.log('Init LoginService');

    var that = this;

    this.checkLogin = function(response) {
        console.log(response);
        if (response.user) {
            that.user = { name: response.user };
        } else {
            that.user = undefined;
        }
        console.log(that.user);
        that.loginResponse = response;
        $rootScope.$broadcast('loginStatusChanged', response);
    };

    $http.get('backend.php?checkLogin')
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

    $scope.tuscLogin = function() {
        $http.post('backend.php', { username: $scope.username, password: $scope.password}).
        success(function(response) {
            LoginService.checkLogin(response);
            $scope.user = LoginService.user;
            if (!$scope.user) {
                $scope.loginerror = "Login failed";
            } else {
                $scope.loginerror = undefined;
            }
        });
    };

    $scope.oauthLogin = function() {
        window.location.href = './backend.php?action=authorize';
    };

    $scope.logout = function() {
        $http.post('backend.php?action=logout').
        success(function(response) {
            console.log('LOGOUT');
            LoginService.checkLogin(response);
            $scope.user = LoginService.user;
        });
    };

    $scope.$on('loginStatusChanged', function() {

        console.log('Login status changed: ' + (LoginService.user ? 'logged in' : 'not logged in'));
        $scope.user = LoginService.user;
        $scope.ready = true;
        if (LoginService.loginResponse.error) {
            var err = LoginService.loginResponse.error ? LoginService.loginResponse.error.code + ' : ' + LoginService.loginResponse.error.info : null;
            console.log('SET ERR: ' + err);
            $scope.oauthError = err;
        }

    });

    console.log('Init LoginCtrl');

}]).

controller('AppCtrl', ['$scope', '$http', '$timeout', '$q', '$window', 'LoginService', 'localStorageService', 'WindowService', function($scope, $http, $timeout, $q, $window, LoginService, LocalStorageService, WindowService) {

    var jcrop_api,
        everPushedSomething = false,
        pixelratio = [1,1];

    
    $scope.site = '';     // Site-part of the URL
    $scope.title = '';    // Title-part of the URL

    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
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

        console.log(c);

        $scope.crop_dim = {
            x: new_offset[0],
            y: new_offset[1],
            w: new_size[0],
            h: new_size[1],
            right: $scope.metadata.original.width - new_offset[0] - new_size[0],
            bottom: $scope.metadata.original.height - new_offset[1] - new_size[1],
        };

        //$('#cropped_size').html(new_size[0] + 'x' + new_size[1] + ' px, x offset: ' + new_offset[0] + ' px, y offset: ' + new_offset[1] + ' px');
    }

    //LocalStorageService.setPrefix('croptool');
    $scope.showNotice = !LocalStorageService.get('croptool-notice-2');

    $scope.dismissNotice = function() {
        LocalStorageService.add('croptool-notice-2','hide');
        $scope.showNotice = false;
    }

    $scope.back = function() {
        $scope.cropresults = undefined;
        $scope.error = '';
    };

    $scope.$on('loginStatusChanged', function() {

        console.log('[appctrl] Login status changed: ' + LoginService.user);

        $scope.status = '';
        $scope.user = LoginService.user;

    });

    function fetchImage() {

        console.log('[fetchImage] Site: ' + $scope.site + ', title: ' + $scope.title);

        if (!$scope.title) {
            console.log('[fetchImage] No title given, nothing to fetch');
            return;
        }

        $scope.error = '';
        $scope.busy = true;
        $scope.crop_dim = undefined;

        $http.get('backend.php?action=metadata&title=' + encodeURIComponent($scope.title) + '&site=' + encodeURIComponent($scope.site)).
        success(function(response) {

            $scope.busy = false;
            console.log(response);

            if (response.error) {
                $scope.error = response.error;
                $scope.metadata = null;
                return;
            }

            $scope.metadata = response;

            if ($scope.metadata.thumb) {
                pixelratio = [$scope.metadata.original.width/$scope.metadata.thumb.width, $scope.metadata.original.height/$scope.metadata.thumb.height];
            }

            if (!response.error) {

                var p = $scope.title.lastIndexOf('.');
                $scope.newTitle = $scope.title.substr(0, p) + ' (cropped)' + $scope.title.substr(p);

                $timeout(function() {
                    console.log('Enabling Jcrop');

                    $('#cropbox').Jcrop({
                        onSelect: function(c) {
                            $scope.$apply(function() { updateCoords(c); });
                        },
                        onRelease: function() {
                            $scope.$apply(function() { $scope.crop_dim = undefined; });
                        }
                    }, function() {
                        jcrop_api = this;
                    });

                }, 200);
            }

        });
    }

    $scope.locateBorder = function() {
        if ($scope.borderLocatorBusy) return;

        $scope.borderLocatorBusy = true;
        $http.get('backend.php?action=locateBorder&title=' + encodeURIComponent($scope.title) + '&site=' + encodeURIComponent($scope.site))
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

    function parseImageUrl( imageUrl ) {

        var matches = imageUrl.match(/\/\/([a-z]+)\.(wikimedia.org|wikipedia.org)\/wiki\/(.*)$/),
            site = 'commons.wikimedia.org',
            title = '';

        if (matches) {
            site = matches[1] + '.' + matches[2];
            title = matches[3];
        } else {
            title = imageUrl;
        }

        title = title
            .replace(/_/g, ' ')
            .replace(/^[^:]+:/, '');  // Strip off File:, Fil:, etc.

        return { site: site, title: title };
    }


    $scope.openFile = function(updateHistory) {

        if (updateHistory !== false) {
            var newUrl = location.href.split('?', 1)[0] + ($scope.imageUrl ? '?imageUrl=' + encodeURIComponent($scope.imageUrl.replace(/ /g, '_')) : '');
            window.history.pushState(null, null, newUrl);
            everPushedSomething = true;
        }

        if (!$scope.imageUrl) {
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

        var o = parseImageUrl($scope.imageUrl);
        $scope.site = o.site;
        $scope.title = o.title;
        fetchImage();
    };

    $scope.preview = function() {
        if ($scope.crop_dim === undefined) {
            alert('Please select a crop region then press submit.');
            return false;
        }

        $scope.error = '';
        $scope.busy = true;
        //$scope.status = 'Please wait while cropping...';

        $http.post('backend.php', {
            title: $scope.title,
            site: $scope.site,
            cropmethod: $scope.cropmethod,
            x: $scope.crop_dim.x,
            y: $scope.crop_dim.y,
            w: $scope.crop_dim.w,
            h: $scope.crop_dim.h
        }).
        success(function(response) {

            $scope.busy = false;
            console.log(response);

            if (response.error) {
                alert(response.error);
            } else {
                $scope.cropresults = response;
            }
        }).
        error(function(response, status, headers) {
            $scope.error = 'An error occured: ' + status + ' ' + response;
            $scope.busy = false;
        });


    };

    $scope.upload = function() {

        $scope.busy = true;
        $scope.error = '';
        //$scope.uploadresults = { status: 'Working' };

        $http.post('backend.php', {
            title: $scope.title,
            site: $scope.site,
            overwrite: $scope.overwrite,
            comment: $scope.cropresults.uploadComments[$scope.overwrite],
            filename: $scope.newTitle,
            store: true
        }).
        success(function(response) {

            console.log(response);

            $scope.busy = false;
            if (response.result === 'Success') {
                $scope.uploadresults = response; //.imageinfo.descriptionurl;

            } else {
                $scope.error = 'Upload failed! ';
                if (response.error) {
                    $scope.error += response.error.info;
                }
            }

        }).
        error(function(response, status, headers) {
            $scope.busy = false;
            $scope.error = 'An error occured: ' + status + ' ' + response;
        });

    };

    angular.element($window).bind('popstate', function(e) {
    //window.addEventListener('popstate', function(e) {

        if (!everPushedSomething) {
            // Chrome and Safari always emit a popstate event on page load, but Firefox doesn't.
            // If we've newer pushed anything, we assume this event was called on page load and ignore it.
            return;
        }
        $scope.$apply(function() {
            console.log('LOCATION CHANGED: ' + getParameterByName('imageUrl'));
            $scope.imageUrl = getParameterByName('imageUrl');
            $scope.openFile(false);
        });
    });


    $scope.imageUrl = getParameterByName('imageUrl');
    if (!$scope.imageUrl) {
        $scope.imageUrl = getParameterByName('title');  // deprecated        
    }
    $scope.openFile(false);

    $scope.status = 'Checking login';

    $scope.cropmethod = "precise";
    $scope.overwrite = "overwrite";


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

    $scope.$watch('imageUrl', function() {

        var o = parseImageUrl( $scope.imageUrl ),
            key = o.site + ':' + o.title;

        $scope.site = o.site;
        $scope.title = o.title;

        if ($scope.imageUrl !== undefined && $scope.exists[key] === undefined) {

            var imageUrl = decodeURIComponent($scope.imageUrl)
                .replace(' ', '_', 'g');

            // TODO: We should strip off the query string, but we must be a bit careful since
            // we have decoded the URI, and so might have '?' in the actual URI:
            // https://commons.wikimedia.org/wiki/File:Svg_convex_hull?_country.png?uselang=nb

            $scope.imageUrl = imageUrl;

            // var imageUrl = $scope.imageUrl
            //     .replace(new RegExp('^(https://|http://)'), '');
                // .replace(new RegExp('^commons.wikimedia.org/wiki/'), '');
            //if (fname !== $scope.filename) {
            // Decode URL
            // imageUrl = decodeURIComponent(imageUrl);
            // //}
            // imageUrl = imageUrl.replace(/^File:/, '')
            //     .replace('_', ' ', 'g');

            // console.log('Image url changed. Site: ' + $scope.site, ' title: ' + $scope.title);

            fileExists( $scope.site, $scope.title );
        }

    });

    $scope.$watch('newTitle', function() {

        // TODO: !!! pageExists -> imageUrlExists

        if ($scope.newTitle && $scope.exists[$scope.site + ':' + $scope.newTitle] === undefined) {
            fileExists($scope.site, $scope.newTitle);
        }

    });

    $scope.$on('windowWidthChanged', function(evt, val) {
        //console.log('Width changed');
        //console.log(val);
    });

}]);
