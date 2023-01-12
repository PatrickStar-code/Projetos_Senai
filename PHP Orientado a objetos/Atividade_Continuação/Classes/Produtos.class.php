<?php
include("./conexao.php");

class Produtos
{
    var $Desc_produto;
    var $valor_unit;
    var $qtd_prod;
    var $img;

}



if (!isset($_SESSION["Produtos"])) {
    $_SESSION["Produtos"] = array();

    $sql = "SELECT id_produto, descricao,quantidade,preco,img FROM produtos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $Produto = new Produtos;
            $Produto -> Desc_produto = $row["descricao"];
            $Produto -> qtd_prod = $row["quantidade"];
            $Produto -> valor_unit = $row["preco"];
            $Produto -> img = $row["img"];
            array_push($_SESSION["Produtos"],$Produto);
        }
    }

}
