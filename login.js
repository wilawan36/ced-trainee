angular.module('loginModules', [])
.controller('loginController', function($scope,$http) {


$scope.login =function(){  
	$http.get("api/logout.php");
	$http.get("api/logcheck.php?username=" + $scope.username + "&password=" + $scope.password+ "&usertype=" + $scope.usertype ).success(function(data) {


       $scope.ck = data;

       console.log($scope.username);
       console.log($scope.password);
       console.log($scope.ck);
       console.log($scope.usertype);     
             if($scope.ck==1){

                 if( $scope.username==null || $scope.password==null){     }

                  else{
                        window.alert("Welcome"+$scope.username);
                        location.href="student/historystudent.html" ;  }

                            }

             else{         
                  window.alert("Username or Password is wrong!");
                  location.href="index.html";      
                  }

        });



}

  });