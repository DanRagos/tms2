<?php 
require_once '../inc/dbc.inc.php ';
   $month = date('m-Y');
		
	 $query1 = mysqli_query($conn, " select * from contract");
							while($fetch1 = mysqli_fetch_array($query1)){	
				 $percentage  = (($fetch1['total'] - $fetch1 ['count']) / $fetch1['total']) * 100;	
		echo "'$percentage'\n";
							}
				


?>