<?php
$opcao = $_GET["opcao"];

switch ($opcao) {
    case 1:
        $x = 1;

        while ($x <= 5) {
            echo "The number is: $x <br>";
            $x++;
        }
        break;
    case 2:
        $x = 1;

        do {
            echo "The number is: $x <br>";
            $x++;
        } while ($x <= 5);
        break;

    case 3:
        for ($x = 0; $x <= 10; $x++) {
            echo "The number is: $x <br>";
        }
        break;
    case 4:
        $numeros = array(1, 5, 10, 20);

        foreach ($numeros as $value) {
            echo "$value <br>";
        }
        break;
    default:
        $mensagem = "Escolheu opção : $opcao";
        break;
}


?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="alert alert-primary" role="alert">
                    <!-- <?php echo $mensagem ?> -->
                    <html lang="en">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>