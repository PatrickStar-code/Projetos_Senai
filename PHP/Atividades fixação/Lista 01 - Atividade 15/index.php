<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15</title>
</head>

<body>
    <h1>15 – Escreva um algoritmo que receba de entrada a distância total (em km) percorrida por um automóvel e a
        quantidade de combustível (em litros) consumida para percorrê-la, calcule e imprima o consumo médio de
        combustível. Fórmula: Consumo médio = Km / litros
    </h1>

    <form action="resultado.php" method="post">
        <label for="km"><h3>Digite quanto distancia percorrida:</h3></label>
        <input type="number" name="km" id="km"> KM
        <label for="l"><h3>Digite a quantidade que foi gasta de combustivel:</h3></label>
        <input type="number" name="l" id="l"> L <br> <br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>