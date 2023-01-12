<?php 
    class Pessoa{
        var $Nome;
        var $sexo;
        var $idade;

        function __construct($nome,$sexo,$idade)
        {
            $this->Nome=$nome;
            $this->sexo=$sexo;
            $this->idade=$idade;
        }
    }

    class Amigo extends Pessoa{
        var $aniversario;

        function __construct($nome,$sexo,$idade,$aniversario)
        {
            parent::__construct($nome,$sexo,$idade);
            $this->aniversario=$aniversario;
            
        }
    }
?>