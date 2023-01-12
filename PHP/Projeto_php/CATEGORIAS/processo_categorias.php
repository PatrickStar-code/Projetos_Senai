<?php
//Inclui o banco dedados 
include_once("../banco.php");


//Criação variaveis
$cod_categoria = $_POST["cod_categoria"];
$descricao = $_POST["descricao_categoria"];
//Atualizando dados
$sql = "UPDATE categorias SET descricao_categoria = '$descricao' WHERE cod_categoria = '$cod_categoria'";
if ($conn->query($sql) === TRUE) {
    header('location:listagem.php');
} else {
echo "Error updating record: " . $conn->error;
}

?>