<?php
    if ($result -> num_rows > 0)
    {
        echo " <table border= '1' width=50% align = 'center'>
        <caption> <b>Bảng thông tin chuyến bay</b></caption>
        <tr>
            <th>ID</th>
            <th>Origin</th>
            <th>Destination</th>
            <th>Duration</th>
        </tr>" 
        while($row = $result->fetch_assoc())
        {
            if($row["id"]%2 ==0)
            {
                echo " <tr class = 'odd'><td></tr>"
            }
        }
    }
?>