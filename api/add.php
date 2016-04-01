<?php
require_once 'include/db.php';

if (isset($_GET['fname'])) {
	$fname = $_GET['fname'];
	$lastname = $_GET['lastname'];
	$username =$_GET['username'];
	$password = $_GET['password'];
	$repass = $_GET['repass'];
	$usertype = $_GET['usertype'];

	$query="INSERT INTO tbl_user
			VALUES ('','$fname','$lastname','$username','$password','$repass','$usertype')";

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
