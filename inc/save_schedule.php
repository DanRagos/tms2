<?php 
require_once('../inc/dbc.inc.php');
if($_SERVER['REQUEST_METHOD'] !='POST'){
    echo "<script> alert('Error: No data to save.'); </script>";
    $conn->close();
		header('location: ../pages/pms.php');
    exit;

}
extract($_POST);

$allday = isset($allday);

if(!empty($id)){
    $sql = "INSERT INTO `pms` (`pms_id`, `schedule_id`, `service_date`, `service_problem`, `service_diagnosis`, 
	`service_done`, `remarks`, `service_by`,`status`) VALUES (NULL, '$id', '$service_date', '$service_problem', '$service_diagnosis', '$service_done', '$recommendation', '$service_by', '$remarks')";
   $sql2 = "UPDATE `schedule` SET `status` = '$remarks' WHERE `schedule`.`schedule_id` = $id";
	$result=$conn->query($sql2);
	 $query1 = mysqli_query($conn, " select schedule.schedule_id, schedule.status, contract.contract_id, contract.status, contract.count
	 from schedule left join contract on schedule.contract_id = contract.contract_id where schedule.schedule_id = $id");
							while($fetch1 = mysqli_fetch_array($query1)){	
		$contract_id =  $fetch1['contract_id'];
							$count =  $fetch1['count'];
							if ($count - 1 == 0){
							$sql3 = "UPDATE `contract` SET `status` = 'CONTRACT EXPIRED' WHERE `contract`.`contract_id` = '$contract_id'";
	$result3=$conn->query($sql3);
							}
							if ($count >0) {
				
	$count = $count - 1;							
	$sql4 = "UPDATE `contract` SET `count` = '$count' WHERE `contract`.`contract_id` = '$contract_id'";
	$result4=$conn->query($sql4);
		
							}
						
	
		echo $count;
							}
	
}else{
	  echo "<script> alert('$id'); </script>";
    //$sql = "UPDATE `schedule_list` set `title` = '{$title}', `description` = '{$description}', `start_datetime` = '{$start_datetime}', `end_datetime` = '{$end_datetime}' where `id` = '{$id}'";
}  


$save = $conn->query($sql);
if($save){
    echo "<script> alert('Schedule Successfully Saved.');  </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
header('location: ../pages/pms.php');
$conn->close();


?>