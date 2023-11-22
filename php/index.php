<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        $exchangeRate = array("USD" >=22300, "EUR">=27300, "SGD">=17000, "JPY">=120);
        $exchangeRate[] = 600;
        $exchangeRate[] = 16000;
        $exchangeRate[0] = 22200;   
        echo "<h3>Exchange rate  to VND</h3>";
        echo "USD:" . $exchangeRate['USD'] . "<br>"; 
        echo "EUR:" . $exchangeRate['EUR'] . "<br>"; 
        echo "SGD:" . $exchangeRate['SGD'] . "<br>"; 
        echo "JPY:" . $exchangeRate['JPY'] . "<br>"; 
    ?>
</body>
</html>