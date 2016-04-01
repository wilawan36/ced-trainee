var myapp=angular.module('myapp', []);//ทำงานในส่วนของกรอบของ app ที่เรากำหนด
	myapp.controller('showdatacontroller', function($scope,$http) {//แสดงข้อมูลสินค้าใน controller ชื่อ showdatacontroller
	getData(); //ทำงานเมื่อเพจโหลด เรียกใช้ฟังก์ชั่น getData
	$scope.sData='';

    function getData(){//สร้างฟังก์ชั่น getData เพื่อแสดงรายการสินค้า
    	$http.get("api/showpd.php").success(function(data){
    	$scope.showData = data;
    	});
	}

	$scope.deleteuser = function(id) {
  	console.log("xxx");
        console.log(id);

        $http.get("api/deleteuser.php?id=" + id).success(function(data) {
            //getuser();

        });

        $scope.edituser = function(id, fname, lastname, username,password,repass,usertype) {
        console.log(id, fname, lastname,username,password,repass,usertype);
        $http.post("api/edituser.php?id=" + id + "&fname=" + fname + "&lastname=" + lastname+ "&username=" + username+ "&password=" + password+ "&repass=" + repass+ "&usertype=" + usertype).success(function(data) {
            if (data == 1) {
                console.log("Sucess");
            } else {
                console.log("Error");
            }
            getBranch();
        });
    }
    }
 });