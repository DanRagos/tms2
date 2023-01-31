<?php 
    $conn= mysqli_connect ('localhost', 'root', '', 'tms');
    if(!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
    }
	date_default_timezone_set('Asia/Manila'); 
	
?>