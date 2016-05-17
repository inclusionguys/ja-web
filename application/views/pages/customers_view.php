<?php $this->load->view('pages/templates/pages_header.php');?>
<?php require_once('templates/pages_nav.php');?>
  <div class="row">

    <div class="col s12">
      <div class="container">
        <div class="section">
          <!--   Icon Section   -->

          <div class="col s12 m12 center">
          <p class="flow-text">A Free and universal business promotions program you can access and enjoy across thousands of <span class="green-text">LIPA NA M-PESA</span> outlets</p>
          </div>
        </div>
        <div class="row">

          <div class="col s12 m3">

            <div class="card about-card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?php echo base_url();?>assets/img/iphone-subscribe.png">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">1. Subscribe<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Subscribe </a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Subscribe <i class="material-icons right">close</i></span>
                <p>SMS 

                  <br />"Subscribe  till-number" to <span class="code">22002</span>.
                  <i class="material-icons left">message</i>
                  <blockquote>
                    "Subscribe 175798" 
                  </blockquote>
                </p>
              </div>
            </div>
          </div>

          <div class="col s12 m3">
            <div class="card about-card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?php echo base_url();?>assets/img/inclusion-transaction-alert.png">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">2. Earn<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Earn </a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Earn <i class="material-icons right">close</i></span>
                <p>EARN points everytime you pay with LIPA NA MPESA at a participating store.</p>
              </div>
            </div>
          </div> 

          <div class="col s12 m3">
           <div class="card about-card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="<?php echo base_url();?>assets/img/iphone-balance.png">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">3. Balance<i class="material-icons right">more_vert</i></span>
              <p><a href="#">Balance </a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Balance <i class="material-icons right">close</i></span>
              <p>Request for your balance at a merchant's till.
                <br />"Subscribe  tillnumber" to <span class="code">22002</span>.

                <i class="material-icons left">message</i>
                <blockquote>
                  "balance 175798" 
                </blockquote>
              </p>
            </div>
          </div>

        </div>
        <div class="col s12 m3">
          <div class="card about-card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="<?php echo base_url();?>assets/img/iphone-balance.png">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">4. Redeem<i class="material-icons right">more_vert</i></span>
              <p><a href="#">Redeem </a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Redeem <i class="material-icons right">close</i></span>
              <p>Redeem your points for merchandise/services at a merchants outlet.
                <br />"Redeem point  tillnumber" to <span class="code">22002</span>.
                <i class="material-icons left">message</i>
                <blockquote>
                  "Redeem 10 175798" 
                </blockquote>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        <p class="flow-text center">
          Find a merchants near you
        </p>

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

  </div>
  <?php require_once('templates/pages_footer.php');?>
<?php require_once('templates/pages_footer.php');?>
