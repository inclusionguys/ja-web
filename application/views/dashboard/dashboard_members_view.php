<?php $this->load->view('dashboard/dashboard_nav_view.php');?>
  <div class="section"></div>
  <div class="divider"></div>
  <div class="section"></div>

  <div class="row">            
   <div class="col s12 m12">
    <div class="card-panel">
      <span class="flow-text">
        Total Members <?= $members_count; ?> <br />
        <?php foreach ($member_types as $member) {echo $member->member_type .' ('.$member->members.') <br />'; }?>

      </span>
    </div>
  </div>

  <div class="col  m12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Members</span>
        <table class="stripped centered">
          <thead>

            <th data-field="id"></th>
            <th data-field="id">username</th>
            <th data-field="id">Member Name</th>
            <th data-field="id">Member Type</th>
            <th data-field="id">Phone</th>
            <th data-field="id">email</th>
            <th data-field="id">Location</th>
          </thead>
          <tbody>
          <?php  foreach ($members as  $member) { ?>
          <tr><td>  <input type="checkbox" id="member" name="member" />
          <label>&nbsp;</label>
          </td>
            <td>
            <a href="member/@<?php echo $member->display_name; ?>">
             <?php echo $member->member_name; ?>
            </a>
            </td>
            <td> <?php echo $member->display_name; ?></td>
            <td> <?php echo $member->member_type; ?></td>
            <td> <?php echo $member->contact_telno; ?></td>
            <td> <?php echo $member->contact_email; ?></td>
            <td> <?php echo $member->contact_physical; ?></td>
          </tr>
          <?php } ?>
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