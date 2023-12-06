<?php
    require 'connect.php';
    mysqli_set_charset($conn, 'UTF8');
    $sql = "SELECT * FROM flights";
    $reselt = $conn->query($sql);
    print_r($reselt);
    $row = $reselt->fetch_assoc();
    echo "<br>";
    print_r($row);
    $row = $reselt->fetch_assoc();
    echo "<br>";
    print_r($row);
    $conn->close();
    ?>