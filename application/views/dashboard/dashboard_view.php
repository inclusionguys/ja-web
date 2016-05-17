<?php $this->load->view('dashboard/dashboard_nav_view.php');?>
  <div class="section"></div>
  <div class="divider"></div>
  <div class="section"></div>

  <div class="row">            
   <div class="col s12 m6">
    <div class="card-panel">
      <span class="flow-text">
        Total Members <?= $members_count; ?>
        <br />
        Total Loans <?= $loans_count; ?>
        <br />
        Pending Disbursements <?= $pendingloans_count; ?>
        <br />
        Settled loans 0
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
  </script>
</body>
</html>