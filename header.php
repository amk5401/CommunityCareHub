<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/datepicker.css" rel="stylesheet" />
    <link href="css/customnav.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.css" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.print.css" rel="stylesheet" media="print"/>

</head>
<body ng-app="communityCareHubApp" ng-controller="communityCareHubController">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Community Care Hub</a>
            </div>
            <ul class="nav navbar-nav">
                <li id="caregiverHomeLink"><a href="caregiverHome.php">Caregiver Home</a></li>
                <li id="patientProfileLink"><a href="patientProfile.php">Patient Profile</a></li>
                <li id="lovedOnePortalLink"><a href="lovedOnePortal.php">Loved One Portal</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-help">
                <div class="help-tip" id="helpLink">
                    <p id="helptext">
                        Community Care Hub is a web app to help caregivers, doctors, and loved ones stay up to date with elderly individual's care.
                        <br /><br />
                        Try logging in as a Caregiver or a Loved One!
                        <br /><br />
                        Username: Caregiver<br />
                        Password: abc123
                        <br /><br />
                        Username: Loved One<br />
                        Password: abc123
                    </p>
                </div>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li id="logoutButton"><a href="/">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div id="content">
