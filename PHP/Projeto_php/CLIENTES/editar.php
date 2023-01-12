<?php
include_once "../banco.php";
$cod_cliente=$_GET['cod_cliente'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//Puxando dados do cliente
$sql = "SELECT cod_cliente,nome_cliente,cpf_cliente,celular_cliente  FROM CLIENTES where cod_cliente=$cod_cliente";
$result = $conn->query($sql);
$result1 = $conn->query($sql);
$result2 = $conn->query($sql);
$result3 = $conn->query($sql);
$result4 = $conn->query($sql);
$conn->close();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
    <link rel="stylesheet" href="../style/scliente.css">
    <link rel="stylesheet" href="../style/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light shadow top-fixed" class="cabeca" style="background-color: #2d2926;">
    <div class="container">
      <div class="position-absolute top-0 start-50 translate-middle"><img src="../IMGS/logo.png" alt="" style="width: 200px; margin-top: 115px;"></div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="position: relative; position: relative; border: 1px solid white;">
        <span class="material-symbols-outlined" style="color: white;">menu</span>

      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="../HOME/home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../PRODUTOS/listagem_produtos.php">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../PEDIDOS/listagem.php">Pedidos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../CLIENTES/listagem.php">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../CATEGORIAS/listagem.php">Categorias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../MESAS/mesas.php">Mesas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../logout.php"><span class="material-symbols-outlined">logout</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="registration-form">
    <form action="processo_edicao.php" method="post">
    <div class="form-icon bg-secondary">
          <i class="fa-solid fa-pen"></i>
        </div>
        <input type="text" name="cod_cliente" id="cod_cliente" style="display: none ;"
         value="<?php 
         if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo  $row["cod_cliente"];
            }
          }
         
         ?>"><br>
        <label for="">NOME CLIENTE</label>
        <input type="text" name="nome_cliente" id="nome_cliente" class="form-control item"
        value="<?php 
         if ($result1->num_rows > 0) {
            while($row = $result1->fetch_assoc()) {
              echo  $row["nome_cliente"];
            }
          }
         
         ?>"
        ><br>
        <label for="">CPF CLIENTE</label>
        <input type="text" name="cpf_cliente" id="cpf_cliente" class="form-control item"
        value="<?php 
         if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
              echo  $row["cpf_cliente"];
            }
          }
         
         ?>"
        
        ><br>
        <label for="">CELULAR CLIENTE</label>
        <input type="text" name="celular_cliente" id="celular_cliente" class="form-control item"
        value="<?php 
         if ($result3->num_rows > 0) {
            while($row = $result3->fetch_assoc()) {
              echo  $row["celular_cliente"];
            }
          }
         
         ?>"
        ><br>
        
        <button type="submit" class="btn btn-block create-account bg-dark")>Editar Cliente</button>
      </form>
    </div>
    </div>
    <script src="../script/jquery.mask.js"></script>
  <script src="../script/script.js"></script>
  <script>
    //Mascaras de formatação cliente
    $('#cpf_cliente').mask('000.000.000-00')
    $('#celular_cliente').mask('(00)00000-0000')
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>