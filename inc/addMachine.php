<?php
session_start();
require '../inc/dbc.inc.php';
	
if(isset($_POST['addMachine'])){	
	$machineType=$_POST['machineType'];
	$machineName=$_POST['machineName'];
	$query= "INSERT INTO `machine` (`machine_id`, `machine_type`, `machine_model`) VALUES (NULL, '$machineType', '$machineName')";
	$result=$conn->query($query);
		echo "
			<script>alert('$machineType $machineName')</script>
			<script>window.location = '../pages/clients.php'</script>
			";
}
?>
