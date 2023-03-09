// var URL = "http://localhost/_sample/spa/content"; >> config.js
app.controller('UserController', function($scope,$http){
 
  $scope.data = [];

  getResultsPage();

  function getResultsPage() {
    $http({
      url: URL + '/api/users/login.php',
      method: 'GET'
    }).then(function(res){
      $scope.data = res.data.data;
    });
  }
   
});