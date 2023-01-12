<?php
session_start();
include("./top_bot/top.php");
// include("./Classes/Carrinho.class.php");
include("./Classes/Produtos.class.php");

?>
<style>
  .container .card {
    position: relative;
    width: 320px;
    height: 450px;
    background: #232323;
    border-radius: 20px;
    overflow: hidden;
  }

  .container .card:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #9bdc28;
    clip-path: circle(150px at 80% 20%);
    transition: 0.5s ease-in-out;
  }

  .container .card:hover:before {
    clip-path: circle(300px at 80% -20%);
  }

  .container .card:after {
    content: 'Nike';
    position: absolute;
    top: 30%;
    left: -20%;
    font-size: 12em;
    font-weight: 800;
    font-style: italic;
    color: rgba(255, 255, 25, 0.05)
  }

  .container .card .imgBx {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10000;
    width: 100%;
    height: 220px;
    transition: 0.5s;
  }

  .container .card:hover .imgBx {
    top: 0%;
    transform: translateY(0%);

  }

  .container .card .imgBx img {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(-25deg);
    width: 270px;
  }

  .container .card .contentBx {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100px;
    text-align: center;
    transition: 1s;
    z-index: 10;
  }

  .container .card:hover .contentBx {
    height: 210px;
  }

  .container .card .contentBx h2 {
    position: relative;
    font-weight: 600;
    letter-spacing: 1px;
    color: #fff;
    margin: 0;
  }

  .container .card .contentBx .size,
  .container .card .contentBx .color {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 8px 20px;
    transition: 0.5s;
    opacity: 0;
    visibility: hidden;
    padding-top: 0;
    padding-bottom: 0;
  }

  .container .card:hover .contentBx .size {
    opacity: 1;
    visibility: visible;
    transition-delay: 0.5s;
  }

  .container .card:hover .contentBx .color {
    opacity: 1;
    visibility: visible;
    transition-delay: 0.6s;
  }

  .container .card .contentBx .size h3,
  .container .card .contentBx .color h3 {
    color: #fff;
    font-weight: 300;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-right: 10px;
  }

  .container .card .contentBx .size span {
    width: 26px;
    height: 26px;
    text-align: center;
    line-height: 26px;
    font-size: 14px;
    display: inline-block;
    color: #111;
    background: #fff;
    margin: 0 5px;
    transition: 0.5s;
    color: #111;
    border-radius: 4px;
    cursor: pointer;
  }

  .container .card .contentBx .size span:hover {
    background: #9bdc28;
  }

  .container .card .contentBx .color span {
    width: 20px;
    height: 20px;
    background: #ff0;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
  }

  .container .card .contentBx .color span:nth-child(2) {
    background: #9bdc28;
  }

  .container .card .contentBx .color span:nth-child(3) {
    background: #03a9f4;
  }

  .container .card .contentBx .color span:nth-child(4) {
    background: #e91e63;
  }

  .container .card .contentBx a {
    display: inline-block;
    padding: 10px 20px;
    background: #fff;
    border-radius: 4px;
    margin-top: 10px;
    text-decoration: none;
    font-weight: 600;
    color: #111;
    opacity: 0;
    transform: translateY(50px);
    transition: 0.5s;
    margin-top: 0;
  }

  .container .card:hover .contentBx a {
    opacity: 1;
    transform: translateY(0px);
    transition-delay: 0.75s;

  }
</style>
<?php
//Navbar
include("./Components/navbar.php");
?>
<!-- component -->

<head>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <script>
    var cont = 0;

    function loopSlider() {
      var xx = setInterval(function() {
        switch (cont) {
          case 0: {
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
            cont = 1;

            break;
          }
          case 1: {

            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");

            cont = 0;

            break;
          }


        }
      }, 8000);

    }

    function reinitLoop(time) {
      clearInterval(xx);
      setTimeout(loopSlider(), time);
    }



    function sliderButton1() {

      $("#slider-2").fadeOut(400);
      $("#slider-1").delay(400).fadeIn(400);
      $("#sButton2").removeClass("bg-purple-800");
      $("#sButton1").addClass("bg-purple-800");
      reinitLoop(4000);
      cont = 0

    }

    function sliderButton2() {
      $("#slider-1").fadeOut(400);
      $("#slider-2").delay(400).fadeIn(400);
      $("#sButton1").removeClass("bg-purple-800");
      $("#sButton2").addClass("bg-purple-800");
      reinitLoop(4000);
      cont = 1

    }

    $(window).ready(function() {
      $("#slider-2").hide();
      $("#sButton1").addClass("bg-purple-800");


      loopSlider();






    });
  </script>
