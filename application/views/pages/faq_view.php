<!DOCTYPE html>
<html lang="en"  ng-app="myApp" ng-controller="myCtrl">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Paid - Customer Loyalty Dashboard for restaurants & retailers</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <?php require_once('templates/pages_nav.php');?>
  <div class="container">
    <div class="section">
      <!--   Icon Section   -->

      <div class="col s12 m12 center">
        <h4>FREQUENTLY ASKED QUESTIONS</h4>
      </div>
    </div>
    <div class="row">


      <div class="col s12 m6">
        <h4 class="orange-text">Customers</h4>

        <ul class="collapsible" data-collapsible="accordion">
          <li>
            <div class="collapsible-header active orange-text">1. How much does it cost to join paid?</div>
            <div class="collapsible-body"><p>Plaid does not impose any changes for you to join.</p></div>
          </li>

          <li>
            <div class="collapsible-header orange-text">2. How many points are redeemable</div>
            <div class="collapsible-body"><p>You must have at least 50 points and have been on paid for at least 1 month.</p></div>
          </li>
          <li>
            <div class="collapsible-header orange-text">3. How much do I spend to earn 1 point</div>
            <div class="collapsible-body"><p>You earn 1 point for every KES 100 spent. You will also be allowed to accumulate fractions of a point for each shilling above KES 100.</p></div>
          </li>
          <li>
            <div class="collapsible-header orange-text">4. Can I sum up points from multiple merchants</div>
            <div class="collapsible-body"><p>Yes. You may however only redeem the accumulated points for options provided by paid only and not at other merchants </p></div>
          </li>
          <li>
            <div class="collapsible-header orange-text">How do I get PAID™?</div>
            <div class="collapsible-body"><p>Visit any participating PAID™ merchant store and pay via Lipa Na Mpesa. You will receive a text with directions to subscribe to the service.</p></div>
          </li>
          <li>
            <div class="collapsible-header orange-text">How much does it cost to join PAID™?</div>
            <div class="collapsible-body"><p>Paid™ does not impose any changes for you to join.</p></div>
          </li>
          <li>
            <div class="collapsible-header orange-text">How can I identify a PAID™ merchant?</div>
            <div class="collapsible-body"><p>PAID™ merchants have PAID™ branded stickers at their premises or online presence.</p></div>
          </li>
          <li>
            <div class="collapsible-header orange-text">How do I accumulate points?</div>
            <div class="collapsible-body"><p>Points are accumulated every time you make a payment via LNM at participating PAID™ merchant store.</p></div>
          </li>
          <li>
            <div class="collapsible-header orange-text">How much do I spend to earn 1 point?</div>
            <div class="collapsible-body"><p>You earn 1 point for every KES 100 spent. You will also be allowed to accumulate fractions of a point for each shilling above KES 100.</p></div>
          </li>
          <li>
            <div class="collapsible-header orange-text">Can I sum up points from multiple merchants?</div>
            <div class="collapsible-body"><p>Yes. You may however only redeem the accumulated points for options provided by PAID™ only and not at other merchants</p></div>
          </li>
          <li>
            <div class="collapsible-header orange-text">How many points are redeemable?</div>
            <div class="collapsible-body"><p>You must have at least 50 points and have been on PAID™ for at least 1 month.</p></div>
          </li>
          <li>
            <div class="collapsible-header orange-text">What do I redeem the point for?</div>
            <div class="collapsible-body"><p>It’s solely upon the merchant to decide what goods/services are up on offer at redemption.</p></div>
          </li>
          <li>
            <div class="collapsible-header orange-text">How do I check how many point I’ve accumulated?</div>
            <div class="collapsible-body"><p>To check balance send “BALANCE” to 20220 to receive the cumulative points acquired at PAID™ merchants.</p></div>
          </li>
          <li>
            <div class="collapsible-header orange-text">How do I check balance at a specific merchant?</div>
            <div class="collapsible-body"><p>To check specific PAID™ merchant balance send “BALANCE” “[Till Number]” to 20220.</p></div>
          </li>
          <li>
            <div class="collapsible-header orange-text">How do I stop the service?</div>
            <div class="collapsible-body"><p>To stop the service send “UNSUBSCRIBE” to 20220. To stop the service at a specific PAID™ merchant, send “UNSUBSCRIBE” “[Till Number]” to 20220.</p></div>
          </li>
          <li>
            <div class="collapsible-header orange-text">Do I get charged to query balance and unsubscribe?</div>
            <div class="collapsible-body"><p>Yes. A charge of Ksh. 10 per SMS will be charged.</p></div>
          </li>
          <li>
            <div class="collapsible-header orange-text">Will I be receiving chain SMS’s?</div>
            <div class="collapsible-body"><p> The SMS’s that you receive will be from your own initiated query (Subscription, balance or unsubscription). Also any payment made to a merchant will prompt an SMS notifying proof of payment and points accumulated.</p></div>
          </li>
        </ul>
      </div>
      <div class="col s12 m6">
        <h4 class="blue-text">Merchants</h4>

        <ul class="collapsible" data-collapsible="accordion">
          <li>
            <div class="collapsible-header active blue-text">1. Must I have an <span class="green-text">MPESA</span> till number to be able to be on Paid &trade;</div>
            <div class="collapsible-body"><p>Yes. We require that you have an <span class="green-text">MPESA</span> till for you to be eligible for our service. We are able to assist you to set up </p></div>
          </li>
          <li>
            <div class="collapsible-header blue-text">2. I have many tills, Can I use them all together on paid?</div>
            <div class="collapsible-body"><p>Yes, If you have more than one operational tills, They are linked to your business on the dashboard.</p></div>
          </li>
          <li>
            <div class="collapsible-header blue-text">3. I don't use <span class="green-text">MPESA</span>. How can I benefit from this?</div>
            <div class="collapsible-body"><p>Please join <span class="green-text">MPESA</span> and come out of that denial stage. :)</p></div>
          </li>
          <li>
            <div class="collapsible-header blue-text">4. What value Does paid add to my business?</div>
            <div class="collapsible-body"><p>We enable you to KYC<span class="green-text">MPESA</span> and come out of that denial stage. <a href="#sda"> Learn more..</a></p></div>
          </li>

          <li>
            <div class="collapsible-header blue-text">What businesses are eligible to participate?</div>
            <div class="collapsible-body"><p>Any business of any nature that offers goods/services to customers is eligible to sign up to this service.</div>
          </li>
          <li>
            <div class="collapsible-header blue-text">Must I have an <span class="green-text">MPESA</span> till number to be able to be on Paid™™?</div>
            <div class="collapsible-body"><p>Yes. We require that you have an <span class="green-text">MPESA</span> till for you to be eligible for our service. We are able to assist you to set up.</div>
          </li>
          <li>
            <div class="collapsible-header blue-text">I have many tills. Can I use them all together on paid™?</div>
            <div class="collapsible-body"><p>Yes, if you have more than one operational tills, They are linked to your business on the dashboard.</div>
          </li>
          <li>
            <div class="collapsible-header blue-text">What value does paid™ add to my business?</div>
            <div class="collapsible-body"><p>Your business will be on our listing that adds promotion for your business. In addition you will have the ability to identify loyal customers through monitoring of repeat sales. See our starter pack.</div>
          </li>
          <li>
            <div class="collapsible-header blue-text">How do I sign up?</div>
            <div class="collapsible-body"><p>To sign up, visit www.paid.co.ke and click on the ‘Join’ link at the top right corner of the page.</div>
          </li>
          <li>
            <div class="collapsible-header blue-text">How do I check my stats?</div>
            <div class="collapsible-body"><p>Once signed up, you will set a username and password which you will use to log in. After logging in, you will have access to that dashboard with all the till performance stats.</div>
          </li>
          <li>
            <div class="collapsible-header blue-text">How do I acquire points to award my customers?</div>
            <div class="collapsible-body"><p>We will sell points to merchants to reward customers who’ve paid™ for a service via LNM.</div>
          </li>
          <li>
            <div class="collapsible-header blue-text">How do my customers get points?</div>
            <div class="collapsible-body"><p>We have an automated system where once a payment has been made, points are credited to a customer’s loyalty wallet on their phone. Customer earns 1 point for every KES 100 spent. They are allowed to accumulate fractions of a point for each shilling above KES 100.</div>
          </li>
          <li>
            <div class="collapsible-header blue-text">How do I stop this service?</div>
            <div class="collapsible-body"><p>You can contact us on any platform (email, sms, phone, whatsapp) for termination.</div>
          </li>
        </ul>      
      </div>
    </div>
    <div class="row">
      <div class="col l12 s12 m12 center">
        <p class="flow-text">Build Customer Relationships With The Leading Business Loyalty Program</p>
        <a href="<?php echo base_url(); ?>signup" class="btn blue">Become a Paid Merchant</a>
      </div>

    </div>

  </div>
  <?php require_once('templates/pages_footer.php');?>
  <?php require_once('templates/pages_bottom.php');?>