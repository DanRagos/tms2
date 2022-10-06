<?php 
    $conn= mysqli_connect ('localhost', 'root', '', 'tms');
    if(!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
    }
	
?>