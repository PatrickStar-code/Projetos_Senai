<?php 
    include_once("./Classes/bendedor.class.php");
    include("./top_bot/top.php");

    if(isset($_POST["mandei"])){
        $sal = $_POST["salario"];
        $cargo = $_POST["cargo"];
        $total = $_POST["total"];

        if($cargo == "Junior"){
            $junior = new Junior($sal,$total);
            $junior ->calcularSalario();
        }
        else if($cargo == "Pleno"){
            $pleno = new Pleno($sal,$total);
            $pleno ->calcularSalario();
        }
        else{
            $senior = new Senior($sal,$total);
            $senior->calcularSalario();
        }
    }
?>



<!-- BODY -->
<form action="" method="POST">
<label for="salario">Salario</label>
<br>
<input type="text" name="salario">
<br>
<br>

<label for="total">Total Vendas</label>
<br>
<input type="text" name="total">

<div class="row"></div>
<label for="cargo">Junior</label>
<input type="radio" name="cargo" id="Junior" required value="Junior">


<div class="row"></div>
<label for="cargo">Pleno</label>
<input type="radio" name="cargo" id="Pleno" required value="Pleno">

<div class="row"></div>
<label for="cargo">Senior</label>
<input type="radio" name="cargo" id="Senior" required value="Senior">
<br>
<div class="row"></div>
<button type="submit" class="btn" name="mandei">Enviar</button>
</form>
<!-- FIM BODY -->


<?php 
    include("./top_bot/bot.php")
?>