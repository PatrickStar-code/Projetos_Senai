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
        $n3 = $_POST["n3"];
        $media_pod = (2 * $n1 + 3 * $n2 + 5 * $n3 )/2+3+5;
        echo "<h3>A media poderada dos valores $n1,$n2,$n3 com peso de 2,3,5 foi de : $media_pod</h3>"
    ?>
</body>
</html>