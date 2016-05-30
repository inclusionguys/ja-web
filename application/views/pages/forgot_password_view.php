<?php $this->load->view('pages/templates/pages_header.php');?>
<body>
  <?php require_once('templates/pages_nav.php');?>
  <div class="container" >
    <div class="section">
    </div>
    <div class="row">
      <div class="col s12 m5">
       &nbsp;
     </div>

     <div class="col s12 m7">
      <div class="card teal lighten-5">         
        <div class="card-content">
          <span class="card-title">Password Recovery</span>
          <p>Please enter your username or email. <br /> <br /> A password recovery link will be sent to your email. You will be then required create a new and strong password before you can login.</p>
          <form id="registration-form" ng-submit="memberForgotPass()">
            <hr class="colorgraph">
            <div class="form-group">
              <input type="text" ng-model="display_name" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3">
            </div>
            <div class="form-group">
              <input type="email" ng-model="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
            </div>
     

           <div class="row">
            <div class="col s12 m6"><input type="submit" value="Submit" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
            <div class="col s12 m6"><a href="<?php echo base_url(); ?>index.php/login" class="btn btn-success btn-block btn-lg">Sign In</a></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<?php require_once('templates/pages_footer.php');?>
<?php require_once('templates/pages_bottom.php');?>
