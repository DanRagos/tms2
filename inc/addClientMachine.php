<?php
session_start();
require '../inc/dbc.inc.php';
$date_today = date('Y-m');
$date_tod = date('Y-m-d');
$notif_user = $_SESSION['id'];
	$notif_name = $_SESSION['firstname'];
	$notif_date =date("Y-m-d H:i:s");
	$count = 0; 
	$pms_count = 0;
	$status = 0; 

if(isset($_POST['addClientMachine'])){	
$firstpms = $_POST['firstpms'];
$clientName=$_POST['client_name'];
$clientId=$_POST['clientId'];

$frequency=$_POST['frequency'];
$machineType=$_POST['machineType'];
$brand=$_POST['brand'];
$model=$_POST['model'];
$machine = $brand.' / '.$model;
$status=$_POST['status'];
$notif_desc = $clientName." contract created";
$datefilter=$_POST['datefilter'];

do {
	$contract_id= uniqid();
$query="select * from contract WHERE contract_id='$contract_id'";
			$query_run = mysqli_query($conn,$query);
			
}
			while(mysqli_num_rows($query_run)>0);
			
//split 2 dates
$string=$datefilter;
$last_space = strrpos($string, ' ');
$last_word = substr($string, $last_space);
$first_chunk = substr($string, 0, $last_space - 2);

	$last_word = date('Y-m-d', strtotime($last_word));
$first_chunk = date('Y-m-d', strtotime($first_chunk));



$query= "INSERT INTO `contract` (`contract_id`, `client_id`, `machine_type`, `model`, `frequency`, `turn_over`, `coverage`, `status`) VALUES ('$contract_id', '$clientId', '$machineType','$machine', '$frequency', '$first_chunk', '$last_word', '$status')";
						$result=$conn->query($query);
						
//insert schedules by looping
if ($frequency =="Quarterly"  ){
	$num = 3;
}
elseif  ($frequency =="Semi-Annually" ){
$num = 6; }
elseif($frequency =="Annually" ){
	$num = 12;
	}
	else {
		
	}
	
	

do {
	$first_chunk = date('Y-m-d', strtotime("+$num months", strtotime($first_chunk)));
	$count++;		
} 
while($first_chunk < $last_word);

if ($firstpms) {
	$first_chunk = date('Y-m-d', strtotime($firstpms));

	}	

while ($count > $pms_count) {

 $query1= "INSERT INTO `schedule` (`schedule_id`, `client_id`, `machine_type`, `model`, `contract_id`, `schedule_date`, `status`) 
 VALUES (NULL, '$clientId', '$machineType', '$machine', '$contract_id', '$first_chunk', '$status')";
						$result1=$conn->query($query1);
	echo $clientId.' '.$machineType.' '.$machine.' '.$contract_id.' '.$first_chunk.' '.$status;
	$first_chunk = date('Y-m-d', strtotime("+$num months", strtotime($first_chunk)));
	$first = date('Y-m',strtotime($first_chunk));
	if ($first < $date_today) {
		$status = 1 ;
	}
	else {
		$status = 0;
	}
	
	
	if ($first_chunk >  $last_word)  
	{
		$status = 4;
	}
	
	
	
	$pms_count++;
}


$sql2 = "UPDATE `contract` SET  `count` = '$count',  `total` = '$count'  WHERE `contract`.`contract_id` = '$contract_id'";	
$result=$conn->query($sql2);
echo "
			<script>alert('Contract added Successfully')</script>
			<script>window.location = '../pages/clients.php'</script>
			";


			
			
		
	

}
elseif(isset($_POST['editClientMachine'])) {
	$contract_id = $_POST['contract_id'];
	$machineType=$_POST['machine_Type'];
	$status=$_POST['status'];
$frequency=$_POST['frequency'];
$turn_over=$_POST['turn_over'];
$coverage=$_POST['coverage'];
	$turn_over = date('Y-m-d', strtotime($turn_over));
	$coverage = date('Y-m-d', strtotime($coverage));

	
		$query2 = "UPDATE `contract` SET `frequency` = '$frequency' WHERE `contract`.`contract_id` = '$contract_id'";
		$result2=$conn->query($query2);
		echo "
			<script>alert('Updated Successfully')</script>
			<script>window.location = '../pages/pms.php'</script>
			";
}
elseif(isset($_POST['edit_pms'])) {
	$pms_id = $_POST['pms_id'];
	$service_problem = $_POST['service_problem'];
	$service_diagnosis=$_POST['service_diagnosis'];
	$service_done=$_POST['service_done'];
$service_remarks=$_POST['service_remarks'];
$service_by=$_POST['service_by'];

	
		$query2 = "UPDATE `pms` SET `service_problem` = '$service_problem', `service_diagnosis` = '$service_diagnosis', `service_done` = '$service_done', `service_by` = '$service_by' , 
		`service_by` = '$service_by' WHERE `pms`.`pms_id` = $pms_id";
		$result2=$conn->query($query2);
		echo "
			<script>alert('Updated Successfully')</script>
			<script>window.location = '../pages/pms.php'</script>
			";
}


