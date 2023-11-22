<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        $TONG = $_GET["DIEMTOAN"] + $_GET["DIEMLY"] + $_GET["DIEMHOA"];
        if ($TONG < 15) 
        {
            echo " BAN DA TRUOT";
        }
        elseif($TONG >= 15 and $TONG < 17)
        {
            echo " BAN DA DO NGANH MOI TRUONG";
        }
        elseif($TONG >= 17 and $TONG < 18)
        {
            echo "BAN DA DO NGANH DIA CHAT";
        }
        elseif($TONG >= 18 and $TONG < 22)
        {
            echo "BAN DA DO NGANH CNTT VA KHDL";
        }
        elseif($TONG > 22)
        {
            echo "BAN DA DO NGANH CNTT CHAT LUONG CAO";
        }

    ?>
</body>
</html>