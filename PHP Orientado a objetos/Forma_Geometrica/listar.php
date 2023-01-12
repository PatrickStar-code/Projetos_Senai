<?php
include("./top_bot/top.php");

include("./Classes/forma.class.php");

session_start();

?>

<?php
if (!isset($_SESSION["objetos"])) {
    echo "SEM OBJETOS CRIADOS";
} else {
?>

    <div class="flex flex-col items-center justify-center w-screen min-h-screen bg-gray-900 py-10">

        <!-- Component Start -->
        <h1 class="text-lg text-gray-400 font-medium">Listagem</h1>
        <div class="flex flex-col mt-6">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden sm:rounded-lg">
                        <table class="min-w-full text-sm text-gray-400">
                            <thead class="bg-gray-800 text-xs uppercase font-medium">
                                <tr>
                                    <th></th>
                                    <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                        Forma Geometrica
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                        Apelido
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                        Area Em CM²
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-800">
                                <?php foreach ($_SESSION["objetos"] as $id => $objeto) {
                                ?>
                                    <tr class="bg-white bg-opacity-20">
                                        <td class="pl-4">
                                            <?php echo $id ?>
                                        </td>
                                        <td class="flex px-6 py-4 whitespace-nowrap">
                                            <?php
                                            $forma = $_SESSION["objetos"][$id]->forma;
                                            if ($forma  == "Quadrado") { ?>
                                                <img class="w-10" src="https://cdn-icons-png.flaticon.com/512/33/33879.png" alt="Quadrado">
                                            <?php } elseif ($forma  == "Circulo") { ?>
                                                <img class="w-10" src="https://cdn-icons-png.flaticon.com/512/5400/5400304.png" alt="Circulo">
                                            <?php }else{ ?>
                                                <img class="w-10" src="https://cdn-icons-png.flaticon.com/512/649/649734.png" alt="Trapezio">
                                            <?php } ?>
                                            <span class="ml-2 font-medium"><?php echo $_SESSION["objetos"][$id]->forma ?></span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="ml-2 font-medium"><?php echo $_SESSION["objetos"][$id]->apelido ?></span>

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="ml-2 font-medium"><?php echo $_SESSION["objetos"][$id]->area ?></span>
                                        </td>
                                <?php
                                }
                            }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Component End  -->
    </div>


    <!-- BODY -->

    <!-- FIM BODY -->

    <?php
    include("./top_bot/bot.php")
    ?>