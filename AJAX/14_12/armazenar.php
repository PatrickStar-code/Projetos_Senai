<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$mensagem = $_POST["texto"];

$sql = "INSERT INTO chat(mensagem_chat,date_chat)
VALUES ('$mensagem',NOW())";

$conn->query($sql);


echo ($mensagem);
?>