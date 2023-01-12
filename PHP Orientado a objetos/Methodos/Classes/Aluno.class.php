<?php
    class Aluno{
        
        //Atributos
        var $Nome;
        var $Curso;
        var $CargaHoraria;
        var $Faltas;
        var $NotaFinal;

        //Métodos
        function  ExibirNome(){
            echo $this->Nome.'<br>';
        }

        function   Relatorio(){
            echo "
                <center>
                <h1>Relatorio</h1>
                <p><b>Nome: </b>".$this->Nome."</p>
                <p><b>Curso: </b>".$this->Curso."</p>
                <p><b>Carga Horaria: </b>".$this->CargaHoraria."</p>
                <p><b>Faltas: </b>".$this->Faltas."</p>
                <p><b>N.Final: </b>".$this->NotaFinal."</p>
                </center>
            ";
        }


        function AlterNotaArray($Nota_F){
            $Zerar = false;
            foreach ($Nota_F as $Nota) {
                if($Nota < 0){
                    $Zerar= true;
                }
            }
            if($Zerar){
                $this->NotaFinal=0;
            }
            else{
                $media = array_sum($Nota_F)/count($Nota_F);
                $this -> NotaFinal = $media;
            }
        }
        function EmitirCertificado(){
            if($this -> NotaFinal >= 60 && $this -> Faltas <= 20){
                $emitir="true";
            }
            else{
                $emitir="false";
            }
        }
        
    }   
    $aluno1 = new Aluno;
    $aluno1 ->Nome = "João";
    $aluno1 -> Curso = "Java";
    $aluno1 -> CargaHoraria = 80;
    $aluno1 -> Faltas = 0;
    $aluno1 -> NotaFinal = 0;

    $aluno2 = new Aluno;
    $aluno2 ->Nome = "Pedro";
    $aluno2 -> Curso = "BD";
    $aluno2 -> CargaHoraria = 60;
    $aluno2 -> Faltas = 0;
    $aluno2 -> NotaFinal = 0;

    $notas_a1 = array(
        15,90,-2,75,50
    );
?>