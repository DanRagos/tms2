<?php
session_start();
include 'dbc.inc.php';
	if(isset($_POST['act_set']))
			{
				$extension_act=$_POST['extension_act'];
				$mem_id=$_SESSION['id'];
				$eff_date=$_POST['eff_date'];
				$folder_destin=$_POST['folder_destin'];
				$description=$_POST['description'];
				$file_name = $_FILES['file']['name'];
				$date = date("Y-m-d H:i:s", strtotime("+8 HOURS"));
				$file_type = $_FILES['file']['type'];
				$acceptedtext = array ("pdf");
				$extension = pathinfo($file_name , PATHINFO_EXTENSION);
				$file_temp = $_FILES['file']['tmp_name'];
				$sql = "SELECT * FROM folder WHERE `folder_id` = '$folder_destin' ";  
                $result = mysqli_query($conn, $sql);  
                while($row = mysqli_fetch_array($result)) {
				$folder_destin1 = $row['name'];}
		$location = "../files/".$folder_destin1."/".$file_name;
			$queryun= "select * from extactivity_file WHERE file_name='$file_name'";
							$query_run = mysqli_query($conn,$queryun);
							if(mysqli_num_rows($query_run)>0){

			  if ($_SESSION['type']!="admin") {
        	echo "
			<script>alert('File already exists, try to rename your file')</script>
			<script>window.location = '../user/file_upload.php'</script>
			";
    }
        else {
			echo "
			<script>alert('File already exists, try to rename your file')</script>
			<script>window.location = '../admin/file_upload.php'</script>
			"; }
        
		}	
		
		else if ( !in_array ($extension, $acceptedtext)) { 

			 if ($_SESSION['type']!="admin") {
        	echo "
			<script>alert('File is not PDF!')</script>
			<script>window.location = '../user/file_upload.php'</script>
			";
    }
        else {
			echo "
			<script>alert('File is not PDF!')</script>
			<script>window.location = '../admin/file_upload.php'</script>
			"; }
}
			else if (move_uploaded_file($file_temp, $location)){
$sql2= "INSERT INTO `extactivity_file` (`id`, `extension_act`, `user_id`, `file_name`, `location`, `folder`, `description`, `date`, `date_uploaded`) VALUES (NULL, '$extension_act', '$mem_id', '$file_name', '$location', '$folder_destin','$description', '$eff_date', '$date')";
$result2 = $conn->query($sql2);
		$query2= "INSERT INTO `history_log1` (`log_id`, `user_id`, `action`, `action_time`) VALUES (NULL, '$mem_id', 'Uploaded $file_name', '$date')";
						$result3=$conn->query($query2);
			        if ($_SESSION['type']!="admin") {
        	echo "
			<script>alert('File Uploaded')</script>
			<script>window.location = '../user/extension_activity.php'</script>
			";
    }
        else {
			echo "
			<script>alert('File Uploaded')</script>
			<script>window.location = '../admin/extension_activity.php'</script>
			"; }	
		}
			}
			
			if(isset($_POST['act_new'])){
				$ext_activity=$_POST['ext_activity'];
			mysqli_query($conn, "INSERT INTO `extension_activity` VALUES('$ext_activity')") or die(mysqli_error());		
				
			}
			
			
		?>