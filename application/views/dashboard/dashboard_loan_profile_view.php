<?php $this->load->view('dashboard/dashboard_nav_view.php');?>
<div class="section"></div>
<div class="divider"></div>
<div class="section"></div>

<div class="row">            
 <div class="col s12 m6">
  <div class="card-panel">
    <!-- Switch -->
    <div class="switch right">
      <label>
        Pending
        <input type="checkbox">
        <span class="lever"></span>
        Approved
      </label>
    </div>
    <span class="flow-text">
      Applicant:  <?= $loandetails->applicant_name; ?><br />
      Position in Business <?= $loandetails->position_in_business; ?><br />
      Location: <?= $loandetails->current_location; ?><br />
      Name of Business <?= $loandetails->name_of_business; ?><br />
      Telephone <?= $loandetails->telephone_number; ?><br />
      Loan Amount requested <?= $loandetails->loan_amount_required; ?><br />
      Date of request  <?= date('dS, M Y',strtotime($loandetails->date_loan_requested)); ?><br />
      Loan Status <?= $loandetails->loan_status; ?>
    </span>
  </div>
</div>

<div class="col s12 m6" style="max-height: 345px; overflow-y: scroll;">
 <a href="#addpayment" class="waves-effect waves-light btn modal-trigger"> Add Payment</a>

 <a href="javascript:;;" class="btn brown"> Add Comment</a>
 <a href="javascript:;;" class="btn blue"> Add Document</a>
 <p class="flow-text"> Recent Payments</p>
 <?php 
 if (isset($loanrepayments)){
 foreach ($loanrepayments as $repayments) { ?>
 <div class="card-panel white">
  <span class="teal-text">
    KES <?= $repayments->amount; ?>

    <?= date('dS, M Y',strtotime($repayments->paymentdate)) ?>
    <?= $repayments->paymentmode; ?>
    <?= '#'.$repayments->ref; ?>
    <br />
  </span>
</div>
<?php }} ?>
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
          <?php  
          if (isset($loans)){
          foreach ($loans as  $loan){ ?>
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
       <?php } } ?>
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
<!-- Modal Structure -->
<div id="addpayment" class="modal  modal-fixed-footer">
  <div class="modal-content">
    <p class="flow-text">Add Payment</p>
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Amount" id="amount" type="text" class="validate">
            <label for="amount">Amount</label>
          </div>
        </div>
        <div class="row">
         <p>
          <input name="modeofpayment" type="radio" id="cash" />
          <label for="cash">Cash</label>

          <input name="modeofpayment" type="radio" id="mpesa" />
          <label for="mpesa">MPESA</label>
          <input class="with-gap" name="modeofpayment" type="radio" id="bank"  />
          <label for="bank">BANK</label>
        </p>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Reference" id="reference" type="text" class="validate">
          <label for="reference">Reference</label>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="modal-footer">
  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Save</a>
</div>
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

    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  });

</script>
</body>
</html>