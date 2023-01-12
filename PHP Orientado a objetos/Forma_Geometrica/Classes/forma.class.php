<?php 
    class Forma{
        var $forma;
        var  $apelido;
 

      function __construct($apelido)
      {
        $this->apelido = $apelido;
      }

      function calcular_area(){

      }

    }

    class Circulo extends Forma{
        var  $raio;
        var $area;

        function __construct($apelido,$raio)
        {
            parent::__construct($apelido);
            $this->raio = $raio;
            $this->forma = "Circulo";
        }

        function calcular_area()
        {
           $area = 3.14 * $this->raio;
           $this->area = $area;
        }

        }
    

    class Quadrado extends Forma{
        var  $largura;
        var  $altura;
        var $area;

        function __construct($apelido,$largura,$altura)
        {
            parent::__construct($apelido);
            $this->largura = $largura;
            $this->altura= $altura;
            $this->forma = "Quadrado";

        }

        function calcular_area(){
            $area = $this -> largura * $this->altura;
            $this->area = $area;
        }

    }


    class Trapezio extends Forma{
        var $base_maior;
        var $base_menor;
        var $altura;
        var $area;


        function __construct($apelido,$base_maior,$base_menor,$altura)
        {
            parent::__construct($apelido);
            $this->altura = $altura;
            $this->base_maior = $base_maior;
            $this->base_menor = $base_menor;
            $this->forma = "Trapezio";

        }

        function calcular_area()
        {
        $area = (($this->base_maior+$this->base_menor)/2)*$this->altura;
        $this->area=$area;
          
    
        }
    }




    
