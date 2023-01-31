<?php
session_start();
require '../inc/dbc.inc.php';
	
if(isset($_POST['addMachine'])){	
	$machineType=$_POST['machineType'];
	$machineName=$_POST['machineName'];
	$query="select * from machine WHERE machine_model='$machineName'";
			$query_run = mysqli_query($conn,$query);
			if(mysqli_num_rows($query_run)>0)
			{
					echo "<script type='text/javascript'>alert('Machine already existed');
				  document.location='../pages/clients.php'</script>";
			}
			else {
	$query= "INSERT INTO `machine` (`machine_id`, `machine_type`, `machine_model`) VALUES (NULL, '$machineType', '$machineName')";
	$result=$conn->query($query);
		echo "
			<script>alert('$machineType $machineName')</script>
			<script>window.location = '../pages/clients.php'</script>
			";
			}
}
?>
