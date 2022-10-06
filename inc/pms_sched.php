<?php 
require_once('../inc/dbc.inc.php');
$date_today = date('Y-m');
$sched_res = [];
$query = mysqli_query($conn, "  select schedule.schedule_id, schedule.client_id, 
schedule.machine_id, schedule.schedule_date,schedule.status, clients.client_name,clients.client_address, machine.machine_model from ((schedule INNER join clients on
 schedule.client_id = clients.client_id)
   INNER JOIN machine on machine.machine_id = schedule.machine_id) where schedule.status != '2'") or die(mysqli_error());
while($row = mysqli_fetch_array($query)){
    $row['sdate'] = date("F d, Y",strtotime($row['schedule_date']));
	$date1 = date("Y-m",strtotime($row['sdate']));
	$schedule_id = $row['schedule_id'];
	if ($row ['schedule_date'] < $date_today) {
		$query2 = "UPDATE `schedule` SET `status` = '1' WHERE `schedule`.`schedule_id` = '$schedule_id' and `schedule`.`status` !='2'";
		$result2=$conn->query($query2);
		echo $schedule_id;	
	}
	$row['edate'] = $row['client_id'];
	switch($row['status']) 
	{case 0:
	$row['color'] = "Blue";
	$row['sched_status'] = "Not done";
	break;
	case 1: 
	$row['color'] = "Red";
	$row['sched_status'] = "Delayed";
	break;
	case 2:
	$row['color'] = "Green";
	$row['sched_status'] = "Done";
	break;	
	case 3:
	$row['color'] = "Orange";
	$row['sched_status'] = "Unresolved";
	break;
	}
		
	$row['machine'] = $row['machine_model'];
	$row['cl_address'] = $row['client_address'];
	$row['title'] = $row['client_name'] ;
   $sched_res[$row['schedule_id']] = $row;
				
		

}
?>