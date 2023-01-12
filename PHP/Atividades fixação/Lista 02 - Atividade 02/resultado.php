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

        for ($i=1; $i < 13 ; $i++) { 
            echo '<h3>', $i ,'X ',$n1,' =', ($n1/$i) ,'</h3>';
        }
    ?>
</body>
</html>