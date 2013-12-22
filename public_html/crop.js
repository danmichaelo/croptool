'use strict';

// Declare app level module which depends on filters, and services
angular.module('croptool', []).

service('LoginService', ['$http', '$rootScope', function($http, $rootScope) {

    console.log('Init LoginService');

    var that = this;

    this.checkLogin = function(response) {
        console.log(response);
        if (response.oauth.user) {
            that.user = { name: response.oauth.user, method: 'OAuth' };
        } else if (response.tusc.user) {
            that.user = { name: response.tusc.user, method: 'TUSC' };
        } else {
            that.user = undefined;
        }
        console.log(that.user);
        that.loginResponse = response;
        $rootScope.$broadcast('loginStatusChanged', response);
    };

    $http.get('backend.php?checkLogin').success(this.checkLogin);

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

    $scope.$on('loginStatusChanged', function(response) {

        console.log('Login status changed: ' + (LoginService.user ? 'logged in' : 'not logged in'));
        $scope.user = LoginService.user;
        $scope.ready = true;
        if (LoginService.loginResponse.oauth.error) {
            $scope.oautherror = LoginService.loginResponse.oauth.error.code + ' : ' + LoginService.loginResponse.oauth.error.info;
        }

    });

    console.log('Init LoginCtrl');

}]).

controller('AppCtrl', ['$scope', '$http', '$timeout', '$q', 'LoginService', function($scope, $http, $timeout, $q, LoginService) {

    var jcrop_api,
        everPushedSomething = false,
        pixelratio = [1,1];

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

    $scope.back = function() {
        $scope.cropresults = undefined;
        $scope.error = '';
    };

    $scope.$on('loginStatusChanged', function(response) {

        console.log('[appctrl] Login status changed: ' + LoginService.user);

        $scope.status = '';
        $scope.user = LoginService.user;

    });

    function fetchImage (title) {

        if (!title) {
            console.log('No title given, nothing to fetch');
            return;
        }

        $scope.busy = true;

        $http.get('backend.php?lookup=1&title=' + encodeURIComponent(title)).
        success(function(response) {

            $scope.busy = false;
            console.log(response);

            $scope.metadata = response;

            if ($scope.metadata.thumb) {
                pixelratio = [$scope.metadata.original.width/$scope.metadata.thumb.width, $scope.metadata.original.height/$scope.metadata.thumb.height];
            }

            if (!response.error) {

                $scope.title = title;
                var p = title.lastIndexOf('.');
                $scope.newFilename = title.substr(0, p) + ' (cropped)' + title.substr(p);

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
        $http.get('backend.php?locateBorder=1&title=' + encodeURIComponent($scope.title))
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

    $scope.setTitle = function(filename, updateHistory) {

        if (updateHistory !== false) {
            var newUrl = location.href.split('?', 1)[0] + (filename ? '?title=' + encodeURIComponent(filename.replace(/ /g, '_')) : '');
            window.history.pushState(null, null, newUrl);
            everPushedSomething = true;
        }

        if (!filename) {
            console.log('show title form');
            if (jcrop_api) {
                jcrop_api.destroy();
                $('#cropbox').removeAttr('style');
            }
            $scope.title = '';
            //$scope.filename = '';
            $scope.newFilename = '';
            $scope.metadata = null;
            return;
        }
        var title = filename
            .replace(/_/g, ' ')
            .replace(/^File:/, '');

        fetchImage(title);
    }

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
            overwrite: $scope.overwrite,
            filename: $scope.newFilename,
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

    $scope.filename = getParameterByName('title');

    window.addEventListener('popstate', function(e) {

        if (!everPushedSomething) {
            // Chrome and Safari always emit a popstate event on page load, but Firefox doesn't.
            // If we've newer pushed anything, we assume this event was called on page load and ignore it.
            return;
        }
        $scope.$apply(function() {
            console.log('LOCATION CHANGED: ' + getParameterByName('title'));
            $scope.setTitle(getParameterByName('title'), false);
        });
    });

    $scope.setTitle(getParameterByName('title'), false);

    $scope.status = 'Checking login';

    $scope.cropmethod = "precise";
    $scope.overwrite = "overwrite";


    // On filename change, check with the MediaWiki API if the file exists.
    // Delay 500 ms before checking in case the user is in the process of typing.
    // Code below might eventually better be separated out into a directive or something.

    var canceler;

    $scope.exists = [];

    function pageExists(filename) {

        var title = filename
            .replace(/_/g, ' ')
            .replace(/^File:/, '');

        if (!canceler) {
            console.log('nothing to abort');
        } else if (canceler && canceler.resolve) {
            // Aborts the $http request if it isn't finished.
            console.log('abort http');
            canceler.resolve();
        } else {
            // Abort the timer
            console.log('abort timer');
            $timeout.cancel(canceler);
        }

        if (title == '') {
            canceler = null;
            return;
        }

        canceler = $timeout(function() {

            canceler = $q.defer();

            $http.get('backend.php?pageExists=' + encodeURIComponent(title), {
                timeout: canceler.promise,
            }).success(function(response) {
                $scope.exists[filename] = response.exists;
                canceler = null;
            });

        }, 300);
    }

    $scope.$watch('filename', function() {

        if ($scope.filename !== undefined && $scope.exists[$scope.filename] === undefined) {
            var fname = $scope.filename
                .replace(new RegExp('^(https://|http://)'), '')
                .replace(new RegExp('^commons.wikimedia.org/wiki/'), '');
            if (fname !== $scope.filename) {
                // The pasted filename was a url, so we should decode it
                fname = decodeURIComponent(fname);
            }
            fname = fname.replace(/^File:/, '')
                .replace('_', ' ', 'g');
            $scope.filename = fname;
            pageExists($scope.filename);
        }

    });

    $scope.$watch('newFilename', function() {

        if ($scope.newFilename !== undefined && $scope.exists[$scope.newFilename] === undefined) {
            pageExists($scope.newFilename);
        }

    });


}]);
