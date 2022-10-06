<?php
    include 'dbc.inc.php';
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $sqlUpdate = "UPDATE `events` SET `start_event`='$start', `end_event`='$end' WHERE id='$id'";
        mysqli_query($conn, $sqlUpdate);
        echo mysqli_affected_rows($conn);
    }
?>