<?php
require_once('../inc/dbc.inc.php');
     $month = date('m');
			   $month2 = date('F');
			  $year = date('Y');
 $query = mysqli_query($conn, "SELECT COUNT(schedule_id)
as count FROM schedule ");
							while($fetch = mysqli_fetch_array($query)){	
		$schedule_count =  $fetch['count'];
							}
 $query1 = mysqli_query($conn, "SELECT COUNT(schedule_id) as count FROM schedule WHERE  contract_id =''");
							while($fetch1 = mysqli_fetch_array($query1)){	
		$service_call =  $fetch1['count'];
							}
 $query2 = mysqli_query($conn, "SELECT COUNT(schedule_id) as count FROM schedule WHERE contract_id !='' ");
							while($fetch2 = mysqli_fetch_array($query2)){	
		$pms =  $fetch2['count'];
							}
							 $query3 = mysqli_query($conn, "SELECT COUNT(schedule_id) as count FROM schedule WHERE contract_id ='' AND status != '2'");
							while($fetch3 = mysqli_fetch_array($query3)){	
		$pservice_call =  $fetch3['count'];
							}
							 $query4 = mysqli_query($conn, "SELECT COUNT(schedule_id) as count FROM schedule WHERE contract_id !='' AND status = '1' ");
							while($fetch4 = mysqli_fetch_array($query4)){	
		$ppms =  $fetch4['count'];
							}
							 $query5 = mysqli_query($conn, "SELECT COUNT(schedule_id) as count FROM schedule WHERE status = '2' ");
							while($fetch5 = mysqli_fetch_array($query5)){	
		$resolved =  $fetch5['count'];
							}
								 $query6 = mysqli_query($conn, "SELECT COUNT(pms_id) as count FROM pms 
		WHERE MONTH(service_date) = $month AND YEAR (service_date) =  $year");
							while($fetch6 = mysqli_fetch_array($query6)){	
		$resolved_month =  $fetch6['count'];
							}
											 $query7 = mysqli_query($conn, "SELECT COUNT(schedule_id) as count FROM schedule 
		WHERE MONTH(schedule_date) = $month AND YEAR (schedule_date) =  $year AND status!='2'");
							while($fetch7 = mysqli_fetch_array($query7)){	
		$count_sched =  $fetch7['count'];
							}
								
							
?>
