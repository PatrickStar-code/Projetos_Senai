<?php
// Puxando banco de dados
include_once("banco.php");
$error=""; 

//Como não ffoi definido um action foi enviado para a mesma pagina os dados
//Se estiver algo gravado sera possivel o login , se tiver prenchido uma vez
if (isset($_POST['user']) || isset($_POST['senha'])) {
    // Se o ususario não tiver nada prenchido retorna erro , srtlen pega a quantidade de caracteres se igual a zero logo nada esta escrito
    if (strlen($_POST['user']) == 0) {
        $error = "Preencha seu usuario";
    } else if (strlen($_POST['senha']) == 0) {
        $error = "Preencha sua senha";
    } else {

        $usuario = $_POST["user"];
        $senha = $_POST["senha"];

        //SELECT NA TABELA DE USUARIOS
        $sql = "SELECT * FROM atendentes WHERE login = $usuario AND senha = $senha";
        $result = $conn->query($sql);


        //sE POSSUIR RESULTADO LEVA PARA PAGINA,CASO CONTRARIO RECEBE ERRO
        if ($result->num_rows > 0) {
            //Pega os dados
            $usuario = $result->fetch_assoc();

            //Se nao possuir nenhuma seção inicia uma seção'Parecido com um cookie'
            if (!isset($_SESSION)) {
                session_start();
            }



            //Pegando nome do usuario
            $_SESSION['nome_atendente'] = $usuario['nome_atendente'];
            var_dump($_SESSION['nome_atendente']);

            //Leva a outra pagina se possuir algum registro
            header("location:HOME/home.php");
        } else {
            $error = "Login ou Senha invalidos";
        }
    }
}
$conn->close();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


</head>

<body>
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex"
        style="min-height: 100vh; background-size: 1600px, auto, contain ; background-position: center; background-repeat: no-repeat; background-image: url(https://baristawave.com/wp-content/uploads/2021/06/cafeteria-bebida-latte-art.jpeg);">
        <div class="container-fluid">
            <div class="row  justify-content-center align-items-center d-flex-row text-center h-100">
                <div class="col-12 col-md-4 col-lg-3 h-50">
                     <center>
                        <img src="IMGS/logo.png" alt="" style="width: 250px; margin-top: -50px;">
                    </center>
                    <div class="card shadow-lg p-2 mb-5 bg-white rounded">
                        <div class="card-body mx-auto">
                            <h4 class="card-title mt-3 text-center">Login</h4>
                            <br>
                            <form method="post">
                                <div class="form-group input-group">
                                        <span class="input-group-text"> <i class="fa fa-user"></i></span>
                                    <input  class="form-control" placeholder="Login" type="text" name="user">
                                </div>

                                <br>
                                <div class="form-group input-group">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    <input class="form-control" placeholder="Digite sua senha" type="password" name="senha">
                                </div>
                                <br>
                                <?php echo $error ?>  
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block"> LOGAR </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>
</body>

</html>