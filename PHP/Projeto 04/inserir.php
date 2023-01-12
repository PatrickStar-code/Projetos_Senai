<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";
$nome = $_POST["nome"];
$usuario = $_POST["login"];
$senha = $_POST["senha"];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO alunos (nome,usuario, senha)
VALUES ('¨$nome','$usuario','$senha')";



if (mysqli_query($conn, $sql)) {
  echo "Registro realizado com sucesso";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>  