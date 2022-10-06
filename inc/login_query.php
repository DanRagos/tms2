<?php
		
	session_start();
	require 'dbc.inc.php';
	
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$date = date("Y-m-d H:i:s", strtotime("+8 HOURS"));
			$query="select * from users WHERE username='$username' AND password='$password'";
			$query_run = mysqli_query($conn,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$row = mysqli_fetch_assoc($query_run);
				// valid
				$mem_id= $row['mem_id'];
				$_SESSION['imglink']=$row['imglink'];		
				$_SESSION['username']= $row['username'];
				$_SESSION['firstname']= $row['firstname'] ;
				$_SESSION['lastname']=$row['lastname'];
				$_SESSION['type']= $row['type'];
				$_SESSION['id']= $row['mem_id'];
				
			echo " <script>alert('Welcome')</script>
				<script>window.location = '../pages/dashboard.php'</script> ";
			
		}
			else
			{
				// invalid
			echo "<script type='text/javascript'>alert('Invalid Credentials!');
				  document.location='../index.php'</script>";	
				  
			
			}
		}
	
		?>