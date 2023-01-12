<?php 
    include("./Classes/pessoa.class.php");

    $pessoa = new Amigo("Patrick","M","18","01/06/2004");
    echo "<pre>";
    print_r($pessoa);
?>