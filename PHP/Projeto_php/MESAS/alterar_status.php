<?php
    include "../banco.php";

    $mesa_atual = $_GET["cod_mesa"];

    $sql = "SELECT status_mesa FROM mesas WHERE cod_mesa = $mesa_atual";
    var_dump($mesa_atual);
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        if($row["status_mesa"] == "LIVRE"){
            echo "LIVRE";
            $fechar = "UPDATE mesas SET status_mesa='FECHADO' where cod_mesa = $mesa_atual";
            if ($conn->query($fechar) === TRUE) {
                echo "Record updated successfully";
                header('location: mesas.php');
            } 
            else {
                echo "Error updating record: " . $conn->error;
            }
        }
        else{ $fechar = "UPDATE mesas SET status_mesa='LIVRE' where cod_mesa = $mesa_atual";
            if ($conn->query($fechar) === TRUE) {
                echo "Record updated successfully";
                header('location: mesas.php');
            } 
            else {
                echo "Error updating record: " . $conn->error;
            }}
      }
    } else {
      echo "0 results";
    }
?>
