<?php
include("./top_bot/top.php");

include("./Classes/forma.class.php");

session_start();

?>
<style>
    input:checked+label {
        border-color: black;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }
</style>
<!-- BODY -->

<center>
    <h1 class="font-bold text-2xl">Selecione uma forma geometrica</h1>
    <br>
    <a href="listar.php">
        <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            listar
        </button>
    </a>

</center>

<div class="flex items-center justify-center w-screen h-screen">

    <!-- Component Start -->


    <form class="grid grid-cols-3 gap-3 w-full max-w-screen-sm" action="definicao.php" method="post">
        <div>
            <input class="hidden" id="radio_1" value="c" type="radio" name="radio" checked>
            <label class="flex flex-col p-4 border-2 border-gray-400 cursor-pointer" for="radio_1">
                <span class="text-xs font-semibold uppercase"><img src="https://cdn-icons-png.flaticon.com/512/5400/5400304.png" alt="" srcset=""></span>
            </label>
        </div>
        <div>
            <input class="hidden" id="radio_2" value="q" type="radio" name="radio">
            <label class="flex flex-col p-4 border-2 border-gray-400 cursor-pointer" for="radio_2">
                <span class="text-xs font-semibold uppercase"><img src="https://cdn-icons-png.flaticon.com/512/33/33879.png" alt="" srcset=""></span>
            </label>
        </div>
        <div>
            <input class="hidden" id="radio_3" value="t" type="radio" name="radio">
            <label class="flex flex-col p-4 border-2 border-gray-400 cursor-pointer" for="radio_3">
                <span class="text-xs font-semibold uppercase"><img src="https://cdn-icons-png.flaticon.com/512/649/649734.png" alt="" srcset=""></span>
            </label>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Criar Objeto</button>
    </form>




    <!-- Component End  -->

</div>

<!-- FIM BODY -->

<?php
include("./top_bot/bot.php")
?>