<!DOCTYPE html>
<html lang="en"  ng-app="myApp" ng-controller="myCtrl">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Paid - Customer Loyalty Dashboard for restaurants & retailers</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url(); ?>assets/css/tablecloth.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="<?php echo base_url(); ?>assets/css/selectize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url(); ?>assets/css/pricing-table.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/ngProgress.css">
  </head>
<div id="loader" style="display:none;">
    <img src="<?php echo base_url(); ?>assets/img/paid-loader.gif" class="ajax-loader"/>
</div>

<body>
    <?php require_once('templates/pages_nav.php');?>
<div class="container">
  <div class="section">
    <!--   Icon Section   -->
    <div class="col s12 m12 center">
      <h4>Get Started today</h4>
      <h5 class="">
      Join the loyalty program that <a href="#merchand"><u>works for you</u></a> and your customers. <br />
      First Month FREE for all plans. 
      </h5>
    </div>
  </div>
<div class="content">
  <div class="row">
    <!-- Pricing -->
    <div class="col m4">
      <div class="pricing hover-effect">
        <div class="pricing-head">
          <h3>Listing<span>
          Starter Package </span>
          </h3>
          <h4><i>KES </i>0<i>.00</i>
          <span> </span>
          </h4>
        </div>
        <ul class="pricing-content list-unstyled">
          <li> + Support 24/7 </li>
          <li> + Paid Merchant Listing </li>
          <li> + Paid Merchant Business Page </li>
          <li> + Paid-MPESA Customer Analytics UI </li>
        </ul>
        <div class="pricing-footer">
          <p>This plan is for all merchants who wish to enjoy our publicity & customer analytics framework
          and but are not yet ready to invest in a promotion.</p>
          <a href="<?php echo base_url(); ?>signup?plan=listing" class="btn yellow-crusta">
          Sign Up
          </a>
        </div>
      </div>
    </div>
      <div class="col m4">
      <div class="pricing pricing-active hover-effect">
        <div class="pricing-head pricing-head-active">
          <h3>Engagement <span>
          Customer Engagement plan(Most Popular)</span>
          </h3>
          <h4><i>KES </i>300<i>00</i>
          <span>
          For 100 Engagements </span>
          </h4>
        </div>
        <ul class="pricing-content list-unstyled">
          <li> + Starter Pack benefits +</li>
          <li> + Online & SMS Customer Engagements</li>
          <li> + Customer Orders</li>
          <li> + Support 24/7 </li>
          <li> + Customer Checkins</li>
          <li> + Paid Priority Listing</li>
          <li> + Sale Promotions. </li>
        </ul>
        <div class="pricing-footer">
          <p>
          This plan esures you get value for your investment by allowing you to engage with customer who make orders
          to your business
          </p>
          <a href="<?php echo base_url(); ?>signup?plan=engagements" class="btn yellow-crusta">
          Sign Up
          </a>
        </div>
      </div>
    </div>
    <div class="col m4">
      <div class="pricing hover-effect">
        <div class="pricing-head">
          <h3>Rewards<span>
          Reward customers for purchases </span>
          </h3>
          <h4><i>KES </i>1000<i>.00</i>
          <span>
          Per Month </span>
          </h4>
        </div>
        <ul class="pricing-content list-unstyled">
          <li> + Paid Customer Loyalty Program</li>
          <li> + Support 24/7 </li>
          <li> + 2 Monthly promotions</li>
          <li> + Customer Checkins</li>
          <li> + Loyalty Support</li>
          <li> + Merchant Customer Leaderboard</li>
        </ul>
        <div class="pricing-footer">
          <p>
          This plan allows you to reward your customers and encourage customers to buy more from you to earn gift points.
          </p>
          <a href="<?php echo base_url(); ?>signup?plan=rewards" class="btn yellow-crusta">
          Sign Up
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    <?php require_once('templates/pages_footer.php');?> 
    <?php require_once('templates/pages_bottom.php');?> 