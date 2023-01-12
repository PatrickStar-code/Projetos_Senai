<?php 
    class Conta{
        var $agencia;
        var $codigo;
        var $titular;
        var $senha;
        var $saldo;
        var $cancelado;

        function __contruct($ag,$cd,$tl,$senha,$saldo,$cancelado){
            $this->agencia = $ag;
            $this->codigo = $cd;
            $this->titular = $tl;
            $this->senha = $senha;
            $this->saldo = $saldo;
            $this->cancelado = $cancelado;

        }
        function retirar($quantidade){

        }

        function depositar($quantidade){

        }
        
        function getSaldo(){

        }
    }
      //Conta poupanca
    class ContaPoupanca extends Conta{
        var $limite;

      

        function __contruct($ag,$cd,$tl,$senha,$saldo,$cancelado,$limite){
            $this->agencia = $ag;
            $this->codigo = $cd;
            $this->titular = $tl;
            $this->senha = $senha;
            $this->saldo = $saldo;
            $this->cancelado = $cancelado;
            $this -> limite = $limite;
        }

    }
  

     //Conta corrente
    class ContaCorrente extends Conta{
        var $aniversario;
    
     function __construct($ag,$cd,$tl,$senha,$saldo,$cancelado,$aniversario)
     {
        parent::__contruct($ag,$cd,$tl,$senha,$saldo,$cancelado);
        $this -> aniversario = $aniversario;
     }

    }
