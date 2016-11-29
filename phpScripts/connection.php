<?php
    $host = "localhost";
    $userName = "root";
    $password = "";
    $db = "angularCrud";
    $connection = mysqli_connect($host, $userName, $password, $db);
    if(!$connection){
        echo "Failed to connect to database ". mysqli_connect_error();
    }
