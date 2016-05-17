<?php $this->load->view('pages/templates/pages_header.php');?>
<body>
    <?php require_once('templates/pages_nav.php');?>
<div class="row">

  <div class="col s12">
    <div class="container">

      <ul class="tabs">
        <li class="tab col s3"><a class="orange-text" href="#customerstab">Customers</a></li>
        <li class="tab col s3"><a class="active blue-text" href="#merchantstab">Merchants</a></li>
      </ul>
    </div>
  </div>
  <div id="customerstab" class="col s12">
    <div class="container">
      <div class="section">
        <!--   Icon Section   -->

        <div class="col s12 m12 center">
          <p class="flow-text">A Free and universal loyalty program you can access and enjoy across thousands of <span class="green-text">LIPA NA M-PESA</span> outlets</p>
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
      <div class="input-field col s12 m9">
        <i class="material-icons prefix">business</i>
        <input id="icon_prefix" type="text" class="validate">
        <label for="icon_prefix">Area</label>
      </div>
          <div class="input-field col s12 m3 center">
        <a href="#/quantity" ng-click="show = !show" id="" class="btn waves-effect waves-light orange" style="margin-right: 10px; width:100%;">join </a>
      </div>
    </div>
  </div>
</div>
<div id="merchantstab" class="col s12">
 <div id="customerstab" class="col s12">
  <div class="container">
    <div class="section">
      <!--   Icon Section   -->

      <div class="col s12 m12 center">
        <p class="flow-text">We help grow the relationships between  <span class="blue-text">Merchants</span> and their <br /> <span class="orange-text">loyal customers</span></p>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m3">
        <div class="card white darken-1 about-card">
          <div class="card-content grey-text">
            <span class="card-title">Be Found</span>
              <p class="light">
              To be reached is essential in business. You need to reach customers as well as allow them to reach you. 
              Access a greater audience for your business on paid listings today. 
              </p>
              </div>
        </div>
      </div>
      <div class="col s12 m3">
        <div class="card white darken-1 about-card">
          <div class="card-content grey-text">
            <span class="card-title">Discover</span>
            <p class="light">
                Each customer is important. Paid allows you to engage with customers over sms and online. 
                Paid allows you to get feedback as well as accept orders & bookings from customers 
         </p>
         </div>
        </div>
      </div>
      <div class="col s12 m3">
        <div class="card white darken-1 about-card">
          <div class="card-content grey-text">
            <span class="card-title">Grow</span>
            <p class="light">
                The happier customer is the more you are able to realize growth in your business. Create promotions, discounts and sales on today and grow your business by offering more value to customer.
                </p>
          </div>
        </div>
      </div>
      <div class="col s12 m3">
        <div class="card white darken-1 about-card">
          <div class="card-content grey-text">
            <span class="card-title">Monitor</span>
            <p class="light">
                  Growth is unnoticeable if it not measured. Paid allows you to track your business growth on our customer analytic dashboard. Check your sales performance in real time which is essential for your business aptness.
            </p>
          </div>
        </div>
      </div>
      <div class="col l12 s12 m12 center">
        <p class="flow-text">Build Customer Relationships With The Leading Business Loyalty Program</p>
        <a href="<?php echo base_url();?>signup" class="btn blue">Become a Paid Merchant</a>
      </div>
    </div>
     </div>
     </div>

</div>
</div>
    <?php require_once('templates/pages_footer.php');?>
<?php require_once('templates/pages_footer.php');?>