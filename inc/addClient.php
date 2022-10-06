<?php
session_start();
require '../inc/dbc.inc.php';
	
if(isset($_POST['addClient'])){	
	$clientName=$_POST['clientName'];
	$clientAddress=strip_tags($_POST['clientAddress']);
	$contactPerson= $_POST['contactPerson'];
	$emailAddress= $_POST['emailAddress'];
	$query= "select * from clients WHERE client_name='$clientName'";
							$query_run = mysqli_query($conn,$query);
							if(mysqli_num_rows($query_run)>0)
					{
						// there is already a user with the same username
						echo "<script> alert('Client Already exist') </script>
						<script>window.location = '../pages/clients.php'</script>
				";
					}
					else {
	$query= "INSERT INTO `clients` (`client_id`, `client_name`, `client_address`, `contact_person`, `contact_email`,`imglink`) VALUES 
	(NULL, '$clientName', '$clientAddress', '$contactPerson', '$emailAddress', '../image/uploads/mv santiago.webp')";
						$result=$conn->query($query);
						
		echo "
			<script>alert('Client added')</script>
			<script>window.location = '../pages/clients.php'</script>
			";
					}
}
?>
