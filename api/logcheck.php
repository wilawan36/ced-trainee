<?php
SESSION_START();

require_once 'include/db.php';

if(isset($_SESSION['username']) and ($_SESSION['password']))
{
   
	$username =  $_SESSION['username'];
	$password   =  $_SESSION['password'];
}
else 
{ 
        $username = $_GET['username'];
        $password   = $_GET['password'];
}

//$username = $_POST["username"];
//$password = $_POST["password"];

$query="SELECT * From tbl_user WHERE username = '$username' and password = '$password'";

$query2 = mysql_query($query) or die("Error111");
 

if(mysql_num_rows($query2))
{

   $_SESSION['username'] = $username;

   $_SESSION['password']  = $password;
}

	$result = $mysqli->query($query) or die($result="0");
	$result = $mysqli->affected_rows;

   echo $json_response = json_encode($result);



?>