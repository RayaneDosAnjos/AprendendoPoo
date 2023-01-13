<?php
//atributos
class ContaBanco { 
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;



//métodos
 public function abrirConta($tipo){ 
    $this->setTipo($tipo);
    $this->setStatus(true);
    if ($tipo == "CC") {
        $this->setSaldo(50);
    } elseif ($tipo == "CP"){
        $this->setSaldo(150);
    }
}

public function fecharConta(){
    if ($this->getSaldo()>0){
        echo "<p>CONTA AINDA TEM DINHEIRO, NÃO POSSO FECHAR!</p>";
    } elseif ($this->getSaldo()<0){
        echo "<p>CONTA ESTÁ EM DEBITO,IMPOSSIVEL ENCERRAR</p>";
    } else {
        $this->setStatus(false);
        echo "<p>conta de ".$this->getDono()." fechada com sucesso</p>";
    }
}

public function depositar($v){
    if ($this->getStatus()){
        $this->setSaldo($this->getSaldo()+$v);//dando erro entao resolva
        echo "<p>Deposito de {$v} na conta de ".$this->getDono()."</p>";
    } else{
        echo "<p>Conta fechada. Não consigo depositar</p>";
    }
}

public function sacar($v){
    if ($this->getStatus()) {
        if ($this->getSaldo()>=$v) {
            $this->setSaldo($this->getSaldo()-$v); // onde está o função getsaldo?
            echo "Saque de {$v} autorizado na conta {$this->getDono()}</br>";
        }else{
            echo "<p>Saldo insuficiente para saque</p>";
        }
    } else {
        echo "<p>Não posso sacar de uma conta fechada</p>";
    }
}

public function pagarMensal(){
       if ($this->getTipo()=="CC") {
        $v = 12;
       } elseif ($this->getTipo()=="CP") {
        $v = 20;
       }
       if ($this->getStatus()) {
        $this->setSaldo($this->getSaldo()-$v);
        echo "<p>Mensalidade de R$ $v debitada na conta de {$this->getDono()}</p>";
       } else {
            echo "<p>Problemas com a conta. Não posso cobrar</p>";
       }
}

//metodos especiais
public function __construct(){
    $this->setSaldo(0);
    $this->setStatus(false);
    echo "Criada com sucesso!</br>";

}

public function setNumConta($numConta){
    $this-> numConta = $numConta;
}
public function getNumConta(){
    return $this->numConta;
}

public function setTipo($tipo){
    $this-> tipo = $tipo;
}
public function getTipo(){
    return $this->tipo;
}
    
public function setDono($dono){
    $this->dono = $dono;
}
public function getDono(){
    return $this->dono;
}

public function setSaldo($saldo){
    $this->saldo = $saldo;
}
public function getSaldo(){
    return $this->saldo;
}

public function setStatus($status){
    $this->status = $status;
}
public function getStatus(){
    return $this->status;
}

}