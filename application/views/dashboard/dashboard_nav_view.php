<!DOCTYPE html>
<html lang="en"  ng-app="myApp" ng-controller="myCtrl">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Paid - <?php echo $pagetitle; ?> </title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url(); ?>assets/css/tablecloth.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="<?php echo base_url(); ?>assets/css/selectize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/ngProgress.css">
  <meta charset="UTF-8">
  <meta name="description" content=" ">
  <meta name="keywords" content=" ">
  <meta name="author" content="">

  <link rel="icon" href="<?php echo base_url(); ?>assets/img/ja-logo.png" sizes="16x16" type="image/png">   
  </head>
<body>
<div id="loader" style="display:none;">
  <img src="<?php echo base_url(); ?>assets/img/paid-loader.gif" class="ajax-loader"/>
</div>
<div class="no-container">
  <nav>
    <div class="nav-wrapper blue-grey darken-1">
      <a href="#!" class="brand-logo">
        <img src="<?php echo base_url(); ?>assets/img/ja-logo.png" style="height: 60px; margin-left; 15px;padding: 4px;">
      </a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
        <li><a href="<?php echo base_url(); ?>dashboard/members">Members</a></li>
        <li><a href="<?php echo base_url(); ?>dashboard/mentorship">Mentorship</a></li>
        <li><a href="<?php echo base_url(); ?>dashboard/loans">Loans</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="profile-dropdown"><?php echo $userdata['username']; ?> <i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>


      <ul class="side-nav" id="mobile-demo">
        <li><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
        <li><a href="<?php echo base_url(); ?>dashboard/members">Members</a></li>
        <li><a href="<?php echo base_url(); ?>dashboard/mentorship">Mentorship</a></li>
        <li><a href="<?php echo base_url(); ?>dashboard/loans">Loans</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="profile-dropdown"><?php echo $userdata['username']; ?> <i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>

      <ul id="profile-dropdown" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
      </ul>

    </div>
  </nav>