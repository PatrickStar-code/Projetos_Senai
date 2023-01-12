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
        $base01 = $_POST["Base_01"];
        $base02 = $_POST["Base_02"];
        $altura = $_POST["altura"];
        $area = (($base01+$base02)*2/$altura);

        echo "<h3>A área de um trapezio com as bases $base01 e a $base02 com altura de $altura é: $area <h3><br>"
        

    ?>
</body>
</html>