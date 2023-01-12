<?php
class Conta{
    var $agencia;
    var $codigo;
    var $senha;
    var $saldo;
    var $cancelado;

    function __contruct($ag,$cd,$senha,$saldo,$cancelado){
        $this->agencia = $ag;
        $this->codigo = $cd;
        $this->senha = $senha;
        $this->saldo = $saldo;
        $this->cancelado = $cancelado;

    }
    function retirar($quantidade){
        if($this->saldo>=$quantidade){
            $this->saldo-=$quantidade;
            echo "Retirou com sucesso";
        }else{
            echo "Sem saldo";
        }
    }

    function depositar($quantidade){
        $this->saldo += $quantidade;
    }
    
    function tranferir($qtd,$conta){
        $this->saldo -= $qtd;
        $conta->saldo += $qtd;
        echo "<pre>Tranferido com sucesso";
    }

    function getSaldo(){

    }
}

    class Cliente extends Conta{
        var $telefone;
        var $end;

        function __construct($ag,$cd,$senha,$saldo,$cancelado,$tel,$end)
        {
            parent::__contruct($ag,$cd,$senha,$saldo,$cancelado);
            $this->telefone=$tel;
            $this->end=$end;
        }
    }

    class P_Fisico extends Cliente{
        var $cpf;

        function __construct($ag,$cd,$senha,$saldo,$cancelado,$tel,$end,$cpf)
        {
            parent::__contruct($ag,$cd,$senha,$saldo,$cancelado,$tel,$end,$tel,$end);           
            $this->cpf = $cpf;
        }

        function pix($qtd){

        }
    }

    class P_Juridica extends Cliente{
        var $cnpj;

        function __construct($ag,$cd,$senha,$saldo,$cancelado,$tel,$end,$cnpj)
        {
            parent::__contruct($ag,$cd,$senha,$saldo,$cancelado,$tel,$end,$tel,$end);
            $this->cnpj=$cnpj;
        }

        function emitir_boleto($qtd){
            
        }
    }
