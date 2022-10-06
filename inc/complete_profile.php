<?php	
	session_start();
	require_once '../inc/dbc.inc.php';
	if(isset($_POST['btnprofile'])) {
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$mem_id=$_POST['mem_id'];
		$department=$_POST['department'];
		$type=$_POST['type'];
		$activity=$_POST['activity'];
		//para sa upload ng image
		$img_name = $_FILES['imglink']['name'];
		$img_size =$_FILES['imglink']['size'];
		$img_tmp =$_FILES['imglink']['tmp_name'];
		$directory = '../userpics/';
		$target_file = $directory.$img_name;
		$date = date("Y-m-d H:i:s", strtotime("+8 HOURS"));
		move_uploaded_file($img_tmp,$target_file); 	
		$query="UPDATE `users` SET `firstname` = '$firstname', `lastname` = '$lastname', `department` = '$department', `type` = '$type', `extension_activity` = '$activity', `imglink` = '$target_file' WHERE mem_id = '$mem_id' " ;
		$result=$conn->query($query);
		$query1= "select * from users WHERE mem_id='$mem_id'";
		$query_run = mysqli_query($conn,$query1);
		if(mysqli_num_rows($query_run)>0) {
			$row = mysqli_fetch_assoc($query_run);
			$_SESSION['imglink']=$row['imglink'];		
			$_SESSION['username']= $row['username'];
			$_SESSION['type']= $row['type'];
			$_SESSION['id']= $row['mem_id'];
			$_SESSION['imglink']=$row['imglink'];		
				$_SESSION['firstname']= $row['firstname'] ;
				$_SESSION['lastname']=$row['lastname'];
				
			$query2= "INSERT INTO `history_log1` (`log_id`, `user_id`, `action`, `action_time`) VALUES (NULL, '$mem_id', 'Create an account', '$date')";
						$result2=$conn->query($query2);
						$query3= "INSERT INTO `department` (`id`, `department`) VALUES (NULL, '$department')";
						$result3=$conn->query($query3);
		}
		header('location:../user/index.php');
		echo "
			<script>alert('Password not match')</script>
			<script>window.location = '../index.php'</script>
			";
	}
?>