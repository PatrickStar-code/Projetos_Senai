<?php
include("./top_bot/top.php");
include("./Classes/Produtos.class.php");
include("./Classes/Carrinho.class.php");
session_start();
?>


<?php
//Navbar
include("./Components/navbar.php");
?>

<div class="container">
  <div class="row row-cols-1 row-cols-md-2 g-3 offset-1">
    <?php
    if(isset($_SESSION["Produtos"])){
    foreach (  $_SESSION["Produtos"] as $posicao => $produtos) { ?>
      <!-- component -->
      <div class="py-6">
        <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
          <div class="w-1/3 bg-cover" style="background-image: url(<?php echo $produtos->img ?>)">
          </div>
          <div class="w-2/3 p-4">
            <h1 class="text-gray-900 font-bold text-2xl"><?php echo $produtos->Desc_produto ?></h1>
            <div class="flex item-center mt-2">
              <svg class="w-5 h-5 fill-current text-gray-700" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
              </svg>
              <svg class="w-5 h-5 fill-current text-gray-700" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
              </svg>
              <svg class="w-5 h-5 fill-current text-gray-700" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
              </svg>
              <svg class="w-5 h-5 fill-current text-gray-500" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
              </svg>
              <svg class="w-5 h-5 fill-current text-gray-500" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
              </svg>
            </div>
            <div class="flex item-center justify-between mt-3">
              <h1 class="text-gray-700 font-bold text-xl">R$ <?php echo $produtos->valor_unit ?></h1>
              <a href="./Kart.php?id=<?php echo $posicao ?>&action=inserir"><button class="px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Card</button></a>
            </div>
          </div>
        </div>
      </div>



    <?php } 
    }   ?>
  </div>
</div>
</div>




<?php
include("./top_bot/bot.php")
?>