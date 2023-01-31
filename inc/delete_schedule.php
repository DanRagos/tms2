<?php 
require_once('../inc/dbc.inc.php');
if(!isset($_GET['id'])){
    echo "<script> alert('Undefined Schedule ID.'); window.location = '../pages/pms.php' </script>";
    $conn->close();
    exit;
}

$delete = $conn->query("DELETE FROM `schedule` where schedule_id = '{$_GET['id']}'");
if($delete){
    echo "<script> alert('Event has deleted successfully.'); window.location = '../pages/pms.php'  </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conn->close();

?>