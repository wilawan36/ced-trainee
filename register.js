angular.module('registerModules', [])
.controller('registerController', function($scope,$http) {
	

  
	$scope.submit_data = function () {
       console.log("ss");
           console.log($scope.fname);
           console.log($scope.lastname);
           console.log($scope.username);
           console.log($scope.password);
           console.log($scope.repass);
           console.log($scope.usertype);

           //$http.get("phpMySQLAddSave.php?id="+$scope.id+"&fname="+$scope.fname+"&lastname="+$scope.lastname+"&username="+$scope.username+"&password="+$scope.password+"&test="+$scope.test).success(function(data) {});
         //$scope.addBranch = function(branch) {
        $http.get("api/add.php?id=" + $scope.id + "&fname=" + $scope.fname + "&lastname=" + $scope.lastname + "&username=" + $scope.username + "&password=" + $scope.password + "&repass=" + $scope.repass+ "&usertype=" + $scope.usertype).success(function(data) {
            if (data == 1) {
                console.log("success");
                
            }
            location.reload();        
           })
          }
          });

 /* $http.post('add.php',{'id':$params.id, 
                                            'fname':$params.fname,
                                            'lastname':$params.lastname, 
                                           'username':$params.username,
                                            'password':$params.password, 
                                           'test':$params.test                     
          .success(function(data) {
          $scope.blogs = data;
      })
    })   */