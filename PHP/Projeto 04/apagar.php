<?php 
    $id = $_GET["id_aluno"];
       
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "escola";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    // sql to delete a record
    $sql = "DELETE FROM alunos WHERE id_aluno=$id";
    
    if ($conn->query($sql) === TRUE) {
      echo "Dado deletado com sucesso";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();
    ?>
?>
