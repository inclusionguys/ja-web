
app.controller("myCtrl", function($scope, $http,$location,ngProgressFactory) {
  $scope.progressbar = ngProgressFactory.createInstance();

  // $scope.base_url = "http://localhost:81/ja-web/";
  $scope.base_url = "http://188.166.67.200/ja-web/";
  

  $scope.username = "";
  $scope.password = "";
  $scope.terms = "";

  $scope.LoginPost = function() {
    $('#loader').show();
    
    var data = {
      username: $scope.username,
      password: $scope.password,
      terms: $scope.terms
    };
    $http.post("login/submit", data).success(function(data, status) {
      $('#loader').hide();
            // $scope.hello = data;
            // console.log(data.error + ' -- make');

            if (data.error == 'none'){
              Materialize.toast('login succesfull!', 7000 , '',function(){
              window.location = data.redirect;});
            }else{
              Materialize.toast(data.error, 4000);
            }

          });
  };  
  


$scope.first_name = "";
$scope.last_name = "";
$scope.display_name = "";
$scope.email = "";
$scope.password = "";
$scope.password_confirmation = "";
$scope.terms = "";


  $scope.memberSignup = function() {
    $('#loader').show();
    var data = {
      first_name:$scope.first_name,
      last_name:$scope.last_name,
      display_name:$scope.display_name,
      email:$scope.email,
      password:$scope.password,
      password_confirmation:$scope.password_confirmation,
      terms:$scope.terms
    };

    $http.post("signup/submit", data).success(function(data, status) {
      $('#loader').hide();
            // $scope.hello = data;
            // console.log(data.error + ' -- make');

            if (data.error == 'none'){
              Materialize.toast('Registration succesfull!', 4000);
              window.location = data.redirect;
              // 'dashboard/pos';

            }else{
              Materialize.toast(data.error, 4000);
            }

          });
  };  

 $scope.memberForgotPass = function() {
    $('#loader').show();
    var data = {
      display_name:$scope.display_name,
      email:$scope.email,
    };

    $http.post("forgot/recover", data).success(function(data, status) {
      $('#loader').hide();
            // $scope.hello = data;
            // console.log(data.error + ' -- make');

            if (data.error == 'none'){
              Materialize.toast('Registration succesfull!', 4000);
              window.location = data.redirect;
              // 'dashboard/pos';

            }else{
              Materialize.toast(data.error, 4000);
            }

          });
  };  


$scope.applicant_name
$scope.id_no
$scope.email
$scope.telephone_number
$scope.postal_address
$scope.name_of_business
$scope.position_in_business
$scope.nature_of_business
$scope.year_in_operation
$scope.registration_number
$scope.pin_no
$scope.number_of_members
$scope.current_location
$scope.business_reference
$scope.total_revenue_to_date
$scope.last_6_months_expenses_total
$scope.expected_6_months_expenses_total
$scope.owed_debts
$scope.debts_you_owe
$scope.total_assets_held
$scope.assets_bought_this_year
$scope.cash_in_bank
$scope.amount_from_members
$scope.debts_incurred_this_year
$scope.business_needs
$scope.loan_amount_required
$scope.cash_at_hand
$scope.have_other_loan
$scope.loan_1_institution
$scope.loan_1_amount
$scope.business_registration_certificate
$scope.business_pin_no



   $scope.LoanPost = function() {

    $('#loader').show();

    

    var data = {
      applicant_name:$scope.applicant_name,
      id_no:$scope.id_no,
      email:$scope.email,
      telephone_number:$scope.telephone_number,
      postal_address:$scope.postal_address,
      name_of_business:$scope.name_of_business,
      position_in_business:$scope.position_in_business,
      nature_of_business:$scope.nature_of_business,
      year_in_operation:$scope.year_in_operation,
      registration_number:$scope.registration_number,
      pin_no:$scope.pin_no,
      number_of_members:$scope.number_of_members,
      current_location:$scope.current_location,
      business_reference:$scope.business_reference,
      total_revenue_to_date:$scope.total_revenue_to_date,
      last_6_months_expenses_total:$scope.last_6_months_expenses_total,
      expected_6_months_expenses_total:$scope.expected_6_months_expenses_total,
      owed_debts:$scope.owed_debts,
      debts_you_owe:$scope.debts_you_owe,
      total_assets_held:$scope.total_assets_held,
      assets_bought_this_year:$scope.assets_bought_this_year,
      cash_in_bank:$scope.cash_in_bank,
      amount_from_members:$scope.amount_from_members,
      debts_incurred_this_year:$scope.debts_incurred_this_year,
      business_needs:$scope.business_needs,
      loan_amount_required:$scope.loan_amount_required,
      cash_at_hand:$scope.cash_at_hand,
      have_other_loan:$scope.have_other_loan,
      loan_1_institution:$scope.loan_1_institution,
      loan_1_amount:$scope.loan_1_amount,
      business_registration_certificate:$scope.business_registration_certificate,
      business_pin_no:$scope.business_pin_no
    };

    $http.post($scope.base_url+"Loan/submit", data).success(function(data, status) {

      $('#loader').hide();

            // $scope.hello = data;

            // console.log(data.error + ' -- make');


            if (data.error == 'none'){

              Materialize.toast('Loan application succesfull!', 4000 , '',function(){
              window.location = $scope.base_url+data.redirect;});
            }else{

              Materialize.toast(data.error, 4000);

            }



          });

  };  



  

});

