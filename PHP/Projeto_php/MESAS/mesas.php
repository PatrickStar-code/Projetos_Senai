<?php
//Incluindo o banco
include "../banco.php";

$sql = "SELECT * FROM mesas";
$result = $conn->query($sql);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mesas</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../style/style.css">
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
  <!-- Fim Navbar -->



  <br>
  
  <div class="container">
  <?php
      //CRIANDO MESAS VIA PHP
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>
    <div class="row d-inline-block md-2">
 
          <div class="col-md-6 col-lg-12 pb-3" style="padding: 50px;width:25.2rem" >  
            

            <!-- Copy the content below until next comment -->
            <div class="card card-custom bg-white border-white border-0">
              <div class="card-custom-img">
              </div>
              <div class="card-custom-avatar">
                <img class="img-fluid" src="../IMGS/571417-mesa-com-icone-de-cadeiras-grátis-vetor.jpg" alt="Avatar" />
        </div>
              <div class="card-body" style="overflow-y: auto">
                <h4 class="card-title">MESA #<?php echo $row["cod_mesa"] ?></h4>
                <h5 class="card-subtitle mb-2 text-muted">Status: <?php 
                if ($row["status_mesa"] == "LIVRE"){
                  echo "<span style=color:green;>LIVRE<span>";
                }
                else{
                  echo "<span style=color:red;>FECHADO<span>";
                }
                ?>
                </h5>

                <div class="card-text">
                  <h6>Descrição: <?php echo $row["descricao_mesa"] ?></h6>
                  <h6>Localização: <?php echo $row["localizacao_mesa"] ?></h6>
                  <h6>Capacidade: <?php echo $row["capacidade_mesa"] ?></h6>
                </div>

              </div>

              <div class="card-footer card-footerb" style="background: inherit; border-color: inherit;">
                <button class="btn btn-dark">
              <a class="ss" href=" 
                <?php
                if ($row["status_mesa"] == "FECHADO")
                  echo '#modalPedido' . $row["status_mesa"]
                ?>
                " data-bs-toggle="modal">Acessar</a>
                </button>
                <a type="button" class="btn btn-dark" href="alterar_status.php?cod_mesa=<?php echo $row["cod_mesa"] ?>">Alterar Status</a>
              </div>
            </div>
            <!-- Copy until here -->
          </div>
          <div class="modal fade" id="<?php echo 'modalPedidoFECHADO' ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Cadastrar pedido</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div>
                    <form action="cadastrar_pedido.php" method="post">
                      <input type="cod_mesa" name="cod_mesa" value="<?php echo $row["cod_mesa"] ?>" style="display:none;">

                      <label for="data_pedido" class="col-form-label">Data Pedido</label>
                      <input type="date" value="<?php echo date("Y-m-d"); ?>" class="form-control" id="data_pedido" name="data_pedido" required>
                      <br>
                      <!-- <label for="hora_pedido">Hora Pedido</label>
                      <input type="time" class="form-control" id="hora_pedido" name="hora_pedido" required>
                      <br> -->
                      <label for="Cod_atendente">Codigo do Atendente responsavel</label>
                      <select name="cod_atendente" id="atendente" class="form-control" required>
                        <?php
                        //Selecionando atendente
                        $sql3 = "SELECT * FROM atendentes";
                        $result3 = $conn->query($sql3);
                        if ($result3->num_rows) {
                          //Mostrando atendente
                          while ($row = $result3->fetch_assoc()) {
                        ?>
                            <option value="<?php echo $row["cod_atendente"] ?>"><?php echo $row["nome_atendente"] ?></option>

                          <?php
                          } ?>
                        <?php } ?>
                      </select>
                      <br>
                      <label for="cliente">Cliente Cadastrado</label>
                      <select name="cliente" id="cliente" class="form-control">
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
                      <hr>
                      <!-- Iten_Pedido -->
                      <label for="qtde">Quantidade Produto</label>
                      <input type="number" name="qtde_prod" id="qtde_prod" class="form-control" required>
                      <br>
                      <label for="Produto">Produto</label>
                      <select name="Produto" id="Produto" class="form-control" required>
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
                      <br>
                      <button type="Submit" class="btn btn-primary">Enviar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
  <?php } ?>
<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>



</html>