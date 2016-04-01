<?php
	session_start();

	require_once 'include/db.php';

	if(isset($_SESSION["usertype"])=="student") {
	
	header("Location:shoHisStudent.html");
	}
?>