angular.module('historyModules', [])
.controller('historyController', function($scope,$http) {
	

  
	$scope.addHistory = function () {
       console.log("ss");
           console.log($scope.fname);
           console.log($scope.lname);
           console.log($scope.thaifname);
           console.log($scope.thailname);
           console.log($scope.dep);
           console.log($scope.gen);
           console.log($scope.group);
           console.log($scope.stdID);

           $http.get("../api/addHistory.php?id="+$scope.id
                                      +"&fname="+$scope.fname
                                      +"&lname="+$scope.lname
                                      +"&thaifname="+$scope.thaifname
                                      +"&thailname="+$scope.thailname
                                      +"&dep="+$scope.dep
                                      +"&gen="+$scope.gen
                                      +"&group="+$scope.group
                                      +"&stdID="+$scope.stdID
                                      +"&degree="+$scope.degree
                                      +"&namefa="+$scope.namefa
                                      +"&bussfa="+$scope.bussfa
                                      +"&nameMa="+$scope.nameMa
                                      +"&bussMa="+$scope.bussMa
                                      +"&NumAdd="+$scope.NumAdd
                                      +"&soiAdd="+$scope.soiAdd
                                      +"&street="+$scope.street
                                      +"&tambon="+$scope.tambon
                                      +"&aumper="+$scope.aumper
                                      +"&province="+$scope.province
                                      +"&postcode="+$scope.postcode
                                      +"&f_fname="+$scope.f_fname
                                      +"&f_lname="+$scope.f_lname
                                      +"&f_NumAdd="+$scope.f_NumAdd
                                      +"&f_soiAdd="+$scope.f_soiAdd
                                      +"&f_street="+$scope.f_street
                                      +"&f_tambon="+$scope.f_tambon
                                      +"&f_aumper="+$scope.f_aumper
                                      +"&f_province="+$scope.f_province
                                      +"&f_postcode="+$scope.f_postcode
                                      +"&f_phone="+$scope.f_phone).success(function(data) {

                                        if (data == 1) {
                                          //console.log($scope.data);
                                          console.log("success");
                                          location.href="shoHisStudent.html" ;
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