</head>

<div class="sliderAx h-auto">
  <div id="slider-1" class="container mx-auto">
    <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
      <div class="md:w-1/2">
        <p class="font-bold text-sm uppercase">Services</p>
        <p class="text-3xl font-bold">Hello world</p>
        <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
        <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
      </div>
    </div> <!-- container -->
    <br>
  </div>

  <div id="slider-2" class="container mx-auto">
    <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">

      <p class="font-bold text-sm uppercase">Services</p>
      <p class="text-3xl font-bold">Hello world</p>
      <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
      <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>

    </div> <!-- container -->
    <br>
  </div>
</div>
<div class="flex justify-between w-12 mx-auto pb-2">
  <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 "></button>
  <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
</div>
<div class="row" style="display:inline-block;">
  <div class="container">
    <div class="card">
      <div class="imgBx">
        <img src="https://assets.codepen.io/4164355/shoes.png">
      </div>
      <div class="contentBx">
        <h2>Nike Shoes</h2>
        <div class="size">
          <h3>Size :</h3>
          <span>7</span>
          <span>8</span>
          <span>9</span>
          <span>10</span>
        </div>
        <div class="color">
          <h3>Color :</h3>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <a href="#">Buy Now</a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="card">
      <div class="imgBx">
        <img src="https://assets.codepen.io/4164355/shoes.png">
      </div>
      <div class="contentBx">
        <h2>Nike Shoes</h2>
        <div class="size">
          <h3>Size :</h3>
          <span>7</span>
          <span>8</span>
          <span>9</span>
          <span>10</span>
        </div>
        <div class="color">
          <h3>Color :</h3>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <a href="#">Buy Now</a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="card">
      <div class="imgBx">
        <img src="https://assets.codepen.io/4164355/shoes.png">
      </div>
      <div class="contentBx">
        <h2>Nike Shoes</h2>
        <div class="size">
          <h3>Size :</h3>
          <span>7</span>
          <span>8</span>
          <span>9</span>
          <span>10</span>
        </div>
        <div class="color">
          <h3>Color :</h3>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <a href="#">Buy Now</a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="card">
      <div class="imgBx">
        <img src="https://assets.codepen.io/4164355/shoes.png">
      </div>
      <div class="contentBx">
        <h2>Nike Shoes</h2>
        <div class="size">
          <h3>Size :</h3>
          <span>7</span>
          <span>8</span>
          <span>9</span>
          <span>10</span>
        </div>
        <div class="color">
          <h3>Color :</h3>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <a href="#">Buy Now</a>
      </div>
    </div>
  </div>

</div>
<!-- <div class="banners">
  <div class="row"></div>
  <div class="col-xl-12">
    <center>
      <a href=""><img src="https://media.pichau.com.br/media/aw_rbslider/slides/2022_-_11_a_18_Novembro_-_Corsair_Icue_-_1450x140-V1.png" style="height: 140px;width:95%" alt=""></a>
    </center>
  </div>
</div>
<br>
<center>
  <div class="row">
    <div class="col-xl-6">
      <a href=""><img src="https://media.pichau.com.br/media/aw_rbslider/slides/2022_-_11_a_18_novembro_-_Samsung_Odyssey_-_700x140_1.png" alt=""></a>
    </div>
    <div class="col-xl-6">
      <a href=""><img src="https://media.pichau.com.br/media/aw_rbslider/slides/Conhe_a_a_Mancer_-_700x140_-_v2_1.png" alt=""></a>
    </div>
</center>
</div>
</div>
</div> -->

<?php
include("./Components/footer.php");
include("./top_bot/bot.php");
?>