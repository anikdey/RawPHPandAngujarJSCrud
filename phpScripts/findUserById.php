<?php

require "connection.php";
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$id = $request->id;

$sql = "SELECT * FROM users where id=".$id;
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
