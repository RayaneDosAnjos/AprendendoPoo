<?php
class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    


public function __construct($nc, $t, $d, $s){
    $this-> numConta = $nc;
    $this-> tipo = $t;
    $this-> dono = $d;
    $this-> saldo = $s;
}
}

