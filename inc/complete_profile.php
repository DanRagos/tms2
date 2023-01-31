<?php	
	session_start();
	require_once '../inc/dbc.inc.php';

	$notif_date =date("Y-m-d H:i:s");
	if(isset($_POST['complete_profile'])) {
		$username=$_POST['username'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$firstname=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		//para sa upload ng image
		$img_name = $_FILES['imglink']['name'];
		$img_size =$_FILES['imglink']['size'];
		$source = $_FILES['imglink']['tmp_name'];
		$img_tmp =$_FILES['imglink']['tmp_name'];
		$directory = '../userpics/';
		$target_file = $directory.$img_name;
		$ext = pathinfo($img_name, PATHINFO_EXTENSION);
			if ($ext = "jpg" || $ext = "jpeg" ) {
				$create = imagecreatefromjpeg ($source) ;
			}
			elseif ($ext = "png") {
				$create = imagecreatefrompng ($source) ;
			}
			else {
				
			}
		
	
		$date = date("Y-m-d H:i:s", strtotime("+8 HOURS"));
		imagejpeg  ( $create , $target_file, 80); 
			
		$query="INSERT INTO `users` (`mem_id`, `firstname`, `lastname`, `username`, `email`, `password`, `type`, `imglink`) VALUES ('', '$firstname', '$lastname', '$username', '$email', '$password', '', '$target_file')";
		$result=$conn->query($query);
		$query1= "select * from users WHERE username='$username'";
		$query_run = mysqli_query($conn,$query1);
		if(mysqli_num_rows($query_run)>0) { 
			$row = mysqli_fetch_assoc($query_run);
		$_SESSION['id'] = $row['mem_id'];
		}
			$_SESSION['imglink']=$target_file;		
			$_SESSION['username']= $username;		
				$_SESSION['firstname']= $firstname;
				$_SESSION['lastname']=$lastname;
	
		$notif_user = $_SESSION['id'];
	$notif_name = $_SESSION['firstname'];
	$notif_desc = $firstname." has join";
		include 'notification_pusher.php' ;
	
		echo "
			<script>alert('Welcome')</script>
			<script>window.location = '../pages/dashboard.php'</script>
			";
	}
		elseif(isset($_POST['edit_profile'])) {
		$id = $_SESSION['id'];	
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		//para sa upload ng image
		$img_name = $_FILES['imglink']['name'];
		if ($img_name) {
		$img_size =$_FILES['imglink']['size'];
		$source = $_FILES['imglink']['tmp_name'];
		$img_tmp =$_FILES['imglink']['tmp_name'];
		$directory = '../userpics/';
		$target_file = $directory.$img_name;
		$ext = pathinfo($img_name, PATHINFO_EXTENSION);
			if ($ext = "jpg" || $ext = "jpeg" ) {
				$create = imagecreatefromjpeg ($source) ;
			}
			elseif ($ext == "png") {
				$create = imagecreatefrompng ($source) ;
			}
			else {
				
			}
		
	
		$date = date("Y-m-d H:i:s", strtotime("+8 HOURS"));
		imagejpeg  ( $create , $target_file, 100); 
		
			$_SESSION['imglink'] = $target_file;
		}
		else {
			$target_file = $_POST['target_file'];
			$_SESSION['imglink'] = $target_file;
		}
		$query="UPDATE `users` SET `firstname` = '$firstname', `lastname` = '$lastname', `email` = '$email', `password` = '$password' , `imglink` = '$target_file' WHERE `users`.`mem_id` = '$id'";
		$result=$conn->query($query);

		
					echo "<script type='text/javascript'>alert('Updated Successfully');
				  document.location='../pages/profile.php'</script>";	
	


	
		
	}
	elseif(isset($_POST['edit_user'])) {
		$id = $_POST['id'];	
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		//para sa upload ng image

		$img_name = $_FILES['imglink2']['name'];
		if ($img_name) {
		$img_size =$_FILES['imglink2']['size'];
		$source = $_FILES['imglink2']['tmp_name'];
		$img_tmp =$_FILES['imglink2']['tmp_name'];
		$directory = '../userpics/';
		$target_file = $directory.$img_name;
		$ext = pathinfo($img_name, PATHINFO_EXTENSION);
			if ($ext = "jpg" || $ext = "jpeg" ) {
				$create = imagecreatefromjpeg ($source) ;
			}
			elseif ($ext == "png") {
				$create = imagecreatefrompng ($source) ;
			}
			else {
				
			}
		
	
		$date = date("Y-m-d H:i:s", strtotime("+8 HOURS"));
		imagejpeg  ( $create , $target_file, 100); 
		}
		else {
			$target_file = $_POST['target_file'];
		}
		$query="UPDATE `users` SET `firstname` = '$firstname', `lastname` = '$lastname', `email` = '$email', `password` = '$password' , `imglink` = '$target_file' WHERE `users`.`mem_id` = '$id'";
		$result=$conn->query($query);
		
		echo "
			<script>alert('Done')</script>
			<script>window.location = '../pages/users.php'</script>
			";

		
							
		
	}
	elseif(isset($_POST['add_user'])) {
	$username=$_POST['username'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$type = $_POST['user_type'];
		//para sa upload ng image

		$img_name = $_FILES['imglink1']['name'];
		$img_size =$_FILES['imglink1']['size'];
		$source = $_FILES['imglink1']['tmp_name'];
		$img_tmp =$_FILES['imglink1']['tmp_name'];
		$directory = '../userpics/';
		$target_file = $directory.$img_name;
		$ext = pathinfo($img_name, PATHINFO_EXTENSION);
			if ($ext = "jpg" || $ext = "jpeg" ) {
				$create = imagecreatefromjpeg ($source) ;
			}
			elseif ($ext == "png") {
				$create = imagecreatefrompng ($source) ;
			}
			else {
				
			}
		
		$date = date("Y-m-d H:i:s", strtotime("+8 HOURS"));
		imagejpeg  ( $create , $target_file, 100); 
	$query="INSERT INTO `users` (`mem_id`, `firstname`, `lastname`, `username`, `email`, `password`, `type`, `imglink`) VALUES ('', '$firstname', '$lastname', '$username', '$email', '$password', '$type', '$target_file')";
		$result=$conn->query($query);
		
		echo "
			<script>alert('User Added')</script>
			<script>window.location = '../pages/profile.php'</script>
			";
		
	}
	
?>