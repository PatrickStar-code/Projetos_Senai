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
        $val = $_POST["val"];
        $porcentagem = $val * 0.15;
        echo "<h3>15% de $val é de $porcentagem<h3>";
    ?>
</body>
</html>