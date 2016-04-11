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

    });

$(document).on('ready', function() {
    $("#addCalendarEvent-modal").on('hide.bs.modal', function () {
        console.log('add calendar event modal is closing.');
    });

    $("#staff-calendar").fullCalendar({
        dayClick: function() {
            console.log("user clicked a day");
        }
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $('#staff-calendar').fullCalendar('render');
    });
    $('#myTab a:first').tab('show');
});
