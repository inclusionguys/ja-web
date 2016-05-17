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
  <div class="col s12 m6" style="max-height: 196px; overflow-y: scroll;">

   <div class="card-panel teal">
    <span class="white-text">            
      43
      <br />
    </span>
  </div> <div class="card-panel teal">
  <span class="white-text">            
    43
    <br />
  </span>
</div>
</div>
<div class="col m12">
  <div class="card">
    <div class="card-content">
      <span class="card-title">Loans</span>
      <table class="stripped centered">
        <thead>

          <th data-field="id"></th>
          <th data-field="id">Applicant Name</th>
          <th data-field="id">name_of_business</th>
          <th data-field="id">nature_of_business</th>
          <th data-field="id">Phone</th>
          <th data-field="id">email</th>
          <th data-field="id">Location</th>
          <th data-field="id">Status</th>
        </thead>
        <tbody>
          <?php  foreach ($loans as  $loan) { ?>
          <tr><td>  <input type="checkbox" id="loan" name="loan" />
            <label>&nbsp;</label>
          </td>
          <td>
            <a href="loan/<?php echo $loan->request_id; ?>">
             <?php echo $loan->applicant_name; ?>
           </a>
         </td>
         <td> <?php echo $loan->name_of_business; ?></td>
         <td> <?php echo $loan->nature_of_business; ?></td>
         <td> <?php echo $loan->telephone_number; ?></td>
         <td> <?php echo $loan->telephone_number; ?></td>
         <td> <?php echo $loan->current_location; ?></td>
         <td> <label><?php echo $loan->loan_status; ?></label></td>
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