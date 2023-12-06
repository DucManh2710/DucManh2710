<?php
    require 'connect.php';
    mysqli_set_charset($conn, 'UTF8');
    $sql = "SELECT * FROM flights";
    $reselt = $conn->query($sql);
    if ($reselt->num_rows > 0)
    {
        while($row = $reselt->fetch_assoc())
        {
            echo "FlightID: " . $row["id"].
                 " Origin: " . $row["origin"].
                 " Destination: " . $row["destination"].
                 " Duration: " . $row["duration"]. "<br>";
        }
    }
    else {
        echo "No flights in database";
    }
    $conn->close();
?>