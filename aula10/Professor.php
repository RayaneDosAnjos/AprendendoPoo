<?php
require_once '../aula09/Pessoa.php';
class Professor extends Pessoa{
    private $especialidade;
    private $salario;

    public function receberAumen($aumen){
        $this->salario += $aumen;
    }

    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade){
        $this->especialidade=$especialidade;
    }

    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($salario){
        $this->salario=$salario;
    }
    
}