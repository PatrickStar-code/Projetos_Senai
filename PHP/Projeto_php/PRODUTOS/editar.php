<?php
include_once "../banco.php";
$cod_produto = $_GET["cod_produto"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT *  FROM produtos where cod_produto=$cod_produto";
$result = $conn->query($sql);


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
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
    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-light shadow top-fixed" class="cabeca" style="background-color: #2d2926;">
    <div class="container">
      <div class="position-absolute top-0 start-50 translate-middle"><img src="../IMGS/logo.png" alt="" style="width: 200px; margin-top: 115px;"></div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="position: relative; position: relative; border: 1px solid white;">
      <span class="material-symbols-outlined" style="color: white;">menu</span>
        
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="">Home</a>
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
            <form action="processo_edicao.php" method="post" enctype="multipart/form-data">
                <div class="form-icon bg-secondary">
                    <i class="fa-solid fa-pen"></i>
                </div>
                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>

                        <input type="text" name="cod_prod" value="<?php echo $row["cod_produto"] ?>" style="display: none;">
                        <label for="">CODIGO DE BARRAS</label>
                        <input type="text" name="cod_barras" class="form-control item" id="" value="<?php echo $row["cod_barras"] ?>"><br>
                        <label for="">DESCRICAO</label>
                        <input type="text" name="descricao_produto" class="form-control item" id="" value="<?php echo $row["descricao_produto"] ?>"><br>
                        <label for="">Valor unítario</label>
                        <input type="text" name="v_unit_produto" id="v_unit_produto" class="form-control item" value="<?php echo $row["v_unit_produto"] ?>"><br>
                        <label for="img_produtos">Alterar Imagem: Atual-</label>
                        <style>
                            img {
                                width: 200px;
                            }
                        </style>
                        <img src="IMG_PRODUTOS/<?php echo $row["img_produtos"] ?>" alt="" class="img-responsive">
                        <input type="file" name="img_produtos" id="img_produtos" class="form-control"><br>
                        <br>
                <?php
                    }
                }
                ?>
                <label for="COD_categoria_produto">Selecione a acategoria do Produto</label>
                <select name="COD_categoria_produto" id="Categoria">
                    <?php
                    //Selecionando categorias
                    $sql2 = "SELECT * FROM categorias";
                    $result2 = $conn->query($sql2);
                    if ($result2->num_rows) {
                        //Mostrando categorias
                        while ($row = $result2->fetch_assoc()) {
                    ?>
                            <option value="<?php echo $row["cod_categoria"] ?>"><?php echo $row["descricao_categoria"] ?></option>

                        <?php } ?>
                    <?php } ?>
                </select><br><br>
                <button type="submit" class="btn btn-block create-account bg-dark">Editar Produto</button>
            </form>
        </div>
    </div>
    <script src="../script/jquery.mask.js"></script>
    <script>
        //APLICANDO MASCARA
        $('#v_unit_produto').mask('000.000.000.000.000,00', {
            reverse: true
        });
    </script>
</body>

</html>