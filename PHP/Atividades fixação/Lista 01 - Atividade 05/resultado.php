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
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $quadrado_n1 = $n1 * $n1;
        $quadrado_n2 = $n2 * $n2;
        $soma = $quadrado_n1 + $quadrado_n2;
        echo "<h3>O quadrado de $n1 é $quadrado_n1 </h3>";
        echo "<h3>O quadrado de $n2 é $quadrado_n2 </h3>";
        echo "<h3>A soma dos quadrados é $soma </h3>";


    ?>
</body>
</html>