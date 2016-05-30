
app.controller("myCtrl", function($scope, $http,$location,ngProgressFactory) {
  $scope.progressbar = ngProgressFactory.createInstance();

  $scope.base_url = "http://localhost/ja-web/";
  

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
              Materialize.toast('login succesfull!', 4000);
              window.location = data.redirect;
              // 'dashboard/pos';

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

  
});
