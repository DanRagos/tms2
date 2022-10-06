<?php	
	session_start();
	require '../inc/dbc.inc.php';
	if(isset($_POST['edit_profile'])) {
		$mem_id= $_POST['mem_id'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$mem_id=$_POST['mem_id'];
		$department=$_POST['department'];
		$activity=$_POST['activity'];
		$email=$_POST['email'];
		//database
		$query = "UPDATE `users` SET `firstname` = '$firstname', `lastname` = '$lastname', `email` = '$email', `department` = '$department', 
			`extension_activity` = '$activity' WHERE mem_id = '$mem_id'";
		$result=$conn->query($query);
		if ($_SESSION['type']!="admin") {
                 				echo "
				<script>alert('Profile Edited')</script>
				<script>window.location = '../user/myaccount.php'</script>
				";
						}
						else {
						echo "
				<script>alert('Profile Edited')</script>
				<script>window.location = '../admin/myaccount.php'</script>
				";    
						}
	}
		elseif(isset($_POST['update_file'])) {
		$mem_id= $_POST['mem_id'];
		$img_name = $_FILES['imglink']['name'];
		$img_size =$_FILES['imglink']['size'];
		$img_tmp =$_FILES['imglink']['tmp_name'];
		$directory = '../userpics/';
		$target_file = $directory.$img_name;
		move_uploaded_file($img_tmp,$target_file); 
		$query = "UPDATE `users` SET `imglink` = '$target_file' WHERE mem_id = '$mem_id'";
		$result=$conn->query($query);
		$_SESSION['imglink'] = $target_file;
		if ($_SESSION['type']!="admin") {
                 				echo "
				<script>alert('Profile Edited')</script>
				<script>window.location = '../user/myaccount.php'</script>
				";
						}
						else {
						echo "
				<script>alert('Profile Edited')</script>
				<script>window.location = '../admin/myaccount.php'</script>
				";    
						}
		}
?>