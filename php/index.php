<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function dislay_image_list($imagelist)
    {
        foreach ($imagelist as $item)
        {
            echo "<img src='images/$item'
            width = 50px height 50px alt = '$item'>";
        }
    }
    $items  = array('anh1.png','anh2.png');
    dislay_image_list($items);
?>
<h1>function</h1>
<?php
    $items  = array('anh3.png','anh4.png');
    dislay_image_list($items);
?>
</body>
</html>
