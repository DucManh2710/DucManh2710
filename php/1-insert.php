<?php
    require 'connect.php';
    $sql = "INSERT INTO flights (Origin, Destination, Duration) VALUES ('Hà Nội', 'Paris', '4000')";
    $conn -> query($sql);
    $conn -> close();
?>