<?php
	session_start();
	require '../inc/dbc.inc.php';
	if(isset($_POST['proposal_set'])) {	
		$mem_id=$_POST['mem_id'];
		$docu_id=$_POST['docu_id'];
		$purpose=$_POST['purpose'];
		$folder_destin=$_POST['folder_destin'];
		$file_name = $_FILES['file']['name'];
		$acceptedtext = array ("pdf");
		$extension = pathinfo($file_name , PATHINFO_EXTENSION);
		$file_type = $_FILES['file']['type'];
		$file_temp = $_FILES['file']['tmp_name'];
		$sql = "SELECT * FROM folder WHERE `folder_id` = '$folder_destin' ";  
                $result = mysqli_query($conn, $sql);  
                while($row = mysqli_fetch_array($result)) {
				$folder_destin1 = $row['name'];}
		$location = "../files/".$folder_destin1."/".$file_name;
		$date = date("Y-m-d H:i:s", strtotime("+8 HOURS"));
      $queryun= "select * from file WHERE name='$file_name'";
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
			$sql="insert into `file` (file_id, name, doc_type, user_id, location, date_uploaded, folder) values (NULL, '$file_name', '$docu_id', '$mem_id' , '$location', '$date', '$folder_destin')"; 
			$result = $conn->query($sql);
			$row = $conn->query("SELECT * FROM `file` where name='$file_name'") or die(mysqli_error());
    					while($fetch = $row->fetch_assoc()){
						$file_name1=$fetch['file_id'];
							$sql2="insert into `proposal_module` (id, file_id, file_name ,agenda) values (NULL, '$file_name1', '$file_name', '$purpose')";
							$result2 = $conn->query($sql2);
							$query2= "INSERT INTO `history_log1` (`log_id`, `user_id`, `action`, `action_time`) VALUES (NULL, '$mem_id', 'Uploaded $file_name', '$date')";
							$result3=$conn->query($query2);
								$query3= "INSERT INTO `notification` (`id`, `user_id`, `action`, `action1`, `date`, `comment_status`, `pop_up`, `user_seen`) VALUES (NULL, '$mem_id', 'Uploaded $file_name','../inc/view_pdf.php?file_id=$file_name1', '$date', '0', '0', '0')";
					$result4=$conn->query($query3);
		
		if ($_SESSION['type']!="admin") {
        	echo "
			<script>alert('File Uploaded')</script>
			<script>window.location = '../user/file_upload.php'</script>
			";
    }
        else {
			echo "
			<script>alert('File Uploaded')</script>
			<script>window.location = '../admin/file_upload.php'</script>
			"; }
						}
		}
		
	
	}
?>



