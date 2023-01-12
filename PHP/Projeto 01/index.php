<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>


<body>
    <center>
        <div class="container">
            <br>
            <h1>Formulario de Cadastro</h1>
            <br>
            <form action="processar.php" method="post" id="form-cadastro">
                <!-- Gutter g-1 -->
                <div class="row g-5">
                    <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                            <input type="text" id="Nome" class="form-control" name="Nome"
                                value='<?php ; echo 'Patrick Almeida' ?>' <label class="form-label"
                                for="Nome"><b>NOME</b></label>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Email input -->
                        <div class="form-outline">
                            <input type="tel" id="Cel" class="form-control" name="Celular" />
                            <label class="form-label" for="Cel"><b>CELULAR</b></label>
                        </div>
                    </div>
                </div>

                <hr />

                <!-- Gutter g-5 -->
                <div class="row g-5">
                    <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                            <input type="text" id="cpf" class="form-control" name="CPF" />
                            <label class="form-label" for="cpf"><b>CPF</b></label>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Email input -->
                        <div class="form-outline">
                            <input type="email" id="email" class="form-control" name="Email" />
                            <label class="form-label" for="email"><b>EMAIL</b></label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-5">
                    <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                            <input type="text" id="Cep" class="form-control" name="Cep" />
                            <label class="form-label" for="Cep"><b>CEP</b></label>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Email input -->
                        <div class="form-outline">
                            <input type="email" id="bairro" class="form-control" name="Email" />
                            <label class="form-label" for="bairro"><b>BAIRRO</b></label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-5">
                    <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                            <input type="text" id="cidade" class="form-control" name="CPF" />
                            <label class="form-label" for="cidade"><b>CIDADE</b></label>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Email input -->
                        <div class="form-outline">
                            <input type="email" id="uf" class="form-control" name="Email" />
                            <label class="form-label" for="uf"><b>UF</b></label>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" id="btn-enviar">Submeter Dados</button>
            </form>
            <p id="return"></p>

            <div class="modal" tabindex="-1" role="dialog" id="modal_alert">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Error</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Insira Corretamente os dados</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</html>
<?php 
                $agora = date('d/m/Y  H:i:s');
                $total = 500;

                $n1=15;
                $n2=25;
                $n3=10;
                $n4=50;

                echo "<br>";
                echo "<div class='teste'>$agora</div>";
                
                echo "R$ $total";
                echo "<br>";
                echo "MEDIA DE ". ($n1+$n2+$n3+$n4)/4;
                echo "<br>";
                echo "SOMA DE ". ($n1+$n2+$n3+$n4)
            ?>
</center>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<script src="js/script.js"></script>
</body>

</html>