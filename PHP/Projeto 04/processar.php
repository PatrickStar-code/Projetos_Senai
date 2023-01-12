<?php 
    $id = $_POST['id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "escola";

    $nome_alterado=$_POST["nome"];
    $login_alterado=$_POST["login"];
    $senha_alterado=$_POST["senha"];

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE alunos SET nome='$nome_alterado',usuario='$login_alterado',senha='$senha_alterado' WHERE id_aluno='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Atualização de dados realizada";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>