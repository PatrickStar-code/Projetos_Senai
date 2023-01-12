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
        $ms = $_POST["ms"];
        $km = $ms * 3.6;
        echo "<h3>A velocidade $ms m/s em km/h é $km km/h</h3>"
    ?>
</body>
</html>