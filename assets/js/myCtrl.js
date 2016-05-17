
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
  

});
