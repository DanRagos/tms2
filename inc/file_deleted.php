<?php
	require_once '../inc/dbc.inc.php';	
	session_start();
		if(ISSET($_REQUEST['report_id'])){
			$mem_id= $_SESSION['id'];
			$user= $_SESSION['firstname'];
		$file_id = $_REQUEST['report_id'];
		$query = mysqli_query($conn, "SELECT * FROM `report` WHERE `report_id` = '$file_id'") or die(mysqli_error());
		$fetch  = mysqli_fetch_array($query);
		$filename = $fetch['report_name'];
		$date = date("Y-m-d H:i:s", strtotime("+8 HOURS"));
		$location= $fetch['location'];
		if(unlink($location)){
			mysqli_query($conn, "DELETE FROM `report` WHERE `report_id` = '$file_id'") or die(mysqli_error());
				
					
					$query2= "INSERT INTO `notification` (`notif_id`, `notif_user`, `notif_name`, `notif_desc`,`notif_date`) 
					VALUES (NULL, '$mem_id', '$user','Deleted $filename', '$date')";
						$result3=$conn->query($query2);
				 
        	echo "
			<script>alert('File deleted')</script>
			<script>window.location = '../pages/report.php'</script>
			";
    
		}
		else {
			mysqli_query($conn, "DELETE FROM `report` WHERE `report_id` = '$file_id'") or die(mysqli_error());
				
					
					$query2= "INSERT INTO `notification` (`notif_id`, `notif_user`, `notif_name`, `notif_desc`,`notif_date`) 
					VALUES (NULL, '$mem_id', '$user','Deleted $filename', '$date')";
						$result3=$conn->query($query2);
				 
        	echo "
			<script>alert('File deleted')</script>
			<script>window.location = '../pages/report.php'</script>
			";
			
		}
						}
	
?>