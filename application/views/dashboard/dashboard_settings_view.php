<?php $this->load->view('dashboard/dashboard_nav_view.php');?>
<div class="no-container">
  <nav>
    <div class="nav-wrapper blue-grey darken-1">
      <a href="#!" class="brand-logo">
        <img src="<?php echo base_url(); ?>assets/img/ja-logo.png" style="height: 60px; margin-left; 15px;padding: 4px;">
      </a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo base_url(); ?>dashboard/dashboard">Dashboard</a></li>
        <li><a href="<?php echo base_url(); ?>dashboard/members">Members</a></li>
        <li><a href="<?php echo base_url(); ?>dashboard/mentorship">Mentorship</a></li>
        <li><a href="<?php echo base_url(); ?>dashboard/loans">Loans</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="profile-dropdown"><?php echo $userdata['username']; ?> <i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>


      <ul class="side-nav" id="mobile-demo">
        <li><a href="<?php echo base_url(); ?>dashboard/dashboard">Dashboard</a></li>
        <li><a href="<?php echo base_url(); ?>dashboard/members">Members</a></li>
        <li><a href="<?php echo base_url(); ?>dashboard/mentorship">Mentorship</a></li>
        <li><a href="<?php echo base_url(); ?>dashboard/loans">Loans</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="profile-dropdown"><?php echo $userdata['username']; ?> <i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>

      <ul id="profile-dropdown" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
      </ul>

    </div>
  </nav>
  <div class="section"></div>
  <div class="divider"></div>
  <div class="section"></div>

  <div class="row">            
   <div class="col s12 m6">
    <div class="card-panel">
      <span class="flow-text">
        Total Members 43
        <br />
        Total Loans 43
        <br />
        Pending Disbursements 43
        <br />
        Settled loans 43
      </span>
    </div>
  </div>

  <div class="col s12 m6">
    <div class="card-panel teal">
      <span class="white-text">            
        43
        <br />
      </span>
    </div>
  </div>
  <div class="col  m12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Your Transactions</span>
        <table class="stripped centered">
          <thead>
            <!-- <th data-field="id">id</th> -->
            <th data-field="id">timestamp</th>
            <th data-field="id">Customer number</th>
            <th data-field="id">MPESA Code</th>
            <th data-field="id">MPESA amount</th>
            <th data-field="id">Customer Name</th>
          </thead>
          <tbody>

            <td> timestamp</td>
            <td> Customer</td>
            <td> MPESA</td>
            <td> MPESA</td>
            <td> Customer</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="card-action">
    </a>
  </div>
</div>
</div>
    </div>
  </div>

  <div class="divider"></div>
  <div class="section">
    <!-- <p>Stuff</p> -->

  </div>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/angular.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.tablecloth.js"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ngprogress.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/myApp.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/myCtrl.js"></script>



  <script type="text/javascript">
    $(function(){

      $("table").tablecloth({theme: "paper"});
    });

    new Chartist.Line('.ct-chart', {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
      series: [
      [2, 3, 2, 4, 5],
      [0, 2.5, 3, 2, 3],
      [1, 2, 2.5, 3.5, 4]
      ]
    }
    , {
      width: 320,
      height: 240
    });
  </script>
</body>
</html>