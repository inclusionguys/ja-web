<?php $this->load->view('pages/templates/pages_header.php');?>
<body>
  <?php require_once('templates/pages_nav.php');?>
  <div class="container" style="background: url('assets/img/mobile-view-iphone.JPG') no-repeat;background-size: 100%; background-position: 43px;">
    <div class="section">
      <!--   Icon Section   -->

      <div class="col s12 m12 center">
       <p class="flow-text">Login to access your account</p>
     </div>
   </div>
   <div class="row">
    <div class="col s12 m6">
      <div class="card teal lighten-5">         
        <form ng-submit="LoginPost()">
          <div class="card-content">
            <span class="card-title">Member Login</span>
            <div class="input-field col m12 s12">
              <i class="material-icons prefix">person_pin</i>
              <input  ng-model="username" name="username" id="icon_prefix" placeholder="" type="text" class="validate">
              <label for="icon_prefix">username</label>
            </div>
            <div class="input-field col m12 s12">
              <i class="material-icons prefix">lock_open</i>
              <input  ng-model="password" name="password" id="icon_prefix" placeholder="password" type="password" class="validate">
              <label for="icon_prefix">Password</label>
            </div> 
            <p>

              <input  ng-model="terms" name="terms" type="checkbox" id="test5" />
              <label for="test5">I Accept <a href="#/">Terms & Conditions</a> </label>
            </p>
          </div>
          <div class="card-action">
            <button type="submit"  class="btn green white-text "> Login</button>
            <a href="<?php echo base_url(); ?>signup" class="btn blue white-text "> Signup</a>
          </form>
          <br />
          <br />
          <a href="/#forgot">Forgot your password?</a>
        </div>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col l12 s12 m12 center">
      <a class="btn blue">Become a Paid Merchant</a>
    </div>
  </div>
</div>
<?php require_once('templates/pages_footer.php');?>
<?php require_once('templates/pages_bottom.php');?>
