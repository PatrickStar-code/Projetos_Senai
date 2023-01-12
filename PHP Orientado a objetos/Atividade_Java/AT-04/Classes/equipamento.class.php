<?php 
class equipamento{
    var $ligado;

    function ligar(){
        $this ->ligado = true;
    }

    function desligar(){
        $this ->ligado = false;
    }
}  

class Equipamento_Sonoro extends equipamento{
    var $volume;
    var $stereo;

    function mono(){
        $this->stereo=false;
    }
    
    function stereo(){
        $this->stereo=true;
    }

    function ligar()
    {
        parent::ligar();
        $this->volume=5;
    }
}

?>