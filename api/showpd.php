<?php
	require_once 'include/db.php';
   $query = "SELECT * FROM tbl_user ORDER BY fname";
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$arr = array();
	if($result->num_rows > 0) {
  		while($rs = $result->fetch_assoc()) {
    		$arr[] = $rs;
  			}
		}
	header('Content-type: application/json');
	echo json_encode($arr);
?>