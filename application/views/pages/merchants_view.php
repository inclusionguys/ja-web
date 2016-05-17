<?php $this->load->view('pages/templates/pages_header');?>
<body>
  <?php require_once('templates/pages_nav.php');?>
  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="col s12 m12 center">
      <form ng-submit="SearchMerchantLocation()">
      <!-- <form action="<?php echo base_url(); ?>merchants" method="get"> -->
      <div class="row">
              <div class="input-field col s12 m10">
        <i class="material-icons prefix">account_circle</i>
        <select id="select-location" ng-model="location" name="location" placeholder="Select a neighbourhood..." tabindex="-1" class="selectized" style="display: none;">
          <option ng-model="searchmerchantlocation" value="" selected="selected">Select Neighbourhood</option></select>
          <label for="icon_prefix">Location</label>
        </div>
        <div class="input-field col s12 m2 center">
          <button href="javascript:;;" type="submit" id="location-submit" class="btn btn-large waves-effect waves-light orange" style="margin-right: 10px; width:100%;">Find</button>
        </div>
      </div>
      </form>
      </div>
    </div>
    <div class="row">
    <div class="col s12">

    </div>
    </div>
    <div class="row">

<!--
     $('.card').parent('').addClass('m12'); $('.card').parent('').removeClass('m3');
     $('.card').parent('').addClass('m3'); $('.card').parent('').removeClass('m12');
 -->
      <div class="col s12 m12">
        <div class="row">
        <?php foreach ($merchants as $merchant): ?>
          
          <div class="col s12 m12">
            <div class="card">
              <div class="card-content">
              <a href="<?php echo base_url("merchants/").'/'.$merchant->location_slug.'/'.str_replace(" ","-", preg_replace("/[^[:alnum:][:space:]]/u", '', $merchant->merchant_businessname)).'-'. $merchant->merchant_businessno;  ?>">
  <span class="card-title orange-text"><b> <?php echo $merchant->merchant_businessname .',' .$merchant->merchant_location?> </b></span>
  </a>
              </div>
              <div class="card-image">

              <a href="<?php echo base_url("merchants/").'/'.$merchant->location_slug.'/'.str_replace(" ","-", preg_replace("/[^[:alnum:][:space:]]/u", '', $merchant->merchant_businessname)).'-'. $merchant->merchant_businessno;  ?>">

                <img width="100%" src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $merchant->merchant_latitude.",".$merchant->merchant_longitude;  ?>&zoom=15&scale=2&size=600x150&maptype=roadmap&format=png&visual_refresh=true&markers=size:mid%7Ccolor:0xff0000%7Clabel:1%7C<?php echo $merchant->merchant_latitude.",".$merchant->merchant_longitude;  ?>">

              </a>

              </div>
              <div class="card-content">
                <p><?php echo $merchant->merchant_businessdesc;  ?>..</p>
              </div>
              <div class="card-action">
                <a href="javascript:;;" class="green-text"><b>#<?php echo $merchant->merchant_businessno;  ?></b></a>
                <a href="javascript:;;" class="">Open hours: <?php echo date('h:i a',strtotime($merchant->merchant_openhour)) .' - ' .date('h:i a',strtotime($merchant->merchant_closehour)); ?> </a>

                <!-- <a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">Hover me!</a> -->
                <img src="<?php echo base_url(); ?>assets/img/paid-logo.png" style="width: 42px;" class="right tooltipped"  data-position="top" data-delay="50" data-tooltip="Paid Loyalty Available Here">
              </div>
            </div>
          </div>
        <?php endforeach ?>


        </div>
        </div>  
    </div>
  </div>
      <?php require_once('templates/pages_footer.php');?>
      <?php require_once('templates/pages_bottom.php');?>
