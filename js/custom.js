"use strict";
var app = angular.module('communityCareHubApp', [])
    .controller('communityCareHubController', function ($scope, $window) {
        $scope.submitLogin = function () {
            if ($scope.username === 'Caregiver' && $scope.password === 'abc123') {
                $window.location.href = '/src/caregiverHome.html';
            }
            else {
                alert("Incorrect Username or Password");
            }
        };

    });