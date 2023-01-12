<?php
    include("./top_bot/top.php");
    include("./Classes/Aluno.class.php");



   
    $aluno1 -> AlterNotaArray($notas_a1);
    $aluno1 -> Relatorio();
    
    
    
?>

<br>
<center>
    <a href="Certificado.php"><button>Emitir Certificado</button></a>
</center>



<?php
    include("./top_bot/bot.php")
?>  