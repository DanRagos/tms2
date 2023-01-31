<?php
session_start();
require '../inc/dbc.inc.php';
$date_today = date('Y-m');
$notif_user = $_SESSION['id'];
	$notif_name = $_SESSION['firstname'];
	$notif_date =date("Y-m-d H:i:s");
if(isset($_POST['update_sched'])) {
	$id = $_POST['id'];
	$client_name = $_POST['title'];
	$schedule_date = $_POST['schedule_date'];
	$resched=$_POST['resched'];
	$client_name= substr($client_name,0,8);
	$client_name= $client_name.'...';
	$notif_desc =$notif_name." resched  ".$client_name."from ".$schedule_date." to ".$resched;
	$resched = date('Y-m-d', strtotime($resched));


	
		$query2 = "UPDATE `schedule` SET `schedule_date` = '$resched' WHERE `schedule`.`schedule_id` = '$id'";
		$result2=$conn->query($query2);
	
		echo "
			<script>alert('Date reched Successfully')</script>
			<script>window.location = '../pages/pms.php'</script>
			";
}
elseif(isset($_POST['edit_schedules'])) {
	$schedule_id = $_POST['schedule_id'];
	$contract_id = $_POST['contract_id'];
	$schedule_date = $_POST['schedule_date'];
	$schedule_date = date('Y-m-d', strtotime($schedule_date));
	
		$query3 = "UPDATE `schedule` SET `schedule_date` = '$schedule_date' WHERE `schedule`.`schedule_id` = '$schedule_id'";
		$result3=$conn->query($query3);
	
		echo "
			<script>alert('Date reched Successfully')</script>
			<script>window.location = '../pages/pms.php'</script>
			";
}
?>