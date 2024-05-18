<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "emanuel";

    // Create connection
    $conect = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";

?>