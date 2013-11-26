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
        that.loginResponse = response;
        $rootScope.$broadcast('loginStatusChanged', response);
    };

    $http.get('backend.php?checkLogin').success(this.checkLogin);

}]).

controller('LoginCtrl', ['$scope', 'LoginService', function($scope, LoginService) {

    $scope.user = LoginService.user;

    $scope.tuscLogin = function() {
        $.post('backend.php', { username: $scope.username, password: $scope.password}).
        success(function(response) {
            LoginService.checkLogin(response);
            $scope.user = LoginService.user;
            if (!$scope.user) {
                $scope.loginerror = "Login failed";
            } else {
                $scope.loginerror = undefined;
            }
            $scope.$apply();
        });
    };

    $scope.oauthLogin = function() {
        window.location.href = './backend.php?action=authorize';
    };

    $scope.logout = function() {
        $.post('backend.php', { logout: true }).
        success(function(response) {
            LoginService.checkLogin(response);
            $scope.user = LoginService.user;
            $scope.$apply();
        });
    };

    $scope.$on('loginStatusChanged', function(response) {

        console.log('Login status changed: ' + (LoginService.user ? 'logged in' : 'not logged in'));
        $scope.user = LoginService.user;
        if (LoginService.loginResponse.oauth.error) {
            $scope.oautherror = LoginService.loginResponse.oauth.error.code + ' : ' + LoginService.loginResponse.oauth.error.info;
        }

    });

    console.log('Init LoginCtrl');

}]).

controller('AppCtrl', ['$scope', '$http', '$timeout', 'LoginService', function($scope, $http, $timeout, LoginService) {

    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    $scope.loggedin = LoginService.loggedin;
    $scope.title = getParameterByName('title').replace(/_/g, ' ');

    var p = $scope.title.lastIndexOf('.');
    $scope.newFilename = $scope.title.substr(0, p) + ' (cropped)' + $scope.title.substr(p);

    function updateCoords(c) {
        var ratio = [1,1];
        if ($scope.metadata.thumb) {
            ratio = [$scope.metadata.original.width/$scope.metadata.thumb.width, $scope.metadata.original.height/$scope.metadata.thumb.height];
        }
        var new_size = [Math.round(c.w * ratio[0]), Math.round(c.h * ratio[1])];
        var new_offset = [Math.round(c.x * ratio[0]), Math.round(c.y * ratio[1])];

        console.log(c);

        $scope.crop_dim = {
            x: new_offset[0],
            y: new_offset[1],
            w: new_size[0],
            h: new_size[1]
        };

        //$('#cropped_size').html(new_size[0] + 'x' + new_size[1] + ' px, x offset: ' + new_offset[0] + ' px, y offset: ' + new_offset[1] + ' px');
    }

    $scope.status = 'Checking login';

    $scope.cropmethod = "lossless";
    $scope.overwrite = "overwrite";

    $scope.$on('loginStatusChanged', function(response) {


        console.log('Login status changed: ' + LoginService.user);

        $scope.status = '';
        $scope.user = LoginService.user;

        if (LoginService.user) {
            fetchImage();
        }

    });

    function fetchImage () {

        $scope.status = 'Please wait while fetching image and metadata... This might take some time depending on the filesize of the image...';

        $http.get('backend.php?lookup=1&title=' + encodeURIComponent($scope.title)).
        success(function(response) {

            console.log(response);

            $scope.status = '';

            $scope.metadata = response;

            $timeout(function() {
                console.log('Enabling Jcrop');
                $('#cropbox').Jcrop({
                    onSelect: function(c) {
                        $scope.$apply(function() { updateCoords(c); });
                    },
                    onRelease: function() {
                        $scope.$apply(function() { $scope.crop_dim = undefined; });
                    }
                });
            }, 200);
        });
    }

    $scope.preview = function() {
        if ($scope.crop_dim === undefined) {
            alert('Please select a crop region then press submit.');
            return false;
        }

        $scope.status = 'Please wait while cropping...';

        $http.post('backend.php', {
            title: $scope.title,
            cropmethod: $scope.cropmethod,
            x: $scope.crop_dim.x,
            y: $scope.crop_dim.y,
            w: $scope.crop_dim.w,
            h: $scope.crop_dim.h
        }).
        success(function(response) {

            $scope.status = '';

            console.log(response);

            if (response.error) {
                alert(response.error);
            } else {
                $scope.cropresults = response;
            }
        }).
        error(function(response, status, headers) {
            $scope.status = 'An error occured: ' + status + ' ' + response;

        });


    };

    $scope.upload = function() {

        $scope.status = 'Please wait while saving...';
        $scope.uploadresults = { status: 'Working' };

        $http.post('backend.php', {
            title: $scope.title,
            overwrite: $scope.overwrite,
            filename: $scope.newFilename,
            store: true
        }).
        success(function(response) {

            console.log(response);

            if (response.result === 'Success') {
                $scope.status = '';
                $scope.uploadresults = response; //.imageinfo.descriptionurl;

            } else {
                $scope.status = 'Upload failed!';
                if (response.error) {
                    $scope.status += ' ' + response.error.info;
                }
            }

        }).
        error(function(response, status, headers) {
            $scope.status = 'An error occured: ' + status + ' ' + response;

        });

    };

}]);
