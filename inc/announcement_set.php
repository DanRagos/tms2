<?php
	session_start();
	require '../inc/dbc.inc.php';
	if(isset($_POST['annouce_set'])) {
		$posted_by=$_POST['posted_by'];
		$posted_at=$_POST['posted_at'];
		$anoun_name=$_POST['anoun_name'];
		$message=$_POST['message'];
	$date = date("Y-m-d H:i:s", strtotime("+8 HOURS"));		
		$query="insert into announcement (posted_by, posted_at, name, body) values('$posted_by','$date','$anoun_name', '$message')";			
		$result=$conn->query($query);
		$query3= "INSERT INTO `notification` (`id`, `user_id`, `action`, `action1`, `date`) VALUES (NULL, '$mem_id', 'Posted an announcement', '../user/index.php', '$date')";
						$result4=$conn->query($query3);
		header('location:../admin/index.php');
	}
?>