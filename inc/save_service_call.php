<?php
	session_start();
	require '../inc/dbc.inc.php';
	if(isset($_POST['add_sched'])) {
	$service_call = date('Y-m-d',strtotime( $_POST['service_call']));
	
		$client_id = $_POST['client_id'];

		 $clientName = $_POST['client_name'];
		  $rep_problem = $_POST['problem'];
	 
		
		$machine_Type = $_POST['machine_Type'];
		$model = $_POST['brand'].' / '. $_POST['model'];
		$query = "INSERT INTO `schedule` (`schedule_id`, `client_id`, `machine_type`, `model`, `schedule_date`,`guest`,`rep_problem`) values (NULL, '$client_id', '$machine_Type', '$model',  '$service_call', '$clientName', '$rep_problem')";			
		$result=$conn->query($query);
		
		   echo "<script> alert('Schedule Successfully Saved.'); location.replace('../pages/pms.php') </script>";
	}
?>