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
        $Val1 = $_POST["v1"];
        $Val2 = $_POST["v2"];
        $Val3 = $_POST["v3"];
        $media = ($Val1 + $Val2 + $Val3)/3;
        echo "<h3> A media entre $Val1 , $Val2 e $Val3 é $media </h3>"
    ?>
</body>
</html>