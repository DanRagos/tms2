<?php
    include 'dbc.inc.php';
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $sqlDelete = "DELETE from events WHERE id='$id'";
        mysqli_query($conn, $sqlDelete);
        echo mysqli_affected_rows($conn);
    }
?>