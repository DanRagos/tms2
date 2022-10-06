<?php
session_start();
include 'dbc.inc.php';
	if(isset($_POST['change']))
			{
				$mem_id=$_POST['mem_id'];
				$password=$_POST['new_password'];
				$cpassword=$_POST['cpassword'];
				
				if ($password==$cpassword) {
			$query="UPDATE `users` SET `password` = '$password' WHERE mem_id = '$mem_id' " ;
		$result=$conn->query($query);
						if ($_SESSION['type']!="admin") {
                 				echo "
				<script>alert('Password changed')</script>
				<script>window.location = '../user/index.php'</script>
				";
						}
						else {
						echo "
				<script>alert('Password changed')</script>
				<script>window.location = '../admin/index.php'</script>
				";    
						}
				}
				
				
			else { 
			    if ($_SESSION['type']!="admin") {
                 				echo "
				<script>alert('Password not matched')</script>
				<script>window.location = '../user/index.php'</script>
				";
						}
						else {
						echo "
				<script>alert('Password not matched')</script>
				<script>window.location = '../admin/index.php'</script>
				";    
						}
		
			}
			
			}
		?>