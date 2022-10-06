<?php
session_start();
require '../inc/dbc.inc.php';
	
if(isset($_POST['save'])){	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$username= $_POST['username'];
	$email= $_POST['email'];
	$password=$_POST['password'];
	$department=$_POST['department'];	
	$activity=$_POST['extension_act'];
	$query= "select * from users WHERE email='$email' OR username='$username'";
							$query_run = mysqli_query($conn,$query);
							if(mysqli_num_rows($query_run)>0)
					{
						// there is already a user with the same username
						echo "<script> alert('Username or email already exists.. try another username') </script>
						<script>window.location = '../index.php'</script>
				";
					}
					else {
	 $query= "INSERT INTO `users` (`mem_id`, `firstname`, `lastname`, `username`, `email`, `password`, `department`, `type`, `extension_activity`, `imglink`) VALUES (NULL, '$firstname', '$lastname', '$username', '$email', '$password', '$department', 'admin', '$activity`', '../avatar.png')";
						$result=$conn->query($query);
		echo "
			<script>alert('Admin created')</script>
			<script>window.location = '../admin/users.php'</script>
			";
					}
}
?>