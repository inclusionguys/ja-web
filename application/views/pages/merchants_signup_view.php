<?php $this->load->view('pages/templates/pages_header');?>
<body>
  <?php require_once('templates/pages_nav.php');?>
  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="col s12 m12 center">
        <h4>Merchant Signup</h4>
        <!-- <h5 class="">Join the loyalty program that <a href="#merchand"><u>works for you</u></a> and your customers.</h5> -->
      </div>
    </div>
    <div class="row">
      <div class="col s12 m12">
        <div class="container">
          <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
              <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary blue btn-circle">1</a>
                <p>Business Details</p>
              </div>
              <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default blue btn-circle" disabled="disabled">2</a>
                <p>Contact Person</p>
              </div>
              <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default blue btn-circle" disabled="disabled">3</a>
                <p>Login Details</p>
              </div>
            </div>
          </div>
          <form ng-submit="SignupPost()">
            <div class="row setup-content" id="step-1">
              <div class="input-field col m12 s12">
                <i class="material-icons blue-text prefix">store</i>
                <input  ng-model="businessname" id="icon_prefix" placeholder="e.g. Mama Mike Salon" type="text" class="validate">
                <label for="icon_prefix">Business Name</label>
              </div>

              <div class="input-field col m12 s12">
                <!-- <i class="material-icons blue-text prefix">store</i> -->
                <input type="checkbox" id="test5" ng-click="show = !show" />
                <label for="test5">I want the MPESA Dashboard</label>  
                <br />
                <br />

              </div>
              <div class="input-field col m6 s12" ng-show="show">
                <i class="material-icons blue-text prefix">shopping_basket</i>
                <input ng-model="businesstill" id="icon_telephone"  placeholder="e.g 999999" type="text" class="validate">
                <label for="icon_telephone">MPESA Till</label>
              </div>
              <div class="input-field col m6 s12" ng-show="show">
                <span><a class="">Don't have an MPESA Till? <br /> Get One here</a></span>
              </div>
              <div class="input-field col m12 s12">
                <i class="material-icons blue-text prefix">location_on</i>
                <input ng-model="businessmaplocation" type="text" placeholder="address" id="maplocation-address" placeholder="Enter a location" autocomplete="off">
                <input ng-model="businesslatitude" type="hidden" id="latitude" value="-1.305242437752303">
                <input ng-model="businesslongitude" type="hidden" id="longitude" value=" 36.816470703125">
                <label for="icon_prefix">Business Location</label>
              </div>
              <div class="input-field col m12 s12">
                <div id="maplocation" class="col m11 push-s1 s12" style="height:200px; margin-bottom:30px;"></div>
              </div>
              <div class="input-field col m12 s12">
                <i class="material-icons blue-text prefix">phone</i>
                <input ng-model="businessphone" id="icon_telephone" type="tel" class="validate" value="+254">
                <label for="icon_telephone">Business Telephone</label>
              </div>
              <div class="input-field col m12 s12">
                <i class="material-icons blue-text prefix">work</i>
                <input ng-model="businesspostaladdress" id="icon_telephone"  placeholder="e.g P.O Box 4354-00200" type="text" class="validate">
                <label for="icon_telephone">Postal Address</label>
              </div>

              <div class="input-field col m12 s12">
                <i class="material-icons blue-text prefix">business</i>
                <input ng-model="businesstown" id="icon_telephone"  placeholder="e.g Nairobi" type="text" class="validate">
                <label for="icon_telephone">City/Town</label>
              </div>
              <div class="input-field col m12 s12">
                <a href="#step-2" type="button" class="btn btn-default blue next-btn">Next</a>
              </div>
            </div>

            <div class="row setup-content" id="step-2">
              <div class="input-field col m12 s12">
                <i class="material-icons blue-text prefix">account_circle</i>
                <input ng-model="contactname" id="icon_prefix" placeholder="e.g. Uhuru Kenyatta" type="text" class="validate">
                <label for="icon_prefix">Full Name</label>
              </div>

              <div class="input-field col m12 s12">
                <i class="material-icons blue-text prefix">phone</i>
                <input ng-model="businesstelephone" id="icon_telephone" type="tel" class="validate" value="+254">
                <label for="icon_telephone">Personal Telephone</label>
              </div>

              <div class="input-field col m12 s12">
                <i class="material-icons blue-text prefix">email</i>
                <input ng-model="email" id="icon_telephone"  placeholder="mail@example.com" type="email" class="validate">
                <label for="icon_telephone">email</label>
              </div>    
              <a href="#step-3" type="button" class="btn next-btn blue">Next</a>

            </div>
            <div class="row setup-content" id="step-3">
             <div class="input-field col m12 s12">
              <i class="material-icons blue-text prefix">person_pin</i>
              <input ng-model="username" id="icon_prefix" placeholder="" type="text" class="validate">
              <label for="icon_prefix">username</label>
            </div>


            <div class="input-field col m12 s12">
              <i class="material-icons blue-text prefix">lock_open</i>
              <input ng-model="password" id="icon_prefix" placeholder="password" type="password" class="validate">
              <label for="icon_prefix">Password</label>
            </div>

            <div class="input-field col m12 s12">
              <i class="material-icons blue-text prefix">lock_open</i>
              <input ng-model="confirmpassword" id="icon_prefix" placeholder="password" type="password" class="validate">
              <label for="icon_prefix">Confirm Password</label>
            </div>
            <p>
              <input type="checkbox" id="tos" ng-model="tos" />
              <label for="tos">I Accept <a href="#/">Terms & Conditions</a> </label>
            </p>

            <!-- <a href="#/d" class="btn blue"> Signup</a> -->
            <button type="submit"  class="btn green white-text "> Finish</button>
            <!-- <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button> -->
          </div>
        </form>
      </div>
    </div>  

  </div>

</div>
<?php require_once('templates/pages_footer.php');?>

<!--  Scripts-->
<script src="<?php echo base_url();?>assets/js/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/angular.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ngProgress.js"></script>

<script src="<?php echo base_url();?>assets/js/materialize.js"></script>
<script src="<?php echo base_url();?>assets/js/init.js"></script>
<script src="<?php echo base_url();?>assets/js/init-select.js"></script>
<script src="<?php echo base_url();?>assets/js/selectize.js"></script>
<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
<script src="<?php echo base_url(); ?>assets/js/locationpicker.jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/wiz.js"></script>

<script>
  $(function(){
    $('#maplocation').locationpicker({
      location: {latitude: -1.298155027389642, longitude: 36.7622376974731}, 
      radius: 300,
      inputBinding: {
        latitudeInput: $('#maplocation-lat'),
        longitudeInput: $('#maplocation-lon'),
        radiusInput: $('#maplocation-radius'),
        locationNameInput: $('#maplocation-address')        
      },
      enableAutocomplete: true,
      onchanged: function(currentLocation, radius, isMarkerDropped) {
  // alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
  $('#latitude').val(currentLocation.latitude);
  $('#longitude').val(currentLocation.longitude);
  $('#businessmaplocation').val(currentLocation.locationNameInput);

  $('#latitude').trigger('input');
  $('#longitude').trigger('input');
}
});


// $('#paidplan [value=<?php echo $_GET['plan'];?>]').attr('checked', true);
// $('input:radio[name="paidplan"][value="<?php echo $_GET['plan'];?>"]').prop('checked', true);

  });
</script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/myApp.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/myCtrl.js"></script>
</body>
</html>
