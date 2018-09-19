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

    <!-- Custom styles for this template -->
    <link href="<?= ASSET_ROOT ?>/css/style.css" rel="stylesheet">
    <script>
      var ASSET_ROOT = "<?= ASSET_ROOT ?>";
    </script>
  </head>

  <body>
    <nav class="navbar bg-red navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="<?= ASSET_ROOT ?>/img/logo-white.png" alt="Hospital Logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <li><a href="<?= ASSET_ROOT ?>/">HOME</a></li>
            <li><a href="<?= ASSET_ROOT ?>/about">ABOUT</a></li>
            <li><a href="<?= ASSET_ROOT ?>/contact">CONTACT</a></li>
            <!-- <li><a href="<?= ASSET_ROOT ?>/admin">ADMIN LOGIN</a></li> -->
            <?php if(!isset($_SESSION['user'])): ?>
              <!-- <li><a href="<?= ASSET_ROOT ?>/patient">LOGIN</a></li> -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LOGIN <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?= ASSET_ROOT ?>/patient">PATIENT</a></li>
                  <li><a href="<?= ASSET_ROOT ?>/admin">ADMIN</a></li>
                </ul>
              </li>
            <?php else: ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= isset($_SESSION['user']->name)?$_SESSION['user']->name:'Guest' ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?= ASSET_ROOT ?>/patient/profile">Profile</a></li>
                  <li><a href="<?= ASSET_ROOT ?>/patient/appointment">Appointment</a></li>
                  <li><a href="<?= ASSET_ROOT ?>/patient/logout">Logout</a></li>
                </ul>
              </li>
            <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <div class="flash-msg" style="max-width:250px;position:fixed;right:10px;top:10px;z-index:9999;">
      <!-- alerts -->
    </div>
    