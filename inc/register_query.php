<?php
session_start();
require 'dbc.inc.php';
	if(isset($_POST['signup']))
			{
				$username= $_POST['username'];
				$email= $_POST['email'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				
				if ($password==$cpassword) {
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
			    $query= "INSERT INTO `users` (`mem_id`, `firstname`, `lastname`, `username`, `email`, `password`,  `type`, `imglink`) VALUES (NULL, '', '', '$username', '$email', '$password', '',  '')";
						$result=$conn->query($query);
						$_SESSION['username']=$username;					
						header( "Location:profile.php"); 
			}		
				}
				
			else { 
			echo "
				<script>alert('Password not match')</script>
				<script>window.location = '../index.php'</script>
				";
			}
			
			}
		?>