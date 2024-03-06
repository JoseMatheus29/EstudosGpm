<?php
require_once "Publicacao";

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totpaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    public function __construct($titulo, $autor, $totpaginas, $leitor) {
        $this->titulo = $titulo;   
        $this->autor = $autor;
        $this->totpaginas = $totpaginas;
        $this->leitor = $leitor;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    public function getTotpaginas()
    {
        return $this->totpaginas;
    }

    public function setTotpaginas($totpaginas)
    {
        $this->totpaginas = $totpaginas;

        return $this;
    }

    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;

        return $this;
    }
    public function getAberto()
    {
        return $this->aberto;
    }

    public function setAberto($aberto)
    {
        $this->aberto = $aberto;

        return $this;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;

        return $this;
    }
    function abrir(){
        $this->aberto = true;
    }
    function avancarPag(){
        $this->pagAtual++;
    }
    function fechar(){
        $this->aberto = false;
    }
    function folhear($p){
        if($p > $this->totpaginas){
            $this->pagAtual = 0;
        }else{
            this->pagAtual = $p;
        }
    }
    function voltapag(){
        $this->pagAtual--;
    }
    }
?>