<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $soma = $n1 + $n2;
    $multiplicar = $soma * $n1;
    echo "<h3>O primeiro numero digitado foi : $n1 <h3><br>";
    echo "<h3>O segundo numero digitado foi: $n2 <h3><br>";
    echo "<h3>A soma dos dois numero foi: $soma<h3><br>";
    echo "<h3>A multiplicação do primeiro numero com a soma foi de: $multiplicar<h3>";
    ?>
</body>
</html>