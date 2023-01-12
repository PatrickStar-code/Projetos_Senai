<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>ALTERAÇÃO DE DADOS</h1>
        <br>
        <table class="table">
            <tr class="table-dark">
                <th>Nome</th>
                <th>Login</th>
                <th>Senha</th>
                <th colspan='2'><center>Ação<center></th>
                <th>Status</th>
            </tr>



                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "escola";
                
                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT id_aluno, nome,usuario , senha FROM alunos ";
                $result = mysqli_query($conn, $sql);


                if (mysqli_num_rows($result) > 0) {
                    $i = 0;
                    
                        
            
                    while ($row = $result->fetch_assoc()) {
                        setcookie("status[$i]","0");
                        $i ++;
                        $ler = $_COOKIE["status[$id]"];
                        
                       

                        echo "<tr>" .
                            "<td>" . $row["nome"] . "</td>" .
                            " <td>" . $row["usuario"] . "</td>" .
                            "<td>" .  $row["senha"] . "</td>" .
                            "<td>" . "<a href ='editar.php?id_aluno=$row[id_aluno]' class='btn btn-primary'>" . "EDITAR" . "</a>" . "</td>" .
                            "<td>" . "<a href ='apagar.php?id_aluno=$row[id_aluno]' class='btn btn-danger'>" . "APAGAR" . "</a>" . "</td>";
                            
                            if($_COOKIE["status[$i]"]=0){
                            echo "<td>" . "<button id=" . "status$row[id_aluno]". "class='btn btn-danger'"."<span id=status_atual>DESATIVAR" ."</button>"."</td>";
                            }
                            else {
                            echo "<td>" . "<button id=" . "status$row[id_aluno]". "class='btn btn-success'"."<span id=status_atual>ATIVAR" ."</button>"."</td>";
                            };
                            "</tr>";                        
                    }

                   
                } else {
                    echo "Ta errado";
                }

                mysqli_close($conn);
                ?>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>