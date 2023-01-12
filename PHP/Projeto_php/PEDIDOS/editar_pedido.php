<?php 
    include '../banco.php';
    $cod_pedido=$_POST["cod_pedido"];
    $hora_pedido=$_POST["hora_pedido"];
    $data_pedido=$_POST["data_pedido"];
    $cod_atendente=$_POST["cod_atendente"];
    $cliente=$_POST["cliente"];
    $qtde_prod=$_POST["qtde_prod"];
    $Produto=$_POST["Produto"];
    $sql_selecionar= "SELECT v_unit_produto,v_unit_produto*$qtde_prod as 'VALOR_TOTAL' FROM produtos";
    $result = $conn->query( $sql_selecionar);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $sql = "UPDATE pedidos SET hora_pedido ='$hora_pedido', data_pedido = '$data_pedido' ,valor_total_pedido =' $row[VALOR_TOTAL]' ,CLIENTES_cod_cliente='$cliente',PRODUTOS_cod_produto='$Produto' WHERE cod_pedido=$cod_pedido";
  }
} 
if ($conn->query($sql) === TRUE) {
 // echo "<script>alert('ATUALIZAÇÃO REALIZADA COM SUCESSO!!!')</script>";
  header("location:listagem.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>