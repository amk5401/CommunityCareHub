<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/datepicker.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.css" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.print.css" rel="stylesheet" media="print"/>

</head>
<body ng-app="communityCareHubApp" ng-controller="communityCareHubController">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Community Care Hub</a>
            </div>
            <ul class="nav navbar-nav">
                <li id="caregiverHomeLink"><a href="caregiverHome.php">Caregiver Home</a></li>
                <li id="patientProfileLink"><a href="patientProfile.php">Patient Profile</a></li>
                <li id="lovedOnePortalLink"><a href="lovedOnePortal.php">Loved One Portal</a></li>
            </ul>
            <button type="button" id="logoutButton" class="btn btn-sm">Logout</button>
        </div>
    </nav>
