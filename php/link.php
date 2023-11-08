<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
        $firstnumber = $_GET["firstnumber"];
        $secondnumber = $_GET["secondnumber"];
        if($firstnumber < $secondnumber)
        $max = $secondnumber;
        else
        $max = $firstnumber;
         echo "So lon hon la: $max";
    ?>
</body>
</html>