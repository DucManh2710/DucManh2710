<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Xin chao: <?php echo $_GET["ten"]; ?><br>
    Email cua ban la:   <?php echo $_GET["email"]; ?><br> 
    Tuoi cua ban la: <?php echo 2023 - $_GET["namsinh"] ; ?><br>
    Ban dang hoc truong: <?php echo $_GET["truong"]; ?><br>
    Ban dang hoc lop:   <?php echo $_GET["lop"]; ?><br>
</body>
</html>