<?php
	require_once '../inc/dbc.inc.php';
	if(ISSET($_REQUEST['id'])){
		$file_id = $_REQUEST['id'];
		$query = mysqli_query($conn, "SELECT * FROM `generated_report` WHERE `id` = '$file_id'") or die(mysqli_error());
		$fetch  = mysqli_fetch_array($query);
		$location= $fetch['location'];
		$filename = $fetch['report_name'];
		header("Content-Disposition: attachment; filename=".$filename);
		header("Content-Type: application/octet-stream;");
		readfile($location);
	}
?>