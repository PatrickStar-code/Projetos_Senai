<?php 
    include("../Header_footer/header.php");
    include("alunos.class.php");

    $alunos_array = array(
        $a1 = new aluno,
        $a2 = new aluno,
        $a3 = new aluno,
        $a4 = new aluno
    );

    $a1 ->nome_aluno = "Patrick";
    $a1 ->tel_aluno = "(32)98845-4863";
    $a1 ->email_aluno = "p@gmail.com";

    $a2 ->nome_aluno = "Lucas";
    $a2 ->tel_aluno = "(32)97845-4863";
    $a2 ->email_aluno = "l@gmail.com";

    $a3 ->nome_aluno = "Lucas";
    $a3 ->tel_aluno = "(32)97845-4863";
    $a3 ->email_aluno = "l@gmail.com";

    
?>

<!-- CORPO DA PAGINA -->



<div class="overflow-x-auto relative ">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6 border-b dark:bg-gray-800 dark:border-gray-700">
                    Nome Aluno
                </th>
                <th scope="col" class="py-3 px-6 border-b dark:bg-gray-800 dark:border-gray-700">
                    Telefone Aluno
                </th>
                <th scope="col" class="py-3 px-6 border-b dark:bg-gray-800 dark:border-gray-700">
                    Email Aluno
                </th>
              
            </tr>
        </thead>
        <tbody>
            <?php 
                   foreach ($alunos_array as $alunos) {
                
            ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php          echo($alunos->nome_aluno); ?>
                </th>
                <td class="py-4 px-6">
                    <?php          echo($alunos->tel_aluno); ?>                
                </td>
                <td class="py-4 px-6">
                <?php          echo($alunos->email_aluno); ?>                
                </td>
                
            </tr>
            <?php  } ?>
        </tbody>
    </table>
</div>



<?php include("../Header_footer/footer.php") ?>