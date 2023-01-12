<?php
/*Pegando informaçoes do banco*/
include("../banco.php");

$LIMIT = 10 /*Variavel para guardar a quantidade por pagina*/;


$sql = "SELECT * FROM pedidos,itens_pedidos,produtos WHERE cod_pedido = PEDIDOS_cod_pedido AND PRODUTOS_cod_produto = cod_produto ORDER BY cod_pedido "; /*Fazendo o select*/
$result = $conn->query($sql);

/*Falta paginação,editar e vizualizar,E descobrir como coloca uma imagem no banco de dados */


$conn->close();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pedidos</title>

    <link rel="stylesheet" href="../Style/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/slistagem.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tabela_pedido').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json"
                }
            });

        });
    </script>
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
    <!-- FIM NAVBAR --><br><br>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="main-box clearfix">
                    <div class="table  table-responsive">
                        <table class="table user-list table-responsive" id="tabela_pedido">
                            <thead>
                                <tr>
                                    <th><span>Nº Pedido</span></th>
                                    <th><span>Produto</span></th>
                                    <th><span>Qtde</span></th>
                                    <th><span>Data e Hora Pedido</span></th>
                                    <th><span>Total Pedido</span></th>
                                    <th><span>Ações</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- PEGANDO OS DADOS DO BANCO  -->
                                    <?php
                                    if ($result == true) {
                                        while ($row = $result->fetch_assoc()) { ?>
                                            <td>
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWeFnfPV-m_CofW2qj7s4c7Z29UR03132_YQ&usqp=CAU" alt="" class="img-responsive">
                                                <a href="#" class="user-link"><?php echo $row["cod_pedido"] ?></a>
                                                <span class="user-subhead">Nº Mesa:<?php echo $row["MESAS_cod_mesa"] ?></span>
                                            </td>

                                            <td>
                                                <img src="../PRODUTOS/IMG_PRODUTOS/<?php echo $row["img_produtos"] ?>" alt="">
                                                <?php echo $row["descricao_produto"]  ?>
                                            </td>
                                            <td>
                                                <?php echo $row["qtde"]  ?>
                                            </td>
                                            <td style="width:20%">
                                                <?php echo $row["data_pedido"]  ?>
                                                <br>
                                                <?php echo $row["hora_pedido"] ?>
                                            </td>
                                            <td style="width: 10%;">
                                                <?php echo $row["sub_total"] ?>
                                            </td>


                                            <td style="width: 0%;">


                                                <!-- SEGUNDO BOTAO -->
                                                <a href="editar.php?cod_pedido=<?php echo $row['cod_pedido'] ?>" class="table-link">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>


                                                <!-- TERCEIRO BOTAO -->
                                                <a href="#modal<?php echo $row["cod_pedido"] ?>del" class="table-link danger" data-toggle="modal">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                <!-- MODAL -->
                                                <div id="modal<?php echo $row["cod_pedido"] ?>del" class="modal fade">
                                                    <div class="modal-dialog modal-confirm">
                                                        <div class="modal-content">
                                                            <div class="modal-header flex-column">
                                                                <div class="icon-box">
                                                                    <i class="material-icons">&#xE5CD;</i>
                                                                </div>
                                                                <h4 class="modal-title w-100">Tem certeza?</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Você realmente deseja deletar este dado? Ao deletar não sera possivel sua recuperação.</p>
                                                            </div>
                                                            <div class="modal-footer justify-content-center">
                                                                <button type="button" class="btn btn-secondary toast-push-erro" data-dismiss="modal">Cancelar</button>
                                                                <button type="button" class="btn btn-danger" onclick="deletar_pedido(<?php echo $row['cod_pedido'] ?>)" data-dismiss="modal">Deletar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- FIM MODAL -->



                                            </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="toast toast-erro position-absolute bottom-0 end-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="../IMGS/favicon-32x32.png" class="rounded me-2" alt="...">
                    <strong class="me-auto">BoockCoffe</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Procedimento Cancelado
                </div>

            </div>
        </div>

        <script src="../script/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>