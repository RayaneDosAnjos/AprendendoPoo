<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    private $matricula;
    private $curso;

    public function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno ".$this->getNome()."</p>";
    }

    function getMatricula(){
        return $this->matricula;
    }
    function setMatricula($matricula){
        $this->matricula=$matricula;
    }


    function getCurso()
    {
        return $this->curso;
    }
    function setCurso($curso)
    {
        $this->curso = $curso;
    }
}