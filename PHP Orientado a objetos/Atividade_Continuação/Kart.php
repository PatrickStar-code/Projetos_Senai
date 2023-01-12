<?php
include("./top_bot/top.php");
include("./Classes/Carrinho.class.php");
include("./Classes/Produtos.class.php");
session_start();

?>


<?php
//Navbar
include("./Components/navbar.php");
?>


<?php



if (isset($_GET["action"]) && $_GET["action"] == "inserir") {
    $id_prod = $_GET["id"];
    $qtd = 1;

    $carrinho->inserir($id_prod, 1, $_SESSION["Produtos"][$id_prod]->Desc_produto);
}

// if(isset($_SESSION['carrinho'])){
//     foreach($_SESSION['carrinho'] as $index => $qtd) {
//       echo  $_SESSION["Produtos"][$index]->Desc_produto."<br>";
//       echo  $_SESSION["Produtos"][$index]->valor_unit."<br>";
//       echo $qtd;
//     }
// }

if (isset($_GET["action"]) && $_GET["action"] == "add") {
    $id_prod = $_GET["id"];
    $carrinho->editar_add($id_prod);
}


if (isset($_GET["action"]) && $_GET["action"] == "minus") {
    $id_prod = $_GET["id"];
    $carrinho->editar_sub($id_prod);
}

if (isset($_GET["action"]) && $_GET["action"] == "excluir") {
    $id_prod = $_GET["id"];
    $carrinho->remover($id_prod);
}
if (isset($_GET["action"]) && $_GET["action"] == "apagar") {
    $carrinho->limpar();
}




?>

<section class="h-100 h-custom bg-gray-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Carrinho</h1>
                                        <h6 class="mb-0 text-muted"><?php
                                                                    if (isset($_SESSION['carrinho']))
                                                                        echo "Itens: " . count($_SESSION["carrinho"])
                                                                    ?></h6>
                                    </div>
                                    <?php
                                    if (isset($_SESSION['carrinho'])) {
                                        $carrinho->gerar_total();
                                        foreach ($_SESSION['carrinho'] as $index => $qtd) {
                                    ?>
                                            <hr class="my-4">

                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="<?php echo  $_SESSION["Produtos"][$index]->img ?>" class="img-fluid rounded-3 w-20" alt="Cotton T-shirt">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-black mb-0"><?php echo  $_SESSION["Produtos"][$index]->Desc_produto ?></h6>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <a href="Kart.php?id=<?php echo $index ?>&action=minus">
                                                        <button class="btn btn-link px-2">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                    </a>

                                                    <input id="form1" min="0" name="quantity" value="<?php echo $qtd ?>" type="number" disabled class="input-group" />
                                                    <a href="Kart.php?id=<?php echo $index ?>&action=add">
                                                        <button class="btn btn-link px-2">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0">R$ <?php $carrinho->gerar_sub_total($index);
                                                                        echo $_SESSION["subtotal"][$index];
                                                                        ?></h6>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <i class="fas fa-times" data-modal-toggle="popup-modal<?php echo $index ?>"></i>
                                                </div>
                                            </div>
                                            <div id="popup-modal<?php echo $index ?>" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent  rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal<?php echo $index ?>">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="p-6 text-center">
                                                            <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                            </svg>
                                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Realmente deseja deletar o produto: <?php echo $_SESSION["Produtos"][$index]->Desc_produto ?>?</h3>
                                                            <a href="Kart.php?id=<?php echo $index ?>&action=excluir"><button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                                    Sim
                                                                </button>
                                                            </a>

                                                            <button data-modal-toggle="popup-modal<?php echo $index ?>" type="button" class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                                Não
                                                            </button>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php }
                                    } ?>

                                    <hr class="my-4">

                                    <div class="pt-5">
                                        <h6 class="mb-0"><a href="./produtos.php" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-grey">
                                <div class="p-5">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-4">

                                    </div>

                                    <h5 class="text-uppercase mb-3">Entrega</h5>

                                    <div class="mb-4 pb-2">
                                        <select class="select input-group">
                                            <option value="1">Standard-Delivery- €5.00</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                        </select>
                                    </div>

                                    <h5 class="text-uppercase mb-3">Give code</h5>

                                    <div class="mb-5">
                                        <div class="form-outline">
                                            <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Examplea2">Insira seu código</label>
                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-5">
                                        <h5 class="text-uppercase">Total price</h5>
                                        <h5><?php
                                            if (isset($_SESSION["total"])) {
                                                echo "R$" . $_SESSION["total"];
                                            } else {
                                                echo "R$ 0";
                                            }
                                            ?></h5>
                                    </div>
                                    <div class="justify-between">
                                        <button type="button" class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                            Comprar
                                        </button>
                                        <button type="button" data-modal-toggle="popup-modal" class=" text-white  hover:bg-red-300 focus:ring-4 focus:outline-none focus:ring-gray-300 relative	top-1 dark:focus:ring-gray-800 font-medium rounded-lg text-sm inline-flex items-center px-2 py-2 text-center mr-2">
                                        <img src="./icons8-lixo-64.png" alt="erro" style="height: 20px; width: 20px;">
                                        </button>
                                        <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                                <div class="relative p-4 w-full max-w-md hs-full md:h-auto">
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent  rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="p-6 text-center">
                                                            <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                            </svg>
                                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Realmente deseja deletar os produtos do carrinho?</h3>
                                                            <a href="Kart.php?id=>&action=apagar"><button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                                    Sim
                                                                </button>
                                                            </a>

                                                            <button data-modal-toggle="popup-modal" type="button" class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                                Não
                                                            </button>


                                                        </div>
                                                    </div>
                                                </div>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<?php
include("./Components/footer.php");
include("./top_bot/bot.php");
?>