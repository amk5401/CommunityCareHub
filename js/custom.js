"use strict";
var app = angular.module('communityCareHubApp', [])
    .controller('communityCareHubController', function ($scope, $window) {
        $scope.submitLogin = function () {
            if ($scope.username === 'Caregiver' && $scope.password === 'abc123') {
                $window.location.href = '/caregiverHome.php';
            }
            else {
                alert("Incorrect Username or Password");
            }
        };

    });
