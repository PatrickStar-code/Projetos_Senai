<?php 
    include("./classes/conta.class.php");

    $contacorrente = new ContaCorrente("bb",2,"Patrick1",123,500,false,50);
    $contapoup = new ContaPoupanca("Itau",5,"Patrick2",456,200,true,50);

    var_dump($contacorrente);
    echo "<br>";
    var_dump($contapoup)
?>
