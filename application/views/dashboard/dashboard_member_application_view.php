<?php $this->load->view('dashboard/dashboard_nav_view.php');?>
<div class="section"></div>
<div class="divider"></div>
<div class="section"></div>

<div class="row">            
 <div class="col s12 m12 offset-m2">
 <div class="">

    <span class="flow-text">
     Apply Loan
   </span>

   <div class="row">

    <form  class="loanapplication-form" ng-submit="LoanPost()">


      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header"><i class="material-icons">perm_identity</i>Personal Details </div>
          <div class="collapsible-body">

            <div class="row">
              <div class="input-field col s12 m6">
                <i class="material-icons blue-text prefix">perm_identity</i>
                <input ng-model="applicant_name" id="applicant_name" type="text" class="validate" />
                <label for="applicant_name">Applicant Name</label>
              </div>
              <div class="input-field col s12 m6">
                <i class="material-icons blue-text prefix">mode_edit</i>
                <input ng-model="id_no" id="id_no" type="text" class="validate" />
                <label for="id_no">ID number</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m6">
                <i class="material-icons blue-text prefix">email</i>
                <input ng-model="email" id="email" type="text" class="validate" />
                <label for="email">email</label>
              </div>
              <div class="input-field col s12 m6">
                <i class="material-icons blue-text prefix">contact_phone</i>
                <input ng-model="telephone_number" id="telephone_number" type="text" class="validate" />
                <label for="telephone_number">Telephone number</label>
              </div>
              <div class="input-field col s12 m6">
                <i class="material-icons blue-text prefix">picture_in_picture</i>
                <input ng-model="postal_address" id="postal_address" type="text" class="validate" />
                <label for="postal_address">Postal address</label>
              </div>
            </div>


          </div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">place</i>Business Details</div>
          <div class="collapsible-body">
            <div class="row">
              <div class="input-field col s12 m8">
                <i class="material-icons blue-text prefix">receipt</i>
                <input ng-model="name_of_business" id="name_of_business" type="text" class="validate" />
                <label for="name_of_business">Name of business</label>
              </div>
              <div class="input-field col s12 m4">
                <i class="material-icons blue-text prefix">contacts</i>
                <input ng-model="position_in_business" id="position_in_business" type="text" class="validate" />
                <label for="position_in_business">Position in business</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m8">
                <i class="material-icons blue-text prefix">visibility</i>
                <input ng-model="nature_of_business" id="nature_of_business" type="text" class="validate" />
                <label for="nature_of_business">Nature of business</label>
              </div>
              <div class="input-field col s12 m4">
                <i class="material-icons blue-text prefix">today</i>
                <input ng-model="year_in_operation" id="year_in_operation" type="number" class="validate" />
                <label for="year_in_operation">Year in Operation</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m6">
                <i class="material-icons blue-text prefix">mode_edit</i>
                <input ng-model="registration_number" id="registration_number" type="text" class="validate" />
                <label for="registration_number">Registration Number</label>
              </div>
              <div class="input-field col s12 m6">
                <i class="material-icons blue-text prefix">mode_edit</i>
                <input ng-model="pin_no" id="pin_no" type="text" class="validate" />
                <label for="pin_no">PIN number</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons blue-text prefix">mode_edit</i>
                <input ng-model="number_of_members" id="number_of_members" type="number" class="validate" />
                <label for="number_of_members">Number of Members</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons blue-text prefix">my_location</i>
                <input ng-model="current_location" id="current_location" type="text" class="validate" />
                <label for="current_location">Current Location</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons blue-text prefix">recent_actors</i>
                <input ng-model="business_reference" id="business_reference" type="text" class="validate" />
                <label for="business_reference">Business Reference</label>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">whatshot</i>Business Performance</div>
          <div class="collapsible-body"><div class="row">
            <div class="input-field col s12">
              <i class="material-icons blue-text prefix">trending_up</i>
              <input ng-model="total_revenue_to_date" id="total_revenue_to_date" type="text" class="validate" />
              <label for="total_revenue_to_date">Total Revenue Earned</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6">
              <i class="material-icons blue-text prefix">credit_card</i>
              <input ng-model="last_6_months_expenses_total" id="last_6_months_expenses_total" type="text" class="validate" />
              <label for="last_6_months_expenses_total">Expenses over the last 6 months</label>
            </div>
            <div class="input-field col s12 m6">
              <i class="material-icons blue-text prefix">mode_edit</i>
              <input ng-model="expected_6_months_expenses_total" id="expected_6_months_expenses_total" type="text" class="validate" />
              <label for="expected_6_months_expenses_total">Expected 6 months expenses</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6">
              <i class="material-icons blue-text prefix">trending_flat</i>
              <input ng-model="owed_debts" id="owed_debts" type="text" class="validate" />
              <label for="owed_debts">owed debts amount</label>
            </div>
            <div class="input-field col s12 m6">
              <i class="material-icons blue-text prefix">trending_down</i>
              <input ng-model="debts_you_owe" id="debts_you_owe" type="text" class="validate" />
              <label for="debts_you_owe">Debts you owe</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons blue-text prefix">library_add</i>
              <input ng-model="total_assets_held" id="total_assets_held" type="text" class="validate" />
              <label for="total_assets_held">total assets worth</label>
            </div> 
          </div> 
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons blue-text prefix">dashboard</i>
              <input ng-model="assets_bought_this_year" id="assets_bought_this_year" type="text" class="validate" />
              <label for="assets_bought_this_year">Assets bought this year</label>
            </div> 
          </div> 
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons blue-text prefix">business</i>
              <input ng-model="cash_in_bank" id="cash_in_bank" type="text" class="validate" />
              <label for="cash_in_bank">Cash in bank</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons blue-text prefix">group_work</i>
              <input ng-model="amount_from_members" id="amount_from_members" type="text" class="validate" />
              <label for="amount_from_members">Members contributed amount</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons blue-text prefix">thumb_down</i>
              <input ng-model="debts_incurred_this_year" id="debts_incurred_this_year" type="text" class="validate" />
              <label for="debts_incurred_this_year">debts incurred this year</label>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">whatshot</i>Loan Details</div>
        <div class="collapsible-body">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons blue-text prefix">view_agenda</i>
              <textarea id="business_needs" ng-model="business_needs"  class="materialize-textarea"></textarea>
              <label for="business_needs">Business Needs</label>
            </div>
          </div>



          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons blue-text prefix">mode_edit</i>
              <input ng-model="loan_amount_required" id="loan_amount_required" type="text" class="validate" />
              <label for="loan_amount_required">loan Amount Required</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons blue-text prefix">mode_edit</i>
              <input ng-model="cash_at_hand" id="cash_at_hand" type="text" class="validate" />     

              <label for="cash_at_hand">cash at hand</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 ">
              <input type="checkbox" ng-model="have_other_loan" id="have_other_loan" ng-click="sa = !sa" />
              <label for="have_other_loan">I Have a loan with another institution</label>  
              <br />
              <br />

            </div>
            <div  ng-show="sa">
              <div class="input-field col s12 m7">
                <i class="material-icons blue-text prefix">business</i>
                <input ng-model="loan_1_institution" id="loan_1_institution" type="text" class="validate" />
                <label for="loan_1_institution">institution</label>
              </div>
              <div class="input-field col s5">
                <i class="material-icons blue-text prefix">restore</i>
                <input ng-model="loan_1_amount" id="loan_1_amount" type="text" class="validate" />
                <label for="loan_1_amount">Amount</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons blue-text prefix">mode_edit</i>
              <input ng-model="business_registration_certificate" id="business_registration_certificate" type="text" class="validate" />
              <label for="business_registration_certificate">Business Registration Certificate</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons blue-text prefix">mode_edit</i>
              <input ng-model="business_pin_no" id="business_pin_no" type="text" class="validate" />
              <label for="business_pin_no">Business Pin number</label>
            </div>
          </div>
        </div>
      </li>
    </ul>


    <button type="submit"  class="btn green white-text "> Submit</button>
  </form>
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/wiz.js"></script>

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
