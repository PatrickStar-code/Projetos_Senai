<?php
include("../banco.php");
//INPUT PEDIDO
//Criando variaveis
$cod_mesa = $_POST["cod_mesa"];
$data_pedido = $_POST["data_pedido"];
// $hora_pedido = $_POST["hora_pedido"];
$cod_atendente = $_POST["cod_atendente"];
$cliente = $_POST["cliente"];
$cod_produto = $_POST["Produto"];
$qtde = $_POST["qtde_prod"];

//Inserindo Pedido
$sql = "INSERT INTO pedidos (MESAS_cod_mesa,data_pedido,hora_pedido,ATENDENTES_cod_atendente,CLIENTES_cod_cliente,PRODUTOS_cod_produto)
VALUES ('$cod_mesa','$data_pedido',TIME(NOW()),'$cod_atendente','$cliente',$cod_produto)";

$sql2="SELECT v_unit_produto,v_unit_produto*$qtde as v_total FROM produtos WHERE cod_produto = $cod_produto";

$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $v_total = $row["v_unit_produto"];
        if (mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);
            echo "<br>New record created successfully. Last inserted ID is: " . $last_id;
            
            // //INPUT itens_pedidos
            $sql = "INSERT INTO itens_pedidos (qtde,produto,v_unit,sub_total,PEDIDOS_cod_pedido)
            VALUES ('$qtde','$cod_produto','$row[v_unit_produto]','$v_total','$last_id')";
        
            if ($conn->query($sql) === TRUE) {
                echo "<br>New record created successfully";
            } else {
                echo "<br>Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 


$conn->close();
?>