<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "root";
    $dbName = "agroculture";

    $conn = mysqli_connect("localhost", "root", "root", "agroculture");
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
