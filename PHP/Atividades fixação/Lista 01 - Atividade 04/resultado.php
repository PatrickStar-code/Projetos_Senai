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
        $p5 = $val * .05;
        $p50 = $val * .50;
        echo "<h3>5% de $val é $p5</h3>";
        echo "<h3>50% de $val é $p50</h3>"
    ?>
</body>
</html>