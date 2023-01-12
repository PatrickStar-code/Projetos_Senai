<?php
//Inclui o banco dedados 
include_once("../banco.php");

//Criação variaveis
$cod_cliente = $_POST["cod_cliente"];
$nome_cliente_novo=$_POST["nome_cliente"];
$cpf_cliente_novo=$_POST['cpf_cliente'];
$celular_cliente_novo=$_POST['celular_cliente'];

//Atualizando dados
$sql = "UPDATE clientes SET nome_cliente='$nome_cliente_novo',cpf_cliente='$cpf_cliente_novo',celular_cliente='$celular_cliente_novo' WHERE cod_cliente=$cod_cliente";
if ($conn->query($sql) === TRUE) {
    header('location:listagem.php');
} else {
echo "Error updating record: " . $conn->error;
}


?>