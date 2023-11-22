<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>t</title>
</head>
<body>
   <?php
   echo "THE GAME";
   if ($_GET["response"] == "yes")
   {
    echo " HAS BEEN QUITED";
   }
   else
   {
    echo "WILL BE CONTINUE IN 3 SECONDS";
   }
   echo " <br> AFTER IF STATEMENT"
    ?>
</body>
</html>