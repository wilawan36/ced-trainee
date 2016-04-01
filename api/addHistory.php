<?php
require_once 'include/db.php';

if (isset($_GET['fname'])) {
	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$thaifname =$_GET['thaifname'];
	$thailname = $_GET['thailname'];
	$dep = $_GET['dep'];
	$gen = $_GET['gen'];
	$group = $_GET['group'];
	$stdID = $_GET['stdID'];
	$degree = $_GET['degree'];
	$namefa = $_GET['namefa'];
	$bussfa = $_GET['bussfa'];
	$nameMa = $_GET['nameMa'];
	$bussMa = $_GET['bussMa'];
	$NumAdd = $_GET['NumAdd'];
	$soiAdd = $_GET['soiAdd'];
	$street = $_GET['street'];
	$tambon = $_GET['tambon'];
	$aumper = $_GET['aumper'];
	$province = $_GET['province'];
	$postcode = $_GET['postcode'];
	$f_fname = $_GET['f_fname'];
	$f_lname = $_GET['f_lname'];
	$f_NumAdd = $_GET['f_NumAdd'];
	$f_soiAdd = $_GET['f_soiAdd'];
	$f_street = $_GET['f_street'];
	$f_tambon = $_GET['f_tambon'];
	$f_aumper = $_GET['f_aumper'];
	$f_provine = $_GET['f_province'];
	$f_postcode = $_GET['f_postcode'];
	$f_phone = $_GET['f_phone'];
/*
	$query="INSERT INTO tbl_train
			VALUES ('','$fname','$lname','$thaifname','$thailname','$dep','$gen','$group','$stdID')";

*/

	$query="INSERT INTO historystd
			VALUES ('','$fname','$lname','$thaifname','$thailname','$dep','$gen','$group','$stdID','$degree',
					'$namefa','$bussfa','$nameMa','$bussMa''$NumAdd','$soiAdd','$street','$tambon',
					'$aumper','$province','$postcode','$f_fname','$f_lname','$f_NumAdd','$f_soiAdd',
					'$f_street','$f_tambon','$f_aumper','$f_province','$f_postcode','$f_phone')";

	$result = $mysqli->query($query) or die($result="0");
	$result = $mysqli->affected_rows;
}
	echo $json_response = json_encode($result);



/*
$sql = "insert into $tblname (fname,lastname,username,password,test) values ('$fname', '$lastname', '$username','password','test')"; 
$dbquery = mysql_db_query($dbname, $sql);
mysql_close();


$data = json_decode(file_get_contents("php://input"));
$fname = $mysqli->real_escape_string($data->fname);
$lastname = $mysqli->real_escape_string($data->lastname);
$username = $mysqli->real_escape_string($data->username);
$password = $mysqli->real_escape_string($data->password);
$test = $mysqli->real_escape_string($data->test);

$data=array(
	"fname"=>$fname,
	"lastname"=>$lastname,
	"username"=>$username,
	"password"=>$password,
	"test"=>$test);

insert($tblname,$data);
    exit;
    */
?>
