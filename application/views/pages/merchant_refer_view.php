<?php $this->load->view('pages/templates/pages_header');?>
<body>
  <?php require_once('templates/pages_nav.php');?>
  <div class="container">
    <!-- <div class="section">
      <div class="col s12 m12">
        <div class="row">
          <div class="col s12">
            <a href="<?php echo base_url();?>merchants">Merchants</a> > 
            <a href="<?php echo base_url();?>merchants/<?php echo $merchantdetails->location_slug;?>"><?php echo $merchantdetails->location_slug;?></a> > 
            <?php echo $merchantdetails->merchant_businessname;?> ( <?php echo $merchantdetails->merchant_businessno;?>)
          </div>
        </div>
      </div>
    </div> --> 
    <div class="row">
      <div class="col s12 m12">
        <div class="card">
          <div class="card-content">
            <span class="card-title blue-text">
              <?php echo "Refer a friend to " . $merchantdetails->merchant_businessname . "'s Promotions & Offers ";?></span>
              <form class="col s12" ng-submit="CustomerPost()">
                Enter Your friend's name and write them a custom message.

                <div class="row">
                  <div class="input-field col s12 m6">
                    <input ng-model="customer_first_name" placeholder="First Name" id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                    <!-- <small>You're friend's name.</small> -->
                  </div>
                  <div class="input-field col s12 m6">
                    <input ng-model="customer_last_name" id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                  </div>
                  <div class="input-field col s12 m6">
                    <input ng-model="customer_email" id="email" type="email" class="validate">
                    <label for="email">Email</label>
                    <small>* {{customer_first_name}}'s current email.</small>
                  </div>
                  <div class="input-field col s12 m6">
                    <input ng-model="customer_phone" placeholder="Phone Number" id="phone" type="text" class="validate" value="+254">
                    <label for="phone">Phone Number</label>
                    <small>* {{customer_first_name}}'s current phone number.</small>
                  </div>
                  <br />

                  <div class="input-field col s12 ">
                    <textarea id="textarea1" class="materialize-textarea" ng-model="custom_message"></textarea>

                    <label for="phone">Your message to {{customer_first_name}} </label>
                  </div>
                  <div class="input-field col s12 m6">
                    <input ng-model="refferer_phone" placeholder="Phone Number" id="phone" type="text" class="validate" value="+254">
                    <label for="phone">Your Phone Number</label>
                    <small>* You're registered phone number on Paid.</small>
                  </div>
                  <div class="col s12 m2">
                    <button href="javascript:;;" type="submit" id="location-submit" class="btn waves-effect waves-light orange" style="margin-right: 10px; width:100%;">Refer</button>
                  </div>

                </div>  


              </form>
              <br />
              <div class="row">

                <div class="divider"></div>

                <div class="section col s12">
                  <div class="card medium" >
                    <div class="card-image">
                      <img src="<?php echo base_url();?>assets/img/lipa-na-mpesa-phone.JPG">
                      <span class="card-title"> <?php echo $merchantdetails->merchant_businessname;?> ( <?php echo $merchantdetails->merchant_businessno;?>)
                      </span>

                    </div>
                    <div class="card-content" >
                     <div class="chip">
                      <img src="<?php echo base_url();?>assets/img/inclusionmedia-logo.png" alt="Contact Person">
                      Hi  {{customer_first_name}}
                    </div>
                   <p>You have been exclusively invited to join  <?php echo $merchantdetails->merchant_businessname;?>'s loyalty program on Paid courtesy of refferer_name. Here's refferer_name's message</p>
                    <blockquote>
                     {{custom_message}}
                   </blockquote>
                 </div>

               </div>




               <h5>Section 1</h5>
               <p >Stuff {{customer_first_name}}

               </p>

             </div>
           </div>

           <p><?php echo $merchantdetails->merchant_businessdesc;?></p>

         </div>
         <div class="card-action">
          <a href="javascript:;;" class="green-text"><b>#<?php echo $merchantdetails->merchant_businessno; ?></b></a>
          <a href="javascript:;;" class="">Open hours: <?php echo date('h:i a',strtotime($merchantdetails->merchant_openhour)) .' - ' .date('h:i a',strtotime($merchantdetails->merchant_closehour)); ?> </a>

          <a href="javascript:;;" class="green-text"><b>#<?php echo $merchantdetails->merchant_businessno; ?></b></a>
                   <!--  <img src="<?php echo base_url(); ?>assets/img/paid-logo.png" style="width: 42px; margin-left:5px;" class="right tooltipped"  data-position="top" data-delay="50" data-tooltip="Paid Loyalty Available Here">
                    <img src="<?php echo base_url(); ?>assets/img/paid-logo-orange.png" style="width: 42px; margin-left:5px;" class="right tooltipped"  data-position="top" data-delay="50" data-tooltip="Online Reviews">
                    <img src="<?php echo base_url(); ?>assets/img/paid-logo-brown.png" style="width: 42px; margin-left:5px;" class="right tooltipped"  data-position="top" data-delay="50" data-tooltip="Order Online">
                  --> 
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