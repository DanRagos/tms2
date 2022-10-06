<?php
require_once 'dbc.inc.php';
if(isset($_POST['add_act'])){
		$ext=$_POST['ext'];
			$query= "select * from extension_activity WHERE extension_act='$ext'";
							$query_run = mysqli_query($conn,$query);
							if(mysqli_num_rows($query_run)>0)
					{
						echo "<script> alert('Activity already exists') </script>
						<script>window.location = '../admin/extension_activity.php'</script>	";
					}
		
		else {	$sql="INSERT INTO `extension_activity` (`extension_act`) VALUES ('$ext')"; 
            $result = $conn->query($sql);
		echo "
			<script>alert('Activity Added')</script>	
			<script>window.location = '../admin/extension_activity.php'</script>
			";
		}
				
			}
			if(isset($_POST['add_dept'])){
		$dept=$_POST['dept'];
		$query= "select * from department WHERE department='$dept'";
							$query_run = mysqli_query($conn,$query);
							if(mysqli_num_rows($query_run)>0)
					{
						echo "<script> alert('Department already exists') </script>
						<script>window.location = '../admin/extension_activity.php'</script>	";
					}
		
		else {	$sql="INSERT INTO `department` (`department`) VALUES ('$dept')"; 
            $result = $conn->query($sql);
		echo "
			<script>alert('Activity Added')</script>	
			<script>window.location = '../admin/extension_activity.php'</script>
			";
		}
				
			}
			
?>			