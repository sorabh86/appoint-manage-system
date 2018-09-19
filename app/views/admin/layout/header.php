<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= ASSET_ROOT ?>/img/favicon.png">

    <title>Hospital</title>
    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
    <nav class="navbar navbar-inverse" style="padding:20px 0;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?= ASSET_ROOT ?>/">
          <img height="45" src="<?= ASSET_ROOT ?>/img/logo-white.png" alt="Hospital Logo">
          </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <?php if(isset($_SESSION['admin'])): ?>
                <li><a href="<?= ASSET_ROOT ?>/admin/dashboard">DASHBOARD</a></li>
                <!-- <li><a href="<?= ASSET_ROOT ?>/admin/listpatient">MANAGE PATIENTS</a></li> -->
                <!-- <li><a href="<?= ASSET_ROOT ?>/admin/listdoctor">MANAGE DOCTORS</a></li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MANAGE PATIENTS <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= ASSET_ROOT ?>/admin/listpatient">Patient List</a></li>
                        <li><a href="<?= ASSET_ROOT ?>/admin/patientappointment">Appointments</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MANAGE DOCTORS <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= ASSET_ROOT ?>/admin/listdoctor">Doctor List</a></li>
                        <li><a href="<?= ASSET_ROOT ?>/admin/expertisedoctor">Doctor Expertise</a></li>
                        <li><a href="<?= ASSET_ROOT ?>/admin/listtimeslot">Doctor Timeslots</a></li>
                    </ul>
                </li>
                <li><a href="<?= ASSET_ROOT ?>/admin/logout">LOGOUT</a></li>
            <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    