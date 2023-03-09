// var URL = "http://localhost/_sample/spa/content"; >> config.js
app.controller('PostController', function($scope,$http){
 
  $scope.data = [];

  getResultsPage();

  function getResultsPage() {
    $http({
      url: URL + '/api/posts/getData.php',
      method: 'GET'
    }).then(function(res){
      $scope.data = res.data.data;
      console.log($scope.data);
    }),function(res){
      alert("Lỗi");
    };
  }

  $scope.saveAdd = function(){
    $http({
      url: URL + '/api/posts/add.php',
      method: 'POST',
      data: $scope.form
    }).then(function(data){
      $scope.data.push(data.data);
      $(".modal").modal("hide");
    });
  }

  $scope.edit = function(id){
    $http({
      url: URL + '/api/posts/edit.php?id='+id,
      method: 'GET'
    }).then(function(data){
      $scope.form = data.data;
    });
  }

  $scope.saveEdit = function(){
    $http({
      url: URL + '/api/posts/update.php?id='+$scope.form.id,
      method: 'POST',
      data: $scope.form
    }).then(function(data){
      $(".modal").modal("hide");
        $scope.data = apiModifyTable($scope.data,data.data.id,data.data);
    });
  }

  $scope.remove = function(post,index){
    var result = confirm("Bạn có muốn xóa bài viết này?");
   	if (result) {
      $http({
        url: URL + '/api/posts/delete.php?id='+post.id,
        method: 'DELETE'
      }).then(function(data){
        $scope.data.splice(index,1);
      });
    }
  }
   
});