<?php
include("./Classes/class.php");
$conta1 = new P_Fisico("Star",1,321,0,0,"32546","Bairro Tal","489.479.954-74");
$conta2 = new P_Fisico("Star",1,321,0,60,"32546","Bairro Tal","489.479.954-74");

// if (isset($_POST["enviar"])) {
//     $ag = $_POST["ag"];
//     $cd = $_POST["cd"];
//     $tl = $_POST["tl"];
//     $senha = $_POST["senha"];
//     $conta = new Conta($ag, $cd, $senha, 0, false);
// }
    echo"<pre>";
    print_r($conta1);

    $conta1->depositar(20);

    echo"<pre> Depositei";
    print_r($conta1);
   
    $conta1->retirar(80);

    echo"<pre> Retirei";
    print_r($conta1);

    $conta1->tranferir(80,$conta2);
    echo"<pre>Transferi";
    print_r($conta2)



?>
