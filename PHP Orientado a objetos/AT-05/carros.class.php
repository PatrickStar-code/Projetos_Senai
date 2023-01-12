<?php 
    class carros{
        var $marca;
        var $ano;
        var $cat;
        var $motorizacao;
        var $cor;
        var $cap;
        var $preco;

        function __construct($marca, $ano,$cat,$motorizacao,$cor,$cap,$preco) {
            $this -> marca = $marca;
            $this -> ano = $ano;
            $this -> cat = $cat;
            $this -> motorizacao = $motorizacao;
            $this -> cor = $cor;
            $this -> cap = $cap;
            $this -> preco = $preco;
    }
    
    }

?>