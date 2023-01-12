<?php 
    include("./Classes/equipamento.class.php");
    $Equipamento = new equipamento;
    $Equipamento -> ligado = false;
    print_r($Equipamento);

?>