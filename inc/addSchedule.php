<?php
	session_start();
	require '../inc/dbc.inc.php';
	if(isset($_POST['add_sched'])) {
		$mem_id = $_SESSION['id'];
		$date = date("Y-m-d H:i:s", strtotime("+8 HOURS"));
		$title = $_POST['title'];
		$date_from = $_POST['date_from'];
		$date_to = $_POST['date_to'];
		$color = $_POST['color'];
		$query = "INSERT INTO `events` (`title`, `start_event`, `end_event`, `color`) values('$title', '$date_from', '$date_to', '$color')";			
		$result=$conn->query($query);
		$query3= "INSERT INTO `notification` (`id`, `user_id`, `action`, `action1`, `date`) VALUES (NULL, '$mem_id', 'Posted a schedule', '../user/index.php', '$date')";
						$result4=$conn->query($query3);
		echo "<script type='text/javascript'>
			alert('Schedule Added!!');
			document.location='../admin/list-of-schedules.php';
		</script> ";
		
	}
?>