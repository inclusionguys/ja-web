<?php $this->load->view('pages/templates/pages_header.php');?>
<body>
  <?php require_once('templates/pages_nav.php');?>
  <div class="container" >
    <div class="section">
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
              </p>
            </div>
            <div class="card-action">
              <button type="submit"  class="btn green white-text "> Login</button>
              <a href="<?php echo base_url(); ?>index.php/signup" class="btn blue white-text "> Signup</a>
            </form>
            <br />
            <br />
            <a href="<?php echo base_url(); ?>index.php/forgot">Forgot your password?</a>
          </div>
        </div>
      </div>

    </div>
  </div>
  <?php require_once('templates/pages_footer.php');?>
  <?php require_once('templates/pages_bottom.php');?>
