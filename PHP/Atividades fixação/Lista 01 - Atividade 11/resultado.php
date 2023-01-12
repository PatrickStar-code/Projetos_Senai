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
        $p27 = $val * .27;
        $total = $val - $p27;
        echo "<h3>O valor $val sendo descontado 27% daria como resultado : $total ,tendo um desconto de $p27</h3>"
    ?>
</body>
</html>