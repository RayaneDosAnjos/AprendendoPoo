<?php
require_once '../aula09/Pessoa.php';
class Aluno extends Pessoa{
    private $matr;
    private $curso;

    public function cancelarMatricula(){
        echo "<p>Matrícula será cancelada!</p>";
    }


    public function getMatr(){
        return $this->matr;
    }
    public function setMatr($matr){
        $this->matr=$matr;
    }

    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($curso){
        $this->curso=$curso;
    }
}