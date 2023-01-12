<?php
include("../CRUD/top_bot/top.php");
include("concecionaria.class.php");

session_start();

$pos = $_GET['posi'];

unset($_SESSION['array'][$pos]);

$reorganizar = array_values($_SESSION['array']);

header("location:listagem.php")

?>

<?php
    include("../CRUD/top_bot/bot.php")
?>