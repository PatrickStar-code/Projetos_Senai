<?php

use Pessoa as GlobalPessoa;

    class Pessoa{
        var $nome;
        var $sobrenome;
   
   
        function __construct($nome,$sobrenome){
            $this->nome = $nome;
            $this->sobrenome=$sobrenome; 
        }

     
        
        function  getNomeCompleto(){
            echo "$this->nome $this->sobrenome";        
        }
    }

    class Funcionario extends GlobalPessoa{
        var $matricula;
        var $salario;

        function __construct($nome,$sobrenome,$matricula)
        {
            parent::__construct($nome,$sobrenome);
            $this->matricula=$matricula;

        }

        function setSalario($valor){
            if($valor<-1){
                echo "Imposivel setar o salario";
            }
            else{
                $this->salario=$valor;
            }
        }

        function  getSalarioPrimeiraParcela(){
           $salario = $this -> salario;
           echo $salario * 0.6;
        }

        function getSalarioSegundaParcela(){
            $salario = $this -> salario;
            echo $salario * 0.4;
        }
    }

    class Professor extends Funcionario{

        function getSalarioPrimeiraParcela()
        {
            $salario = $this -> salario;
            echo $salario;
        }

        function getSalarioSegundaParcela()
        {
            echo "<br>0"; 
        }
       
    }
    
    class Programa{
        
        function main(){
            $pessoa = new GlobalPessoa("João","Medeiros");
            $pessoa2 = new Funcionario("Leonardo","Messias",2);
            $pessoa2 ->setSalario(1000.00);
            $pessoa3 = new Professor("Antonio","Silva",3);
            $pessoa3 -> setSalario(1500.00);
            $pessoa ->getNomeCompleto();
            echo"<br>";
            $pessoa2 ->getNomeCompleto();
            echo"<br>";
            $pessoa3 ->getNomeCompleto();
            echo"<br>";
            $pessoa2->getSalarioPrimeiraParcela();
            echo"<br>";
            $pessoa3->getSalarioPrimeiraParcela();
            echo "<br>";
    }}
