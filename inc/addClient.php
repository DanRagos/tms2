<?php
session_start();
require '../inc/dbc.inc.php';
if($_SERVER['REQUEST_METHOD'] !='POST'){
    echo "<script> alert('Error: No data to save.'); </script>";
    $conn->close();
		
    exit;

}

	$notif_user = $_SESSION['id'];
	$notif_name = $_SESSION['firstname'];
	$notif_date =date("Y-m-d H:i:s");
if(isset($_POST['addClient'])){	

	$clientName=$_POST['clientName'];
	$clientAddress=strip_tags($_POST['clientAddress']);
	$contactPerson= $_POST['contactPerson'];
$contactPerson= str_replace ("'","\'", $contactPerson, );
	$emailAddress= $_POST['emailAddress'];
	$notif_desc = $clientName." is added";
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
			<script>alert('$clientName, $clientAddress, $contactPerson, $emailAddress')</script>
			<script>window.location = '../pages/clients.php'</script>
			";
					}
					
}
elseif(isset($_POST['edit_client'])){	
$client_id=$_POST['client_id'];
	$clientName=$_POST['client_name'];
	$clientAddress=($_POST['address']);
	$contactPerson= $_POST['contact_person'];
	$emailAddress= $_POST['email'];
		$query = "UPDATE `clients` SET `client_name` = '$clientName', `client_address` = '$clientAddress', `contact_person` = '$contactPerson', `contact_email` = '$emailAddress'
			 WHERE client_id = '$client_id'";
		$result=$conn->query($query);
						
		echo "
			<script>alert('$clientName edited')</script>
			<script>window.location = '../pages/clients.php'</script>
			";
				
}


?>
