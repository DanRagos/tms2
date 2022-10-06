<?php
session_start();
include '../inc/dbc.inc.php';
$query=mysqli_query($conn,"select * from `notification` where pop_up='0' order by id desc");
$output = '';
while($row=mysqli_fetch_array($query)){
	$user_id = $row['user_id'];
	$query1=mysqli_query($conn,"select * from `users` where mem_id='$user_id'");
	while($row1=mysqli_fetch_array($query1)){
			if ($_SESSION['type']!="admin") {
$output .= '
	<div class="alert alert_default">
		<a href="../admin/notification.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<p><span class="text-success">'.$row1['firstname'].'</span>&nbsp<span class="font-italic">'.$row['action'].'</span></p>
	</div>
	';
	}
	else {
		$output .= '
	<div class="alert alert_default">
		<a href="../user/notification.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<p class="lead">'.$row1['firstname'].'&nbsp'.$row['action'].'</p>
	</div>
	';}
	}
}
mysqli_query($conn,"update `notification` set pop_up='1' where pop_up='0'");
echo $output;
?>