<?php 
    include("./Classes/vendedor.class.php");

    $pleno = new Pleno(1000,2000);
    $pleno ->calcularSalario(1.10);