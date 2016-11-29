<?php
    require "connection.php";

    $sql = "SELECT * FROM users order by id DESC";
    $result = $connection->query($sql);
    if($result->num_rows > 0) {
        $data = array();
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

    } else {
        echo "0 Results Found";
    }
    echo json_encode($data);
    $connection->close();