<?php
	session_start();
	require_once 'include/db.php'; 










/*
	$query="select * from tbl_user  where username = '$username' and password = '$password'  ";
	//$query2 = mysql_query($query, $c) or die("Error111");
	//$strSQL = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['txtUsername'])."' 
	//and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	
	$objQuery = mysql_query($query) or die("Error111");
	//$objResult = mysql_fetch_array($objQuery);
	if(!$objQuery)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["id"] = $objQuery["id"];
			$_SESSION["usertype"] = $objQuery["usertype"];

			session_write_close();
			
			if($objQuery["usertype"] == "admin")
			{
				header("location:admin_page.php");
			}
			else if($objQuery["usertype"] == "student")
			{
				header("location:user_page.php");
			}
			else 
			{
				header("location:project/login.html");
			}
	}
	mysql_close();
	*/
?>

