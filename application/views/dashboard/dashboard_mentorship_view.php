<?php $this->load->view('dashboard/dashboard_nav_view.php');?>
<div class="section"></div>
<div class="divider"></div>
<div class="section"></div>

<div class="row"> 

<div class="col s12 m12">
    <div class="card-panel">
      <span class="flow-text">
       .. in the pipeline
     </span>
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