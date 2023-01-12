<?php 
    $uf = $_POST["uf"];
    if($uf == "MG"){
        $cidade = array(
            "Juiz de Fora",
            "Belo Horizonte"
        );
    }
    elseif($uf == "RJ"){
        $cidade = array(
            "Rio de Janeiro",
            "Cabo Frio"
        );
    }
    else{
        $cidade = array(
            "Santos",
            "Campinas"
        );
    }

    sort($cidade);
    echo json_encode($cidade);
?>