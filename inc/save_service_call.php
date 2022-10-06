<?php
	session_start();
	require '../inc/dbc.inc.php';
	if(isset($_POST['add_sched'])) {
	$service_call = date('Y-m-d',strtotime( $_POST['service_call']));
		$client_id = $_POST['client_id'];
		$machine_Type = $_POST['machine_Type'];
		$query = "INSERT INTO `schedule` (`schedule_id`, `client_id`, `machine_id`, `schedule_date`) values(NULL, '$client_id', '$machine_Type', '$service_call')";			
		$result=$conn->query($query);
		echo "<script type='text/javascript'>
			alert('Schedule added successfully');
			document.location='../pages/pms.php';
		</script> ";
		
	}
?>