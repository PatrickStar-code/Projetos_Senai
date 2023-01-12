<?php
// CONECTANDO DATABASE
include "../banco.php";
//MENSAGEM QUE APARECE NA TELA EM FORMA DE ALERT CASO O INPUT DER CERTO
$msg = "";
//Verifica se ja foi setado algo na pagina e realiza a ação se sim
if (isset($_POST["desc_produto"]) || (isset($_POST['v_unit_produto'])) || (isset($_POST["CATEGORIAS_cod_categoria"])) || isset($_POST["cod_barras"])) {
    $descricao_produto = $_POST["desc_produto"];
    $v_unit_produto = $_POST["v_unit_produto"];
    $COD_categoria_produto = $_POST["COD_categoria_produto"];
    $COD_barras = $_POST["cod_barras"];
    $img_produtos = $_FILES["img_produtos"];
    $extensao = strtolower(substr($_FILES["img_produtos"]['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "IMG_PRODUTOS/";
    move_uploaded_file($_FILES["img_produtos"]['tmp_name'], $diretorio . $novo_nome);
    $uploaddir = 'IMG_PRODUTOS/'; //directório onde será gravado a imagem

    $sql = "INSERT INTO produtos (descricao_produto, v_unit_produto,CATEGORIAS_cod_categoria,cod_barras,img_produtos )
    VALUES ('$descricao_produto', '$v_unit_produto', '$COD_categoria_produto','$COD_barras','$novo_nome')";
    if ($conn->query($sql) === TRUE) {
        $msg = "<div class='alert alert-success' role='alert' style='margin-top:10px;'><i class='fa-solid fa-check'></i> Operação realizada com sucesso<div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Produto</title>
    <link rel="stylesheet" href="../style/style.css">
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
            <form method="post" enctype="multipart/form-data">
                <div class="form-icon bg-secondary">
                    <i class="fa-solid fa-mug-hot"></i>
                </div>
                <div class="mb-3">
                    <label for="desc_produto" class="form-label">Descrição Produto</label>
                    <input type="text" name="desc_produto" class="form-control item" id="desc_produto" required aria-describedby="nomeHelp">
                </div>
                <div class="mb-3">
                    <label for="v_unit_produto" class="form-label">Valor Unitario</label>
                    <input type="text" name="v_unit_produto" class="form-control item" id="v_unit_produto" required>
                </div>
                <div class="mb-3">
                    <label for="cod_barras" class="form-label">Codígo de Barras</label>
                    <input type="text" name="cod_barras" class="form-control item" id="cod_barras" required>
                </div>
                <div class="mb-3">
                    <label for="img_produtos" class="form-label">Inserção de uma imagem para o produto</label>
                    <input type="file" name="img_produtos" class="form-control " id="img_produtos" required accept="image/*" required>
                </div>
                <div class="mb-3">
                    <label for="COD_categoria_produto">Selecione a categoria do produto</label>
                    <select name="COD_categoria_produto" required id="Categoria">
                        <?php
                        //Selecionando categorias
                        $sql2 = "SELECT * FROM categorias";
                        $result2 = $conn->query($sql2);
                        if ($result2->num_rows) {
                            //Mostrando categorias
                            while ($row = $result2->fetch_assoc()) {
                        ?>
                                <option value="<?php echo $row["cod_categoria"] ?>"><?php echo $row["descricao_categoria"] ?></option>

                            <?php
                            } ?>
                        <?php } ?>
                    </select>

                </div>
                <button type="submit" class="btn btn-block create-account bg-dark">Cadastrar Produto</button>
                <?php
            echo $msg
            ?>
        </div>
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