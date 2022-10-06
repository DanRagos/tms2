<?php
require "../inc/dbc.inc.php";

$country_id =   $_POST['country_data'];

$state = "SELECT * FROM machine WHERE machine_type = $country_id";

$state_qry = mysqli_query($conn, $state);
// $output="";
$output = '<option value="">Select Brand/ Model</option>';
while ($state_row = mysqli_fetch_assoc($state_qry)) {
    $output .= '<option value="' . $state_row['machine_id'] . '">' . $state_row['machine_model'] . '</option>';
}
echo $output;
	