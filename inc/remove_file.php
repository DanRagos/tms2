<?php
	require_once '../inc/dbc.inc.php';	
	session_start();
		if(ISSET($_REQUEST['file_id'])){
			$mem_id= $_SESSION['id'];
		$file_id = $_REQUEST['file_id'];
		$query = mysqli_query($conn, "SELECT * FROM `file` WHERE `file_id` = '$file_id'") or die(mysqli_error());
		$fetch  = mysqli_fetch_array($query);
		$filename = $fetch['name'];
		$date = date("Y-m-d H:i:s", strtotime("+8 HOURS"));
		$doc_type = $fetch['doc_type'];
		$location= $fetch['location'];
		if(unlink($location)){
			mysqli_query($conn, "DELETE FROM `file` WHERE `file_id` = '$file_id'") or die(mysqli_error());
					if ($doc_type=="1") {
						mysqli_query($conn, "DELETE FROM `memorandum_agreement` WHERE `file_id` = '$file_id'") or die(mysqli_error());
					}
					elseif ($doc_type=="2") {
						mysqli_query($conn, "DELETE FROM `minutes_meeting` WHERE `file_id` = '$file_id'") or die(mysqli_error());
					}
					elseif ($doc_type=="3") {
						mysqli_query($conn, "DELETE FROM `incoming_comm` WHERE `file_id` = '$file_id'") or die(mysqli_error());
					}
					elseif ($doc_type=="4") {
						mysqli_query($conn, "DELETE FROM `outgoing_comm` WHERE `file_id` = '$file_id'") or die(mysqli_error());
					}
				 elseif ($doc_type=="5") {
						mysqli_query($conn, "DELETE FROM `proposal_module` WHERE `file_id` = '$file_id'") or die(mysqli_error());
					}
				 elseif ($doc_type=="6") {
						mysqli_query($conn, "DELETE FROM `other` WHERE `file_id` = '$file_id'") or die(mysqli_error());
					}
					
					$query2= "INSERT INTO `history_log1` (`log_id`, `user_id`, `action`, `action_time`) VALUES (NULL, '$mem_id', 'Deleted $filename', '$date')";
						$result3=$conn->query($query2);
				 	 if ($_SESSION['type']!="admin") {
        	echo "
			<script>alert('File deleted')</script>
			<script>window.location = '../user/file_download.php'</script>
			";
    }
        else {
			echo "
			<script>alert('File deleted')</script>
			<script>window.location = '../admin/file_download.php'</script>
			"; }
		}
						}
	
?>