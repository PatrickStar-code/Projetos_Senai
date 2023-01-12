  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "escola";
  $user = $_POST["login"];
  $senha = $_POST["senha"];

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT id_aluno, usuario , senha FROM alunos WHERE usuario = '$user' AND senha='$senha' ";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = $result->fetch_assoc()) {
      echo " - Name: " . $row["nome"] . "Login: " . $row["usuario"] ."Senha: ".$row["senha"]. "<br>";
    }
  } else {
    echo "Ta errado";
  }

  mysqli_close($conn);
  ?>