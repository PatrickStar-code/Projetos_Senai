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
        $media = ($n1 + $n2)/2;
        
        if($media>7) echo "<h3>Aluno Aprovado com media de $media</h3>";
        else echo "<h3>Aluno Reprovado com media de $media</h3>";

    ?>
</body>
</html>