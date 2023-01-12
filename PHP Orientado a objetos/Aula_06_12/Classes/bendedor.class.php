<?php 
    class Vendedor{
        var $SalarioBase;
        var $TotaldeVendas;
        
        function __construct($salario,$totalvendas){
            $this->SalarioBase = $salario;
            $this ->TotaldeVendas = $totalvendas;
        }
        
        function calcularSalario(){
            echo "Seu salario é de $this->SalarioBase";
        }     
        
    }

    class Junior extends Vendedor{
    

        function calcularSalario()
        {
            parent::calcularSalario();
            $total = $this ->SalarioBase * 1.10;
            echo "<br>Com o total de vendas de $this->TotaldeVendas seu salario foi para " + $total ;
        }
        
    }

    class Pleno extends Vendedor{
       
        function calcularSalario()
        {
            parent::calcularSalario();
            $total = $this->SalarioBase * 1.20;
            echo "<br> Com o total de vendas de $this->TotaldeVendas seu salario foi para " . $total ;
        }
        
        
    }
    
    class Senior extends Vendedor{
        function calcularSalario()
        {
            parent::calcularSalario();
            $total = $this ->SalarioBase * 1.30;
            echo "<br> Com o total de vendas de $this->TotaldeVendas seu salario foi para " . $total ;
        }
        
    }
?>