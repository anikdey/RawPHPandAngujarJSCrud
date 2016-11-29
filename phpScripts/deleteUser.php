<?php
    require "connection.php";
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $id = $request->id;
    $sql = "DELETE FROM users where id=".$id;
    echo $sql;
    $result = $connection->query($sql);
    $connection->close();
