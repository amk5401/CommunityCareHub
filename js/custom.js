"use strict";

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

var app = angular.module('communityCareHubApp', [])
    .controller('communityCareHubController', function ($scope, $window) {
        $scope.submitLogin = function () {
            $scope.clearFlash();
            $("#login-button").prop("disabled", true);
            // wait a little to give the impression of it loading
            setTimeout(function () {
                if ($scope.username === 'Doctor' && $scope.password === 'abc123') {
                    $window.location.href = '/caregiverHome.php';
                }
                else if ($scope.username === 'Caregiver' && $scope.password === 'abc123') {
                    $window.location.href = '/caregiverHome.php';
                }
                else if ($scope.username === 'Loved One' && $scope.password === 'abc123') {
                    $window.location.href = '/lovedOnePortal.php';
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

        $(document).ready(function () {
            if (window.location.href.indexOf("index.php") > -1 || window.location.pathname == '/') {
                $('#logoutButton').hide();
                $('#helpLink').css({'right': '5px'});
                $('#caregiverHomeLink').hide();
                $('#patientProfileLink').hide();
                $('#lovedOnePortalLink').hide();
            }
            if (window.location.href.indexOf("caregiverHome.php") > -1) {
                $('#patientProfileLink').hide();
                $('#lovedOnePortalLink').hide();
                $("#helpText").text("This is the home page for a Caregiver or a Doctor. Here users are able to view a list of current patients as well as see an overall calendar of events and tasks for all relevant patients.");
            }
            if (window.location.href.indexOf("patientProfile.php") > -1) {
                $('#lovedOnePortalLink').hide();
                $("#helpText").text("This is a patient's profile. The medical page allows for viewing and editing of the medical data. The general page has basic info about the patient and the persoanl page keeps track of upcoming events and tasks.");
            }
            if (window.location.href.indexOf("lovedOnePortal.php") > -1) {
                $('#caregiverHomeLink').hide();
                $('#patientProfileLink').hide();
                $("#helpText").text("This is the loved one portal. The medical page can be used to see the patient's medical status and the personal page shows upcoming events and other personal information.");
            }
        });

        $('#taskDatepicker').datepicker("update", new Date())

        $scope.pre = {};
        $scope.newPrescription = function() {
            $scope.prescriptionList.push({
                name: $scope.pre.name,
                dosage: $scope.pre.dosage,
                hour: $scope.pre.hour,
                min: $scope.pre.min,
                ampm: $scope.pre.ampm,
                recurrence: $scope.pre.recurrence
            });
            $scope.pre = {};
            $('.modal').modal('hide');
        };

        $scope.condition = {};
        $scope.newCondition = function() {
            $scope.conditionList.push({
                condition: $scope.condition.condition,
                additionalDetails: $scope.condition.notes
            });
            $scope.condition = {};
            $('.modal').modal('hide');
        };

        $scope.task = {};
        $scope.newTaskEvent = function() {
            $scope.todoList.push({
                datetime: '9/6',//$scope.task.date, // this ended up being really hard
                details: $scope.task.taskName
            })
            $scope.task = {};
            $('.modal').modal('hide');
        };

        $scope.note = {};
        $scope.newPersonalNote = function() {
            $scope.notesList.push({
                date: '15:30 May 1',
                text: $scope.note.note
            });
            $scope.note = {};
            $('.modal').modal('hide');
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
                name: "Carlo Hopkins",
                gender: "Male",
                age: 94,
                room: 117,
                image: '/assets/images/man.jpg'
            }
        ];

        $scope.prescriptionList = [
            {
                name: "Insulin",
                dosage: "10 Units",
                hour: "10",
                min: "00",
                ampm: "am",
                recurrence: "Daily"
            },
            {
                name: "Cymbalta",
                dosage: "20mg",
                hour: "6",
                min: "30",
                ampm: "pm",
                recurrence: "Twice Daily"
            },
            {
                name: "Lipitor",
                dosage: "40mg",
                hour: "8",
                min: "00",
                ampm: "am",
                recurrence: "Daily"
            },
            {
                name: "Lyrica",
                dosage: "100mg",
                hour: "9",
                min: "00",
                ampm: "pm",
                recurrence: "Thrice Daily"
            }
        ];

        $scope.conditionList = [
            {
                condition: "Bum Knee",
                additionalDetails: "Uses a cane to get around. Must keep the leg straight whenever they sit down."
            },
            {
                condition: "Allergic to Pollen",
                additionalDetails: "Is never ever ever allowed to go outside. The pollen will kill them."
            }
        ];

        $scope.staffList = [
            {
              name: "Dr. Perry Cox",
              role: "Doctor",
              status: "active"
            },
            {
              name: "Dr. Christopher Turk",
              role: "Doctor",
              status: "active"
            },
            {
              name: "Dr. John Dorian",
              role: "Doctor",
              status: "inactive"
            },
            {
              name: "Carla Espinosa",
              role: "Caretaker",
              status: "inactive"
            },
            {
              name: "Laverne Roberts",
              role: "Caretaker",
              status: "active"
            }
        ];

        //caregiver personal notes
        $scope.notesList = [
            {
              date: "15:15 May 25",
              text: "Bloodwork results show signs of improvement"
            },
            {
              date: "12:30 March 03",
              text: "Carlu was in great spirits today. Excited for vist."
            },
            {
              date: "14:30 February 22",
              text: "Had some difficulty breathing on occasion, but nothing severe"
            },
            {
              date: "10:30 January 02",
              text: "Looking forward to the new year. Resolved to take up painting"
            },
        ]

        $scope.todoList = [
            {
                datetime: "3:00 PM",
                details: "Sponge bath"
            },
            {
                datetime: "6/21",
                details: "Blood work"
            }
        ]

        //patient profile notes
        $scope.patientNotes = [
            {
              title:  "Favorite Food:",
              text: "French Fries"
            },
            {
              title: "Profession",
              text: "Commercial Pilot"
            },
            {
              title: "Hobby",
              text: "Woodworking"
            }
        ]

        //emergency contacts
        $scope.emergencyContacts = [
            {
              name: "Sunnof Carlu",
              relation: "son",
              phone: "585.555.5555",
              email: "son-of-carlu@gmail.com",
              powerOfAttorney: "yes"
            },
            {
              name: "Dotter O. Carlu",
              relation: "daughter",
              phone: "207.555.5555",
              email: "daughter-of-carlu@gmail.com",
              powerOfAttorney: "no"
            }
        ]
    });
