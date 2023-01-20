<?php
require_once '../aula07/Lutador.php';
class Luta{
    private $Desafiado;
    private $Desafiante;
    private $rounds;
    private $aprovada;

    public function MarcarLuta($l1,$l2){
        if ($l1->getCategoria()===$l2->getCategoria()
            && ($l1 != $l2)){
                $this->aprovada = true;
                $this->Desafiado = $l1;
                $this->Desafiante = $l2;
            }else{
                $this->aprovada = false;
                $this->Desafiado = null;
                $this->Desafiante = null;
            }
    }
    public function Lutar(){
        if ($this->aprovada){
            $this->Desafiado->Apresentar();
            $this->Desafiante->Apresentar();
            $vencedor = rand(0,2);
            switch($vencedor) {
                case 0:
                    echo "<p>Empate!</p>";
                    $this->Desafiado->empatarLuta();
                    $this->Desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<p>".$this->Desafiado->getNome()." Venceu!</p>";
                    $this->Desafiado->ganharLuta();
                    $this->Desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>".$this->Desafiado->getNome()." Venceu!</p>";
                    $this->Desafiado->perderLuta();
                    $this->Desafiante->ganharLuta();    

                    break;
                
            }
        }else{
            echo "<p>Luta não pode acontecer!</p>";
        }
    }


    public function getDesafiado(){
        return $this->Desafiado;
    }
    public function setDesafiado($Desafiado){
        $this->Desafiado=$Desafiado;
    }

    public function getDesafiante(){
        return $this->Desafiante;
    }
    public function setDesafiante($Desafiante){
        $this->Desafiante=$Desafiante;
    }

    public function getRounds(){
        return $this->rounds;
    }
    public function setRounds($rounds){
        $this->rounds=$rounds;
    }

    public function getAprovada(){
        return $this->aprovada;
    }
    public function setAprovada($aprovada){
        $this->aprovada=$aprovada;
    }

}