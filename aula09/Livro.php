<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;


    public function detalhes(){
        echo "<hr>Livro ".$this->titulo." escrito por ".$this->autor;
        echo "</br> paginas: ".$this->totPaginas." atual ".$this->pagAtual;
        echo "</br> sendo lido por ".$this->leitor->getNome();
    }

    function __construct($titulo,$autor,$totPaginas,$leitor){
        $this->titulo=$titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto=false;
        $this->pagAtual=0;
        $this->leitor = $leitor;

    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo=$titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getotPaginas()
    {
        return $this->totPaginas;
    }
    public function settotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    public function getpagAtual()
    {
        return $this->pagAtual;
    }
    public function setpagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    public function getAberto()
    {
        return $this->aberto;
    }
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }



    public function abrir(){
        $this->aberto=true;
    }
    public function fechar(){
        $this->aberto=false;
    }
    public function folhear($p){
        if($p>$this->totPaginas){
            $this->pagAtual=0;
        }else{
            $this->pagAtual=$p;
        }
    }
    public function avancarPag(){
        $this->pagAtual ++;
    }
    public function voltarPag(){
        $this->pagAtual --;
    }
}