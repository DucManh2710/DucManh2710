<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $db = "mydatabase";
    $conn = new mysqli($severname, $username, $password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->conect_error);
    }
    echo "Connected successfully <br>";
?>