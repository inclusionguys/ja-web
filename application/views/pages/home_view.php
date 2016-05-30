<?php require_once 'templates/pages_header.php';?>
<body>
  <div class="section no-pad-bot home-banner" id="index-banner" ng-style="{'background-image':'url({{pageslide.img}})'}">
    <?php require_once('templates/pages_nav.php');?>
    <div class="container">
      <div class="row">
        <div class="home-largetext white-text col s10   m5 push-m7 grid-example light-green accent-4 white-text">
          <h2 class="header" style="font-family: calibri;">{{pageslide.titletext}}</h2>
          <h4 class="header" style="font-family: calibri;">{{pageslide.text}}</h4>
          <div class="row center">
            <p class="flow-text">
              <a href="<?php echo base_url(); ?>{{pageslide.link}}" id="" ng-click="" class="btn right waves-effect waves-light orange" style="margin-right: 10px;">{{pageslide.calltoaction}}</a>
              <!-- <a href="<?php echo base_url(); ?>;;" id="" ng-click="" class="btn-large  col s5 m5 waves-effect waves-light green">For customers</a> -->
            </p>
          </div>

          <div class="row hiddendiv">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12 m6">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="icon_prefix" type="text" class="validate">
                  <label for="icon_prefix" class="">Name</label>
                </div>
                <div class="input-field col s12 m6">
                  <i class="material-icons prefix">phone</i>
                  <input id="icon_telephone" type="tel" class="validate" value="+254">
                  <label for="icon_telephone">Telephone</label>
                </div>   
              </div>
            </form>
            <p class="flow-text">
              <a href="<?php echo base_url(); ?>;;" id="" ng-click="" class="btn-large right waves-effect waves-light orange" style="margin-right: 10px;">Get Started</a>
            </p>
          </div> 
        </div>
        <form ng-submit="SearchMerchantLocation()">
          <!-- <form action="<?php echo base_url(); ?>merchants" method="get"> -->
          <div class="input-field col s12 m10">
            <i class="material-icons prefix">account_circle</i>
            <select id="select-location" ng-model="location" name="location" placeholder="Select a neighbourhood..." tabindex="-1" class="selectized" style="display: none;">
              <option ng-model="searchmerchantlocation" value="" selected="selected">Select Neighbourhood</option></select>
              <label for="icon_prefix">Name</label>
            </div>
            <div class="input-field col s12 m2 center">
              <!-- <a href="javascript:;;"  ng-click="show = !show" id="location-submit"  class="btn btn-large waves-effect waves-light orange" style="margin-right: 10px; width:100%;">join </a> -->
              <button href="javascript:;;" type="submit" id="location-submit" class="btn btn-large waves-effect waves-light orange" style="margin-right: 10px; width:100%;">Find</button>
            </div>
          </form>          
        </div>
      </div>
    </div>
  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12 center">
          <h4>Why Paid?</h4>
          <h5 class="orange-text">The most versatile & affordable customer loyalty program</h5>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Business Listing</h5>

            <p class="light">
              <!-- Customer Loyalty is key for your business. Customers who bring customers are your best marketing strategy. -->
              
              <!-- Access with our pool of 40k+ customers  -->
              <p class="light">To be reached is essential in business. Paid allows you to reach and be reached by your customers on mobile phones
                tablets and computers.Get started for FREE and Access a greater audience for your business on paid listings today. 
              </p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text"><i class="material-icons">repeat</i></h2>
              <h5 class="center">Promotions & Offers</h5>
              <p class="light">
                Each customer is important. Paid allows you to engage with your customers over sms and on our dashboard in order to find out your customer needs. Sign up to start accepting orders and bookings from your customers today.

              </p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text"><i class="material-icons">trending_up</i></h2>
              <h5 class="center">Customer Loyalty</h5>
              <p class="light">
                The happier your customer is the more you are able to realize growth in your business. Create promotions, discounts and sales on today and grow your business by offering more value to your customer.
                <!-- With Paid KYC (Know Your Customer), You will always tell the value of each customer which enables you to understand and offer more value to your loyal customers hence retain customers. -->
                <br />
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php require_once('templates/pages_footer.php');?>
      <?php require_once('templates/pages_bottom.php');?>
