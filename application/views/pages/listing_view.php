<?php $this->load->view('pages/templates/pages_header.php');?>
<?php require_once('templates/pages_nav.php');?>
<div class="row">

  <div class="col s12">
    <div class="container">
      <div class="section">
        <div class="col s12 m12 center">
          <p class="flow-text">Get Found online. <span class="orange-text">Paid </span>enables you to build an engaged following for your business.</p>
        </div>
      </div>
      <div class="row">
        <div class="col s12  m3 center">
          <img class="center" src="<?php echo base_url();?>assets/img/merchant-listing-profile.png" style="max-width: 170px;">
        </div>
        <div class="col s12 m9">
          <h5>Grow your online reach</h5>
          <p class="flow-text">
            Reach and allow more customers to reach you. <br />
            Create a unique business description & a photo of your business. You have the opportunity to reach thousands of potential customers instantly.
            <br />
            Access a greater audience for your business on paid listings today.
          </p>
          <a href="<?php echo base_url(); ?>signup" class="btn blue">Get started</a>
        </div>
      </div>
      <div class="row">
      <div class="col s12  m3 center right">
        <img src="<?php echo base_url();?>assets/img/android-listing.png" style="max-width: 170px;">
      </div> 
      <div class="col s12 m9">
       <h5>Find amazing rewards and offers near you.</h5>
       <p class="flow-text">
         Paid allows you to easily locate have an easy to find a <a href="<?php echo base_url();?>merchants">suitable merchant</a> at any of our locations from your mobile or pc.
         <br />

         Pick from a wide variety of categories & locations that suits you best. 
         <br />
         Badges on the merchant page enable you to know what offers & rewards a merchant is offering.
         Lookout for the rewards badge.
         <i style="width: 42px; margin-left:5px;" class="orange-text material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="Paid Loyalty Available Here">redeem</i>
       </p>

       <form ng-submit="SearchMerchantLocation()">
        <!-- <form action="<?php echo base_url(); ?>merchants" method="get"> -->
        <div class="input-field col s12 m10">
          <i class="material-icons prefix">business</i>
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
</div>

</div>
<?php require_once('templates/pages_footer.php');?>
<?php require_once('templates/pages_bottom.php');?>