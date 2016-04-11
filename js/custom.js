"use strict";
var app = angular.module('communityCareHubApp', [])
    .controller('communityCareHubController', function ($scope, $window) {
        $scope.submitLogin = function () {
            $scope.clearFlash();
            $("#login-button").prop("disabled", true);
            // wait a little to give the impression of it loading
            setTimeout(function() {
                if ($scope.username === 'Caregiver' && $scope.password === 'abc123') {
                    $window.location.href = '/caregiverHome.php';
                }
                else {
                    $scope.flash("Incorrect username or password", "danger");
                    $("#login-button").prop("disabled", false);
                }
            }, 500);
        };

        $scope.flash = function(message, severity) {
            $("#flash").addClass("alert alert-" + severity).html(message);
        };

        $scope.clearFlash = function() {
            $("#flash").html("").removeClass();
        };

        $scope.patientList = [
            {
                name: "Carlu Hipkins",
                gender: "female",
                age: 86,
                room: 116,
                image: '/assets/images/carlu.jpg'
            }
        ]

    });
