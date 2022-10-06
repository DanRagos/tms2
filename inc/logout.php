<?php
	require_once 'dbc.inc.php';

	session_start();
	date_default_timezone_set("asia/manila");
	$date = date("Y-m-d H:i:s", strtotime("+8 HOURS"));
	$mem_id= $_SESSION['id'];
	$query2= "INSERT INTO `history_log1` (`log_id`, `user_id`, `action`, `action_time`) VALUES (NULL, '$mem_id', 'Logged Out', '$date')";
						$result3=$conn->query($query2);
	$_SESSION = NULL;
	$_SESSION = [];
	session_unset();
	session_destroy();
	
	echo "<script type='text/javascript'>
		alert('Logout Successfully!');
		document.location='../index.php';
	</script>";
?>