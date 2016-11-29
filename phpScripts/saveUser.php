<?php

    require "connection.php";
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);

    $firstName = $request->firstName;
    $lastName = $request->lastName;
    $email = $request->email;

    $query = "insert into users (firstName, lastName, email) values ('".$firstName."' , '".$lastName."' , '".$email."')";
    $result = mysqli_query($connection, $query);
    mysqli_close($connection);

