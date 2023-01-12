<?php 
    class Vendedor{
        var $SalarioBase;
        var $TotaldeVendas;
        
        function __construct($salario,$totalvendas){
            $this->SalarioBase = $salario;
            $this ->TotaldeVendas = $totalvendas;
        }
        
        function calcularSalario($comisao){
            $salario = $this->SalarioBase;
            $comisao = $comisao;
            echo "Seu salario é de" . $salario * $comisao;
        }     
        
    }

    class Junior extends Vendedor{
    

    }

    class Pleno extends Vendedor{
       
       
        
        
    }
    
    class Senior extends Vendedor{
      
        
    }
?>