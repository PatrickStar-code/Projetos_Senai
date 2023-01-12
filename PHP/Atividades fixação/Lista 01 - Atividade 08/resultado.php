<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $val = $_POST["v1"];
    $p9 = $val * .09;
    $total = $val - $p9;
    echo "<h3>9% de $val é $p9 tendo assim como desconto $total<h3>";

?>
    
</body>
</html>