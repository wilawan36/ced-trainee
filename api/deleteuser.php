<?php
	require_once 'include/db.php'; // The mysql database connection script
	if(isset($_GET['id'])){
  	$id = $_GET['id'];

		$id = $_GET['id'];
		$query="DELETE FROM tbl_user WHERE id='$id'";

		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	}
?>