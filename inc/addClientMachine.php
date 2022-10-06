<?php
session_start();
require '../inc/dbc.inc.php';
$date_today = date('Y-m');

	$count = 0; 

if(isset($_POST['addClientMachine'])){	
$clientId=$_POST['clientId'];
$contract_id= uniqid();
$frequency=$_POST['frequency'];
$machineType=$_POST['machineType'];
$status=$_POST['status'];

$datefilter=$_POST['datefilter'];

//split 2 dates
$string=$datefilter;
$last_space = strrpos($string, ' ');
$last_word = substr($string, $last_space);
$first_chunk = substr($string, 0, $last_space - 2);

	$last_word = date('Y-m-d', strtotime($last_word));
$first_chunk = date('Y-m-d', strtotime($first_chunk));



$query= "INSERT INTO `contract` (`contract_id`, `client_id`, `machine_id`, `frequency`, `turn_over`, `coverage`, `status`) VALUES ('$contract_id', '$clientId', '$machineType', '$frequency', '$first_chunk', '$last_word', '$status')";
						$result=$conn->query($query);
						
//insert schedules by looping
if ($frequency =="Quarterly"  ){
	$num = 3;
}
elseif  ($frequency =="Semi-Annually" ){
$num = 6; }
elseif($frequency =="Annually" ){
	$num = 12;}
do {

	$status = 0; 
	$first_chunk = date('Y-m-d', strtotime("+$num months", strtotime($first_chunk)));
	$first = date('Y-m',strtotime($first_chunk));
	if ($first <= $date_today) {
		$status = 1 ;
	}
	$count++;
 $query1= "INSERT INTO `schedule` (`schedule_id`, `client_id`, `machine_id`,`contract_id`,  `schedule_date`,  `status`) 
VALUES (NULL, '$clientId', '$machineType', '$contract_id', '$first_chunk', '0')";
						$result1=$conn->query($query1);

				
					
						
} while($first_chunk < $last_word);	
$sql2 = "UPDATE `contract` SET  `count` = '$count',  `total` = '$count'  WHERE `contract`.`contract_id` = '$contract_id'";	
$result=$conn->query($sql2);
			echo "
			<script>alert('$count $contract_id')</script>
			<script>window.location = '../pages/pms.php'</script>
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


