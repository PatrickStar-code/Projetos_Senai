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
        $desconto = $val * 0.07;
        $total = $val - $desconto; 
        echo "<h3>Tendo como valor $val levando 7% de desconto teriamos como desconto: $desconto </h3><br>";
        echo "<h3>Sendo o valor final descontado de $total</h3>"
    ?>
</body>
</html>