<?php
require_once 'include/db.php'; // The mysql database connection script
if(isset($_GET['id'])){
	$fname = $_GET['fname'];
	$lastname = $_GET['lastname'];
	$username =$_GET['username'];
	$password = $_GET['password'];
	$repass = $_GET['repass'];
	$usertype = $_GET['usertype'];

	$query="UPDATE tbl_user
			SET fname = '$fname',
			 	lastname = '$lastname',
			 	username = '$username',
			 	password = '$password',
			 	repass = '$repass',
			 	usertype = '$usertype',
			WHERE id = '$id'";

	$result = $mysqli->query($query) or die($result="0");
	$result = $mysqli->affected_rows;
}
	echo $json_response = json_encode($result);

?>