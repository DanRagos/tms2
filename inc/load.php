<?php
    $connect = new PDO('mysql:host=localhost;dbname=system', 'root', '');

    $data = array();

    $query = "SELECT * FROM events ORDER BY id";

    $statement = $connect->prepare($query);

    $statement->execute();

    $result = $statement->fetchAll();

    foreach ($result as $row) {
        $data[] = array(
            'id' => $row['id'],
            'title' => $row['title'],
            'end' => $row['end_event'],
            'start' => $row['start_event'],
            'color' => $row['color']
        );
    }
    echo json_encode($data);
?>