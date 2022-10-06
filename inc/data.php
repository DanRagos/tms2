<?php
include 'dbc.inc.php' ;
session_start ();
$user_id = $_SESSION['id'];
$sql = "SELECT * FROM notification where comment_status = '0' AND user_seen != '$user_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo $result->num_rows;
}

$conn->close();
?>