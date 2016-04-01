angular.module('showstudentModule', [])
.controller('showstudentcontroller', function($scope,$http) {
	
	showStudent(); //ทำงานเมื่อเพจโหลด เรียกใช้ฟังก์ชั่น getData
	$scope.sData='';

    function showStudent(){//สร้างฟังก์ชั่น getData เพื่อแสดงรายการสินค้า
    	$http.get("../api/showStudent.php").success(function(data){
    	$scope.showStudent = data;
    	  	});
						}

	$scope.deletestudent = function(id) {
  	console.log("xxx");
        console.log(id);

        $http.get("../student/deletestudent.php?id=" + id).success(function(data) {
            //getuser();

        })
        }			




	});