<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>14</title>
</head>
<body>
    <?php 
        $v_total = $_POST["v1"];
        $v_aumentado = $v_total * 1.16;
        $parcelas = $v_aumentado /10;
        echo "<h3>O produto no valor de $v_total teve como um aumento de 16% ficando R$$v_aumentado fica com parcelas de : 10x R$$parcelas</h3>";
    ?>
</body>
</html>