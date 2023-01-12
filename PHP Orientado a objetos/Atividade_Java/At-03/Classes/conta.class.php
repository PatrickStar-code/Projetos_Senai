<?php
    class Conta{
        var $saldo;

        function __construct($saldo)
        {
            $this->saldo=$saldo;
        }

        function depositar($valor){
            $this -> saldo += $valor;
        }
        function sacar($val){
            $this -> saldo -= $val;
        }
    }
    class Poupanca extends Conta{
           var $diarendimento;

           function __construct($saldo,$dia)
           {
            parent::__construct($saldo);
            $this->diarendimento=$dia;
           }

           function setsaldo($val){
                if($val > 0){
                    $this->saldo = $val;
                }
           }

           function sacar($val)
           {
            if($val < $this -> saldo){ 
                parent::sacar($val);
            }
           }
    }

    class Programa{
        function Main(){
            $conta = new Conta(0);
            $poupanca = new Poupanca(0,01);
            $conta -> depositar(10000);
            echo "<pre>";
            print_r($conta);
            echo "<br>";
            $conta -> sacar(15000);
            echo "<pre>";
            print_r($conta);
            echo "<br>";
            $poupanca -> depositar(15000);
            echo "<pre>";
            print_r($poupanca);
            echo "<br>";
            $poupanca -> sacar(20000);
            echo "<pre>";
            print_r($poupanca);
            echo "<br>";
        }
    }
