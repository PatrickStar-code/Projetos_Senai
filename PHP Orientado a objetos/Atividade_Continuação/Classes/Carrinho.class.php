<?php
class Carrinho 
{

    function __construct()
    {
        if (isset($_SESSION["carrinho"])) {
            $_SESSION["carrinho"] = array();
        }
    }



    function inserir($id, $qtd = 1)
    {
        if (!isset($_SESSION["carrinho"][$id])) {
            //SE NÃO EXISTIR A SESSÃO COM ESTE PRODUTO CRIA
            $_SESSION["carrinho"][$id] = $qtd;
            

        } else {
            $qtd_anterior = $_SESSION["carrinho"][$id];
            $_SESSION["carrinho"][$id] = $qtd_anterior += 1;
        }
    }

    function remover($id)
    {
        unset($_SESSION["carrinho"][$id]);
    }

    function editar_add($id)
    {
        if (isset($_SESSION["carrinho"][$id])) {
            //verificando session existe
           $qtd_anterior = $_SESSION["carrinho"][$id];
           $_SESSION["carrinho"][$id] = $qtd_anterior += 1;
        }
    }

    function editar_sub($id)
    {
        if (isset($_SESSION["carrinho"][$id])) {
            //verificando session existe
            $qtd_anterior = $_SESSION["carrinho"][$id];
            
            if($qtd_anterior > 1){
            $_SESSION["carrinho"][$id] = $qtd_anterior -= 1;
            }
           
        }
    }

    function gerar_total(){
        $_SESSION["total"] = 0;
        foreach ($_SESSION["carrinho"] as $indice => $qtd) {
            $v_unit = $_SESSION["Produtos"][$indice]->valor_unit;
            $calc_total_prod = $v_unit * $qtd;
            $_SESSION["total"] += $calc_total_prod;

        }
    }

    function gerar_sub_total($id){
        $v_unit = $_SESSION["Produtos"][$id]->valor_unit;
        $qtd =   $_SESSION["carrinho"][$id];
        $calc_subtotal = $v_unit * $qtd;
        $_SESSION["subtotal"][$id] = $calc_subtotal;
    }

    function limpar()
    {
        unset($_SESSION["carrinho"]);
        $_SESSION["total"] = 0;

    }
}
$carrinho = new Carrinho();
