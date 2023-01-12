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
        $comprimento = $_POST["comprimento"];
        $largura =  $_POST["largura"];
        $altura = $_POST["altura"];
        $calc = $comprimento * $largura * $altura;
        echo "<h3>O volume de uma caixa com $comprimento de comprimento,$largura de largura e $altura de altura é $calc </h3>";
    
    ?>
</body>
</html>