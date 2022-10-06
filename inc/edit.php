<?php
	include('dbc.inc.php');
	session_start();
	$mem_id = $_SESSION ['id'];
	$name_file= $_POST['name_file'];
	$file_id=$_GET['file_id'];
	$doc_type=$_POST['doc_type'];
	$date = date("Y-m-d H:i:s", strtotime("+8 HOURS"));		
	
			if ($doc_type == "1") {
					$eff_date=$_POST['eff_date'];
	$part_agency=$_POST['part_agency'];
	$moa_description=$_POST['moa_description'];
	mysqli_query($conn,"update memorandum_agreement set effective_date='$eff_date', parties_involve='$part_agency', description='$moa_description' where file_id='$file_id'");
		 if ($_SESSION['type']!="admin") {
        	echo "
			<script>alert('File $name_file edited')</script>
			<script>window.location = '../user/myaccount.php'</script>
			";
    }
        else {
			echo "
			<script>alert('File $name_file edited')</script>
			<script>window.location = '../admin/myaccount.php'</script>
			"; }
	
		}
		elseif ($doc_type == "2") {
			 $date_meeting=$_POST['date_meeting'];
		$min_location=$_POST['min_location'];
		$participants=$_POST['participants'];
		$mim_description=$_POST['mim_description'];
	mysqli_query($conn,"update minutes_meeting set date='$date_meeting', location='$min_location', participants = '$participants' ,description='$mim_description' where file_id='$file_id'");
	 if ($_SESSION['type']!="admin") {
        	echo "
			<script>alert('File $name_file edited')</script>
			<script>window.location = '../user/myaccount.php'</script>
			";
    }
        else {
			echo "
			<script>alert('File $name_file edited')</script>
			<script>window.location = '../admin/myaccount.php'</script>
			"; }

		}
			elseif ($doc_type == "3") {
			$icm_receive_agen=$_POST['icm_receive_agen'];
		$icm_phase=$_POST['icm_phase'];
		$icm_purpose=$_POST['icm_purpose'];
		$icm_inc_date=$_POST['icm_inc_date'];
	mysqli_query($conn,"update incoming_comm set agency='$icm_receive_agen', purpose='$icm_purpose', phase = '$icm_phase' ,date='$icm_inc_date' where file_id='$file_id'");
	 if ($_SESSION['type']!="admin") {
        	echo "
			<script>alert('File $name_file edited')</script>
			<script>window.location = '../user/myaccount.php'</script>
			";
    }
        else {
			echo "
			<script>alert('File $name_file edited')</script>
			<script>window.location = '../admin/myaccount.php'</script>
			"; }

		}
			elseif ($doc_type == "4") {
			$ocm_receive_agen=$_POST['ocm_receive_agen'];
		$ocm_phase=$_POST['ocm_phase'];
		$ocm_purpose=$_POST['ocm_purpose'];
		$ocm_date=$_POST['ocm_date'];
	mysqli_query($conn,"update outgoing_comm set agency='$ocm_receive_agen', purpose='$ocm_purpose', phase = '$ocm_phase' ,date='$ocm_date' where file_id='$file_id'");
	 if ($_SESSION['type']!="admin") {
        	echo "
			<script>alert('File $name_file edited')</script>
			<script>window.location = '../user/myaccount.php'</script>
			";
    }
        else {
			echo "
			<script>alert('File $name_file edited')</script>
			<script>window.location = '../admin/myaccount.php'</script>
			"; }

		}
		elseif ($doc_type == "5") {
				$purpose=$_POST['purpose'];
	mysqli_query($conn,"update proposal_module set agenda='$purpose' where file_id='$file_id'");
	 if ($_SESSION['type']!="admin") {
        	echo "
			<script>alert('File $name_file edited')</script>
			<script>window.location = '../user/myaccount.php'</script>
			";
    }
        else {
			echo "
			<script>alert('File $name_file edited')</script>
			<script>window.location = '../admin/myaccount.php'</script>
			"; }

		}
		elseif ($doc_type == "6") {
					$name=$_POST['name'];
		$description=$_POST['description'];
	mysqli_query($conn,"update other set name='$name', description= '$description' where file_id='$file_id'");
			 if ($_SESSION['type']!="admin") {
        	echo "
			<script>alert('File $name_file edited')</script>
			<script>window.location = '../user/myaccount.php'</script>
			";
    }
        else {
			echo "
			<script>alert('File $name_file edited')</script>
			<script>window.location = '../admin/myaccount.php'</script>
			"; }

		}
$query2= "INSERT INTO `history_log1` (`log_id`, `user_id`, `action`, `action_time`) VALUES (NULL, '$mem_id', 'Updated $name_file', '$date')";
			$result3=$conn->query($query2);		
?>