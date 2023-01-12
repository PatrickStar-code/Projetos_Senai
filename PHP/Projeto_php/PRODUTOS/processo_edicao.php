<?php
//Inclui o banco dedados 
include_once("../banco.php");

$cod_produto = $_POST["cod_prod"];

//Criação variaveis
$cod_barras = $_POST["cod_barras"];
$descr_prod = $_POST["descricao_produto"];
$v_unit = $_POST["v_unit_produto"];
$cod_cat = $_POST["COD_categoria_produto"];
//ATUALIZANDO IMAGEM
    $img_produtos = $_FILES["img_produtos"];
    $extensao = strtolower(substr($_FILES["img_produtos"]['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio= "IMG_PRODUTOS/";
        move_uploaded_file($_FILES["img_produtos"]['tmp_name'],$diretorio.$novo_nome);
        $uploaddir = 'IMG_PRODUTOS/'; //directório onde será gravado a imagem

        var_dump($novo_nome);
        // $sql = "INSERT INTO produtos(img_produtos)
        // VALUES ('$novo_nome') WHERE cod_produto=$cod_produto";
    // if ($conn->query($sql) === TRUE) {
        
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
//Atualizando dados
$sql = "UPDATE produtos SET cod_barras='$cod_barras',descricao_produto='$descr_prod',v_unit_produto='$v_unit',img_produtos='$novo_nome' WHERE cod_produto=$cod_produto";
if ($conn->query($sql) === TRUE) {
    header('location:listagem_produtos.php');
} else {
echo "Error updating record: " . $conn->error;
}

?>