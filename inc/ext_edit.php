<?php
	include('dbc.inc.php');
	session_start();
	$mem_id = $_SESSION ['id'];
	$name_file = $_POST['name_file'];
	$file_id=$_GET['id'];
	$extension_act= $_POST['extension_act'];
	$description = $_POST['description'];
	$eff_date = $_POST['eff_date'];
	$date = date("Y-m-d H:i:s", strtotime("+8 HOURS"));		
	  	mysqli_query($conn,"update extactivity_file set extension_act='$extension_act', description='$description', date='$eff_date' where id='$file_id'");
		$query2= "INSERT INTO `history_log1` (`log_id`, `user_id`, `action`, `action_time`) VALUES (NULL, '$mem_id', 'Updated $name_file', '$date')";
			$result3=$conn->query($query2);	
		echo "
			<script>alert('File $name_file edited')</script>
			<script>window.location = '../admin/extension_activity.php'</script>
			";
	?>