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
                gender: "Female",
                age: 86,
                room: 116,
                image: '/assets/images/carlu2.jpeg'
            },
            {
                name: "Somebody Else",
                gender: "Male",
                age: 94,
                room: 117,
                image: '/assets/images/man.jpg'
            }
        ]

    });

$(document).ready(function() {
    // Lets us link to individual bootstrap tabs by id
    var url = document.location.toString();
    if (url.match('#')) {
        $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
    }
    // Change hash for page-reload
    $('.nav-tabs a').on('shown.bs.tab', function (e) {
        window.location.hash = e.target.hash;
    });

    $('.patientlist-row').on('click', function() {
        window.location.href = 'patientProfile.php#General';
    });
});
