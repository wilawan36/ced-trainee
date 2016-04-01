<?php
require_once 'include/db.php';

if (isset($_GET['techfname'])) {
	$techfname = $_GET['techfname'];
	$techlname = $_GET['techlname'];
	$techPhone =$_GET['techPhone'];
	$techemail = $_GET['techemail'];
	$dateStart = $_GET['dateStart'];
	$dateEnd = $_GET['dateEnd'];

	$query="INSERT INTO department
			VALUES ('','$techfname','$techlname','$techPhone','$techemail','$dateStart','$dateEnd')";

	$result = $mysqli->query($query) or die($result="0");
	$result = $mysqli->affected_rows;
}
	echo $json_response = json_encode($result);

?>
