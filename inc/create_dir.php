<?php
include 'dbc.inc.php';
	if(ISSET($_POST['add'])){
		$dir = str_replace(" ", "", $_POST['dir']);
		if(!file_exists($dir)){
		mkdir("../files/".$dir);
			$sql="INSERT INTO `folder` (`folder_id`, `name`) VALUES (NULL, '$dir')";
            $result = $conn->query($sql);
			echo "<script>alert('You create directory successfully')</script>";
			echo "<script>window.location='../admin/folder.php'</script>";
		}
		else {
			echo "<script>alert('Already exist')</script>";
				echo "<script>window.location='../admin/folder.php'</script>";
		}
	}
?>
