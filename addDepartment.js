angular.module('departmentModules', [])
.controller('departmentController', function($scope,$http) {
	

  
	$scope.AddDepartment = function () {
       console.log("ss");
          
          /*console.log($scope.techfname);
           console.log($scope.techlname);
           console.log($scope.techPhone);
           console.log($scope.techemail);
           console.log($scope.dateStart);
           console.log($scope.dateEnd);

           //$http.get("phpMySQLAddSave.php?id="+$scope.id+"&fname="+$scope.fname+"&lastname="+$scope.lastname+"&username="+$scope.username+"&password="+$scope.password+"&test="+$scope.test).success(function(data) {});
         //$scope.addBranch = function(branch) {
        $http.get("../api/AddDepartment.php?id=" + $scope.id 
                    + "&techfname=" + $scope.techfname 
                    + "&techlname=" + $scope.techlname 
                    + "&techPhone=" + $scope.techPhone 
                    + "&techemail=" + $scope.techemail 
                    + "&dateStart=" + $scope.dateStart
                    + "&dateEnd=" + $scope.dateEnd).success(function(data) {
            if (data == 1) {
                console.log("success");
                
            }
            location.reload();        
           })*/
          }
          });