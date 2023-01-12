<?php
    include("concecionaria.class.php");

    session_start();

    unset($_SESSION['array']);

    header("location:listagem.php")
?>