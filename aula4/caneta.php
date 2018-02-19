<?php   


class Caneta{
    public $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    public function __construct(){
        $this->cor = "Azul";
        $this->tampar();
    }

    public function tampar(){
        $this->tampada = true
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }


    
}