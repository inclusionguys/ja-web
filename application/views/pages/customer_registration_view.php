<?php $this->load->view('pages/templates/pages_header');?>
<?php require_once('templates/pages_nav.php');?>
<div class="container">
  <div class="section">
    <!--   Icon Section   -->
    <div class="col s12 m12">
      <div class="row">
        <div class="col s12">
          <a href="<?php echo base_url();?>merchants">Merchants</a> > 
          <a href="<?php echo base_url();?>merchants/<?php echo $merchantdetails->location_slug;?>"><?php echo $merchantdetails->location_slug;?></a> > 
          <a href="<?php echo base_url("merchants/").'/'.$merchantdetails->location_slug.'/'.str_replace(" ","-", preg_replace("/[^[:alnum:][:space:]]/u", '', $merchantdetails->merchant_businessname)).'-'. $merchantdetails->merchant_businessno.'';  ?>">
          <?php echo $merchantdetails->merchant_businessname;?> ( <?php echo $merchantdetails->merchant_businessno;?>)
          </a>

        </div>
      </div>
    </div>
  </div> 
  <div class="row">
    <div class="col s12 m12">
      <div class="card">
        <div class="card-content">
          <span class="card-title blue-text">
            <?php echo "Subscribe to " . $merchantdetails->merchant_businessname . "'s Loyalty program ";?></span>
            <form class="col s12" ng-submit="CustomerPost()">
              <div class="row">
              <input name="merchant_till" ng-model="merchant_till" id="merchant_till" style="display: none">
                <div class="input-field col s12 m12">
                  <small><span class="text-red">* required </span></small>
                  <input ng-model="customer_phone" placeholder="Phone Number" id="customerphone" type="number" class="validate" value="+254" required>
                  <label for="phone"> Phone Number</label>
                </div>
                <div class="input-field col s12 m6">
                  <small><span class="text-red">* required </span></small>
                  <input ng-model="customer_first_name" placeholder="First Name" id="first_name" type="text" class="validate" required>
                  <label for="first_name"> First Name</label>
                </div>
                <div class="input-field col s12 m6">
                  <small><span class="text-red">* required </span></small>
                  <input ng-model="customer_last_name" id="last_name" type="text" class="validate" required>
                  <label for="last_name"> Last Name</label>
                </div>
                <div class="input-field col s12 m8">
                  <input ng-model="customer_email" id="email" type="email" class="validate">
                  <label for="email">Email</label>
                  <small>* Discount vouchers & Offers will be sent to this email.</small>
                </div>

                <div class="input-field col s4">
                  <input ng-model="customer_birthday" id="birthday" type="date" class="datepicker">
                  <label for="birthday">Birthday</label>
                  <small>Birthday</small>
                </div>
                <div class="input-field col s6 m6">
                  <input ng-model="customer_location" id="location" type="text" class="validate">
                  <label for="location">Location</label>
                </div>
                <div class="input-field col s6 m6">
                  <input ng-model="customer_town" id="town" type="text" class="validate">
                  <label for="town">Town</label>
                </div>
              </div>  
              <button href="javascript:;;" type="submit" id="location-submit" class="btn btn-large waves-effect waves-light orange" style="margin-right: 10px; width:100%;">Join</button>

            </form>
            <br />
            <br />
            <p><?php echo $merchantdetails->merchant_businessdesc;?></p>

          </div>
          <div class="card-action">
            <a href="javascript:;;" class="green-text"><b>#<?php echo $merchantdetails->merchant_businessno; ?></b></a>
            <a href="javascript:;;" class="">Open hours: <?php echo date('h:i a',strtotime($merchantdetails->merchant_openhour)) .' - ' .date('h:i a',strtotime($merchantdetails->merchant_closehour)); ?> </a>
                  <a class="cyan-text twitter-share-button"  href="https://twitter.com/intent/tweet?text=Hello%20world"><i class="material-icons">trending_up</i></a>
                  <i style="width: 42px; margin-left:5px;" class="orange-text material-icons right tooltipped"  data-position="top" data-delay="50" data-tooltip="Paid Loyalty Available Here">redeem</i>
                  <i style="width: 42px; margin-left:5px;" class="cyan-text material-icons right tooltipped"  data-position="top" data-delay="50" data-tooltip="Orders">textsms</i>
                  <i style="width: 42px; margin-left:5px;" class="grey-text material-icons right tooltipped"  data-position="top" data-delay="50" data-tooltip="Reviews">thumbs_up_down</i>
                </div> 
              </div>
            </div>

          </div>
        </div>
        <?php require_once('templates/pages_footer.php');?>
        <?php require_once('templates/pages_bottom.php');?>
        <script type="text/javascript">
          $(function () {

            $('#merchant_till').val(<?php echo $merchantdetails->merchant_businessno;?>);
            $('#merchant_till').trigger('input');
            

          });
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 100 // Creates a dropdown of 15 years to control year

  });
        </script>

