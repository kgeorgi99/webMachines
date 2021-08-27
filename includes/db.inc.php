<?php
    $serverName = "127.0.0.1";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "web";

    $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName, $dbPort);

    if(!$conn){
        die("Connection failed:" . mysqli_connect_error());
    }