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
          <span class="card-title">Signup</span>
          <form id="registration-form" ng-submit="memberSignup()">
            <hr class="colorgraph">
            <div class="row">
              <div class="col s12 s6 m6">
                <div class="form-group">
                  <input type="text" ng-model="first_name" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
                </div>
              </div>
              <div class="col s12 s6 m6">
                <div class="form-group">
                  <input type="text" ng-model="last_name" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" ng-model="display_name" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3">
            </div>
            <div class="form-group">
              <input type="email" ng-model="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
            </div>
            <div class="row">
              <div class="col s12 s6 m6">
                <div class="form-group">
                  <input type="password" ng-model="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                </div>
              </div>
              <div class="col s12 s6 m6">
                <div class="form-group">
                  <input type="password" ng-model="password_confirmation" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-4 s3 col-md-3">
                <input  ng-model="terms" name="terms" type="checkbox" id="test5" />
                <label for="test5">I Accept <a href="#/">Terms & Conditions</a> </label>
              </div>
              <div class="col-xs-8 s9 col-md-9">
               By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
             </div>
           </div>

           <hr class="colorgraph">
           <div class="row">
            <div class="col s12 m6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
            <div class="col s12 m6"><a href="login" class="btn btn-success btn-block btn-lg">Sign In</a></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<?php require_once('templates/pages_footer.php');?>
<?php require_once('templates/pages_bottom.php');?>
