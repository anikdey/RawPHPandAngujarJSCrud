<?php

    require "connection.php";
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $id = $request->id;
    $firstName = $request->firstName;
    $lastName = $request->lastName;
    $email = $request->email;
    $query = "UPDATE users SET firstName = '".$firstName."', lastName='".$lastName."', email = '".$email."' where id=".$id;
    $result = mysqli_query($connection, $query);
    mysqli_close($connection);

