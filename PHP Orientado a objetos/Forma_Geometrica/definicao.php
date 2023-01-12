<?php
include("./top_bot/top.php");

include("./Classes/forma.class.php");

session_start();


if (isset($_POST["Enviar_C"])) {

    $apelido = $_POST["apelido"];
    $raio = $_POST["raio"];

    $circulo = new Circulo($apelido, $raio);
    $circulo->calcular_area();
    $_SESSION["objetos"][] = $circulo;

    $_SESSION["msg"] =  '<div id="toast-success"  class="fixed-bottom flex items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
        <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ml-3 text-sm font-normal">Objeto Criado</div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>';
}

if (isset($_POST["Enviar_q"])) {

    $apelido = $_POST["apelido_q"];
    $altura = $_POST["altura_q"];
    $largura = $_POST["largura_q"];

    $quadrado = new Quadrado($apelido,$largura,$altura);
    $quadrado->calcular_area();
    $_SESSION["objetos"][] = $quadrado;

    $_SESSION["msg"] =  '<div id="toast-success"  class="fixed-bottom flex items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Objeto Criado</div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>';
}

if (isset($_POST["Enviar_t"])) {

    $apelido = $_POST["apelido_t"];
    $altura = $_POST["altura_t"];
    $bmaior = $_POST["bmaior_t"];
    $bmenor = $_POST["bmenor_t"];

    $trapezio = new Trapezio($apelido,$bmaior,$bmenor,$altura);
    $trapezio->calcular_area();
    $_SESSION["objetos"][] = $trapezio;

    $_SESSION["msg"] =  '<div id="toast-success"  class="fixed-bottom flex items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Objeto Criado</div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>';
}


if ($_POST["radio"] == "c") {
?>
    <!-- botao retornar -->
    
    <!-- component -->

    <body class="flex flex-col items-center justify-center w-screen h-screen bg-gray-200 text-gray-700">

        <!-- Component Start -->
        <a href="index.php">
        <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            retornar
        </button>
    </a>
        <h1 class="font-bold text-2xl">Definição de Parametros</h1>
        
        <br>
        <form class="flex flex-col bg-white rounded shadow-lg p-12 mt-12" action="#" method="POST">
            <label class="font-semibold text-xs" for="apelido">Apelido</label>
            <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text" name="apelido">
            <label class="font-semibold text-xs mt-3" for="passwordField">Raio Em Cm</label>
            <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="number" name="raio">
            <input type="text" name="radio" value=<?php echo $_POST["radio"] ?> style="display:none;">
            <br>
            <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" name="Enviar_C">Salvar</button>
            <div class="flex mt-6 justify-center text-xs">
            </div>

        </form>
        <!-- Component End  -->

    </body>
<?php } ?>

<?php
if ($_POST["radio"] == "q") {
?>
    <!-- botao retornar -->
    <a href="index.php">
        <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            retornar
        </button>
    </a>
    <!-- component -->

    <body class="flex flex-col items-center justify-center w-screen h-screen bg-gray-200 text-gray-700">

        <!-- Component Start -->
        <h1 class="font-bold text-2xl">Definição de Parametros</h1>
        <br>
        <form class="flex flex-col bg-white rounded shadow-lg p-12 mt-12" action="" method="POST">
            <label class="font-semibold text-xs" for="apelido">Apelido</label>
            <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text" name="apelido_q">
            <label class="font-semibold text-xs mt-3" for="passwordField">Altura</label>
            <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="number" name="altura_q">
            <label class="font-semibold  text-xs mt-3" for="passwordField">Largura</label>
            <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="number" name="largura_q">
            <input type="text" name="radio" value=<?php echo $_POST["radio"] ?> style="display:none;">
            <button class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700" name="Enviar_q">Salvar</button>
            <div class="flex mt-6 justify-center text-xs">
            </div>
        </form>
        <!-- Component End  -->

    </body>
<?php } ?>

<?php
if ($_POST["radio"] == "t") {
?>
    <!-- botao retornar -->
    <a href="index.php">
        <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            retornar
        </button>
    </a>
    <!-- component -->

    <body class="flex flex-col items-center justify-center w-screen h-screen bg-gray-200 text-gray-700">

        <!-- Component Start -->
        <h1 class="font-bold text-2xl">Definição de Parametros</h1>
        <br>
        <form class="flex flex-col bg-white rounded shadow-lg p-12 mt-12" action="" method="POST">
            <label class="font-semibold text-xs" for="apelido">Apelido</label>
            <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text" name="apelido_t">
            <label class="font-semibold text-xs mt-3" for="passwordField">Altura</label>
            <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="number" name="altura_t">
            <label class="font-semibold text-xs mt-3" for="passwordField">Base maior</label>
            <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="number" name="bmaior_t">
            <label class="font-semibold text-xs mt-3" for="passwordField">Base menor</label>
            <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="number" name="bmenor_t">
            <input type="text" name="radio" value=<?php echo $_POST["radio"] ?> style="display:none;">

            <button class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700" name="Enviar_t">Salvar</button>
            <div class="flex mt-6 justify-center text-xs">
            </div>
        </form>
        <!-- Component End  -->

    </body>
<?php } ?>
<!-- BODY -->
<?php if (isset($_SESSION["msg"])) {
    echo $_SESSION["msg"];
    unset($_SESSION["msg"]);
} ?>


<!-- FIM BODY -->

<?php
include("./top_bot/bot.php")
?>