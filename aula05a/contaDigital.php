<?php



class contaDigital extends ContaBanco
{

    private $dono;

    public function setDono($d)
    {
        
        $this->dono = $d;
    }
    public function setNumConta($d)
    {

        $this->numConta = $d;
    }
}