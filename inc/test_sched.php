<?php
session_start();
require '../inc/dbc.inc.php';
$last_word= '2024-05-14' ;
$first_chunk = '2022-09-19';
do {
	$first_chunk = date('Y-m-d', strtotime("+3 months", strtotime($first_chunk)));
 $query1= "INSERT INTO `schedule` (`schedule_id`, `client_id`, `machine_id`, `schedule_date`) 
VALUES (NULL, '1', '2', '$first_chunk')";
						$result1=$conn->query($query1);
} while($first_chunk <=$last_word  );
?>