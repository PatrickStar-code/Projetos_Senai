<?php
include("../banco.php");
/*Pegando o id repasado na pagina anterior*/
$id = $_GET["id"];

//Deletando as informaçoes pelo ip
$sql = "DELETE  FROM pedidos WHERE cod_pedido='$id'";
$sql2 = "DELETE  FROM itens_pedidos WHERE PEDIDOS_cod_pedido='$id'";


if (mysqli_query($conn, $sql)) {
    echo "Operação realizada";
  }
  else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  if (mysqli_query($conn, $sql2)) {
    echo "Operação realizada";
  } 
  else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
