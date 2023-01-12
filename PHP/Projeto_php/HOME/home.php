<?php
//Se nao foi iniciado uma seção e iniciado
session_start();
//Inicializando banco
include("../banco.php");

// Pegando o nome do atendente 
$atendente = $_SESSION["nome_atendente"];

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="../style/style.css">
  <link rel="preload" href="Tapas-Sans.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

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


  <!-- Full Page Image Header with Vertically Centered Content -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-50 align-items-center" style="height: 30%!important;">
        <div class="col-12 text-center">
          <p class="desc" style="color: white;font-weight: bold;position: absolute;right: 30px;margin-top: -72px;font-weight: 500;font-size: 15px;">Bem Vindo : <?php echo $atendente ?></p>
        </div>
      </div>
      <div class="row h-150 align-items-center">
        <div class="col-12 text-center">
          <p class="sobre">Por trás de toda pessoa de sucesso,<br>existe uma boa quantidade de café.</p><br>
          <a class="button butao">Ver Mais</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <section class="py-5" style="background-color:#eaeae9; background-color: #eaeae9; box-shadow: 0px 1px 9px;">

    <center>
      <div class="container">
        <?php
        $sql = "SELECT * FROM produtos LIMIT 3";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <div class="row h-100 align-items-center d-inline-block" style="padding:1rem;">
              <div class="col-lg-12">
                <div class="card" style="width: 18rem;padding: 1rem;box-shadow: 0px 0px 6px;border-radius: 20px;">
                <img src="../PRODUTOS/IMG_PRODUTOS/<?php echo $row["img_produtos"]?>" alt="" class="fotos">
                  <p class="desc_produto" style="font-weight: bold; font-size: 15px; font-family: sans-serif;"><?php echo $row["descricao_produto"]?></p>
                  <p class="preco">R$ <?php echo $row["v_unit_produto"]?></p>
                </div>
              </div>
            </div>
        <?php }
        } ?>
    </center>

  </section>

  <footer style="background-color: #817f7d; padding: 20px;">
    <div class="container" class="desc">
      <div class="row">
        <div class="col-lg-4">
          <img class="logo_img" src="https://data.whicdn.com/images/292717774/original.jpg" alt="" style="width: 18rem;">
        </div>
        <div class="col-lg-6">
          <p class="sobre">Sobre<br></p>
          <p class="text_sob">Somos um grupo de pessoas que esta desenvolvendo um programa capas de ajudar um lojista de uma cafeteria.<br>
            Nossa missão e facilitar e acelerar o atendimento do balconista.<br>
            Quando o balconista tem o auxílio de um programa para cafeteria, o atendimento ganha em qualidade e, consequentemente, o cliente fica mais satisfeito.
          </p>
        </div>
      </div>
    </div>
  </footer>

  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>