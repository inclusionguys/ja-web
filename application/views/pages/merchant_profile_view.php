<?php $this->load->view('pages/templates/pages_header.php');?>
<?php require_once('templates/pages_nav.php');?>
<div class="container">
  <div class="section">
    <!--   Icon Section   -->
    <div class="col s12 m12">
      <div class="row">
        <div class="col s12">
          <a href="<?php echo base_url();?>merchants">Merchants</a> > 
          <a href="<?php echo base_url();?>merchants/<?php echo $merchantdetails->location_slug;?>"><?php echo $merchantdetails->location_slug;?></a> > 
          <?php echo $merchantdetails->merchant_businessname;?> ( <?php echo $merchantdetails->merchant_businessno;?>)

        </div>
      </div>
    </div>
  </div>
  <div class="row">

    <div class="col s12 m12">
 <div class="card-panel">
            <h6><span class="blue-text">Paid Loyalty </span> </h6>
            <p class="flow-text"> 
              Earn <?php echo $points_quota; ?> Points for every 100/= spent at <?php echo $merchantdetails->merchant_businessname;?> 
            </div>
          <div class="card">

            <div class="card-content">
              <span class="card-title blue-text"><b>
                <?php echo $merchantdetails->merchant_businessname . ' '. $merchantdetails->merchant_location; ?>
              </b></span>
              <p><?php echo $merchantdetails->merchant_businessdesc;?></p>
            </div>
            <div class="card-action">
              <a href="javascript:;;" class="green-text"><b>#<?php echo $merchantdetails->merchant_businessno; ?></b></a>
              <a href="javascript:;;" class="">Open hours: <?php echo date('h:i a',strtotime($merchantdetails->merchant_openhour)) .' - ' .date('h:i a',strtotime($merchantdetails->merchant_closehour)); ?> </a>

                   <!--  <img src="<?php echo base_url(); ?>assets/img/paid-logo.png" style="width: 42px; margin-left:5px;" class="right tooltipped"  data-position="top" data-delay="50" data-tooltip="Paid Loyalty Available Here">
                    <img src="<?php echo base_url(); ?>assets/img/paid-logo-orange.png" style="width: 42px; margin-left:5px;" class="right tooltipped"  data-position="top" data-delay="50" data-tooltip="Online Reviews">
                    <img src="<?php echo base_url(); ?>assets/img/paid-logo-brown.png" style="width: 42px; margin-left:5px;" class="right tooltipped"  data-position="top" data-delay="50" data-tooltip="Order Online">
                  --> 
                  <a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php echo $merchantdetails->merchant_businessname.' on Paid.';?>" data-via="paidloyalT" data-related="paidloyalT" data-hashtags="paidloyalT">Tweet</a>
                  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                  <i style="width: 42px; margin-left:5px;" class="orange-text material-icons right tooltipped"  data-position="top" data-delay="50" data-tooltip="Paid Loyalty Available Here">redeem</i>
                  <i style="width: 42px; margin-left:5px;" class="cyan-text material-icons right tooltipped"  data-position="top" data-delay="50" data-tooltip="Orders">textsms</i>
                  <i style="width: 42px; margin-left:5px;" class="grey-text material-icons right tooltipped"  data-position="top" data-delay="50" data-tooltip="Reviews">thumbs_up_down</i>

                </div>
                <div class="card-image">
                  <img width="100%" src="<?php echo base_url(); ?>assets/img/<?php echo $merchantdetails->merchant_banner;?>">
                </div>
              </div>
            </div>
            <div class="col s12 m12">
              <div class="card">
                <div class="card-image">
                  <img width="100%" src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $merchantdetails->merchant_latitude . ','. $merchantdetails->merchant_longitude; ?>&zoom=18&scale=2&size=600x300&maptype=roadmap&format=png&visual_refresh=true&markers=size:mid%7Ccolor:0xff0000%7Clabel:1%7C<?php echo $merchantdetails->merchant_latitude . ','. $merchantdetails->merchant_longitude; ?>">
                  <span class="card-title">Location</span>
                </div>
                <div class="card-content">
                  <P></P>
                </div>
                <div class="card-action">
                  <a href="#"></a>
                </div>
              </div>
            </div>
        </div> 
        <div class="col s12 m3">
         
            <div class="card-panel">
              <h6><?php echo $merchantdetails->merchant_businessname;?> 's board - Recently </h6>
              <ul>
                <?php foreach ($recentcheckins as $checkin) { 
                  if ($checkin->tx_msisdn>0){?> 
                  <li><small><?php echo '0'.substr($checkin->tx_msisdn, 3,3).' XXX X'.substr($checkin->tx_msisdn, 10); ?>  checked in at <?php echo $merchantdetails->merchant_businessname;?></small></li>
                  <?php }} ?>
                </ul>
              </div>
              
              <a href="<?php echo base_url("merchants/").'/'.$merchantdetails->location_slug.'/'.str_replace(" ","-", preg_replace("/[^[:alnum:][:space:]]/u", '', $merchantdetails->merchant_businessname)).'-'. $merchantdetails->merchant_businessno.'/subscribe';  ?>"
                class="btn blue tooltipped"  data-position="top" data-delay="50" data-tooltip="Subscribe to <?php echo $merchantdetails->merchant_businessname;?> Alerts & promotions">subscribe</a> 


            </div> 
          </div>


        <?php require_once('templates/pages_footer.php');?>
        <?php require_once('templates/pages_bottom.php');?>
