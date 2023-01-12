<?php
include("../banco.php");
$cod_pedido = $_GET["cod_pedido"];
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pedidos</title>
  <link rel="stylesheet" href="../style/scliente.css">
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
      <form action="editar_pedido.php" method="post">
        <div class="form-icon bg-secondary">
          <i class="fa-solid fa-pen"></i>
        </div>
        <?php
        $sql_pedidos = "SELECT * FROM pedidos where cod_pedido='$cod_pedido'";
        $result = $conn->query($sql_pedidos);
        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            //  echo "id: " . $row["cod_pedido"].$row["data_pedido"].$row["hora_pedido"]. "<br>";


        ?>
            <input type="cod_mesa" name="cod_pedido" value="<?php echo $cod_pedido ?>" style="display:none;">

            <label for="data_pedido" class="col-form-label">Data Pedido</label>
            <input type="date" value="<?php echo $row["data_pedido"]; ?>" class="form-control item" id="data_pedido" name="data_pedido" required>
            <br>
            <label for="hora_pedido">Hora Pedido</label>
            <input type="time" value="<?php echo $row["hora_pedido"] ?>" class="form-control item" id="hora_pedido" name="hora_pedido" required>
            <br>
        <?php
          }
        } else {
          echo "0 results";
        }
        ?>

        <?php
        $sql_atendente = "SELECT * FROM pedidos,atendentes where ATENDENTES_cod_atendente=cod_atendente and cod_pedido='$cod_pedido'";
        $result = $conn->query($sql_atendente);
        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            //  echo "id: " . $row["ATENDENTES_cod_atendente"]. "<br>";
        ?>
            <label for="Cod_atendente">Codigo do Atendente responsavel</label>
            <select name="cod_atendente" id="atendente" class="form-control item" required>
              <option selected="selected" value="<?php echo $row["ATENDENTES_cod_atendente"]; ?>"><?php echo $row["nome_atendente"]; ?></option>
              <?php
              //Selecionando cliente
              $sql3 = "SELECT * FROM atendentes";
              $result3 = $conn->query($sql3);
              if ($result3->num_rows) {
                //Mostrando cliente
                while ($row = $result3->fetch_assoc()) {
              ?>

                  <option value="<?php echo $row["cod_atendente"] ?>"><?php echo $row["nome_atendente"] ?></option>
                  <?php ?>
              <?php
                }
              } ?>

            </select>
        <?php
          }
        } else {
          echo "0 results";
        }
        ?>
        <br>
        <label for="cliente">Cliente Cadastrado</label>
        <?php
        $sql_cliente = "SELECT * FROM pedidos,clientes where CLIENTES_cod_cliente=cod_cliente and cod_pedido='$cod_pedido'";
        $result = $conn->query($sql_cliente);
        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            //   echo "NOME: " . $row["CLIENTES_cod_cliente"]. "<br>";
        ?>
            <select name="cliente" id="cliente" class="form-control item">
              <option selected="selected" value="<?php echo $row["CLIENTES_cod_cliente"]; ?>"><?php echo $row["nome_cliente"]; ?></option>
              <?php
              //Selecionando cliente
              $sql2 = "SELECT * FROM clientes";
              $result2 = $conn->query($sql2);
              if ($result2->num_rows) {
                //Mostrando cliente
                while ($row = $result2->fetch_assoc()) {
              ?>

                  <option value="<?php echo $row["cod_cliente"] ?>"><?php echo $row["nome_cliente"] ?></option>

                <?php
                } ?>
              <?php } ?>
            </select>
        <?php
          }
        } else {
          echo "0 results";
        }

        ?>
        <hr>
        <!-- Iten_Pedido -->
        <?php
        $sql_pedidos = "SELECT * FROM itens_pedidos where PEDIDOS_cod_pedido='$cod_pedido'";
        $result = $conn->query($sql_pedidos);
        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            //  echo "id: " . $row["cod_pedido"].$row["data_pedido"].$row["hora_pedido"]. "<br>";
        ?>
            <label for="qtde">Quantidade Produto</label>
            <input type="number" name="qtde_prod" id="qtde_prod" class="form-control item" value="<?php echo $row["qtde"]; ?>" required>
        <?php
          }
        } else {
          echo "0 results";
        }
        ?>
        <?php
        $sql_produto = "SELECT * FROM pedidos,produtos where PRODUTOS_cod_produto=cod_produto and cod_pedido='$cod_pedido'";
        $result = $conn->query($sql_produto);
        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            // echo "PRODUTO COD: " . $row["PRODUTOS_cod_produto"]. "<br>";
        ?>
            <label for="Produto">Produto</label>
            <select name="Produto" id="Produto" class="form-control item" required>
              <option selected="selected" value="<?php echo $row["PRODUTOS_cod_produto"]; ?>"><?php echo $row["descricao_produto"]; ?></option>
              <?php
              //Selecionando produo
              $sql2 = "SELECT * FROM produtos";
              $result2 = $conn->query($sql2);
              if ($result2->num_rows) {
                //Mostrando produto
                while ($row = $result2->fetch_assoc()) {
              ?>
                  <option value="<?php echo $row["cod_produto"] ?>"><?php echo $row["descricao_produto"] ?></option>

                <?php
                } ?>
              <?php } ?>
            </select>
        <?php
          }
        } else {
          echo "0 results";
        }
        ?>
        <br>
        <button type="Submit" class="btn btn-block create-account bg-dark">Editar Pedido</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>