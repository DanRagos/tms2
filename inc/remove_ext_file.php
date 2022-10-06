<?php
	require_once '../inc/dbc.inc.php';	
	session_start();
		if(ISSET($_REQUEST['id'])){
			$mem_id= $_SESSION['id'];
		$file_id = $_REQUEST['id'];
		$query = mysqli_query($conn, "SELECT * FROM `extactivity_file` WHERE `id` = '$file_id'") or die(mysqli_error());
		$fetch  = mysqli_fetch_array($query);
		$filename = $fetch['file_name'];
		$date = date("Y-m-d H:i:s", strtotime("+8 HOURS"));
		$location= $fetch['location'];
		if(unlink($location)){
			mysqli_query($conn, "DELETE FROM `extactivity_file` WHERE `id` = '$file_id'") or die(mysqli_error());
				$query2= "INSERT INTO `history_log1` (`log_id`, `user_id`, `action`, `action_time`) VALUES (NULL, '$mem_id', 'Deleted $filename', '$date')";
						$result3=$conn->query($query2);
					if ($_SESSION['type']!="admin") {
        	echo "
			<script>alert('$filename deleted')</script>
			<script>window.location = '../user/extension_activity.php'</script>
			";
    }
        else {
			echo "
			<script>alert('$filename deleted')</script>
			<script>window.location = '../admin/extension_activity.php'</script>
			"; }	
		}
		}