<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="Css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>

<body>
    <$php 
        
    $>
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
                        <input type="text" id="Nome" class="form-control" name="Nome" />
                        <label class="form-label" for="Nome"><b>NOME</b></label>
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
                        <input type="text" id="Cep" class="form-control" name="CPF" />
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <script src="Script/script.js"></script>
</body>

</html>