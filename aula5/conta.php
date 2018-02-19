<?php

class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct(){
        $this->setStatus(false);
        $this->setSaldo(0);
        echo "<p>Conta criada com sucesso</p>";
    }

    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == 'cp'){
            $this->setSaldo(150);
        } elseif ($t == 'cc'){
            $this->setSaldo(50);
        }

    }

    public function fecharConta(){
        if ($this->getSaldo() < 0 ){
            echo"<p>Quite seu débito antes!</p>";
        } elseif ($this->getSaldo() > 0 ) {
            echo"<p>Saque seu dinheiro antes!</p>";
        } else{
            $this->setStatus(false);
        }
    }

    public function depositar($vd){
        if ($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() + $vd);
            echo "<p>Depósito de $vd na conta de" .$this->getDono() . "</p>";
        } else {
            echo "<p>Conta Fechada</p>";
        }
    }

    public function sacar($vs){
        if ($this->getStatus() == true){
            if ($vs <= $this->getSaldo()){
                $this->setSaldo($this->getSaldo() - $vs);
                echo "<p>Saque de $vs autorizado na conta de" .$this->getDono()."</p>";
            } else{
                echo "<p>Saldo Insuficiente</p>";
            }
        } else{
            echo "<p>Conta Fechada</p>";
        }
    }

    public function pagarMensal(){
        if ($this->getTipo() == 'cc'){
            $this->setSaldo($this->getSaldo() - 12);
        } elseif ($this->getTipo() == 'cp'){
            $this->setSaldo($this->getSaldo() - 20);
        }
    }

    public function getnumConta(){
        return $this->numConta;
    }

    public function setnumConta($n){
        $this->numConta = $n;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($t){
        $this->tipo = $t;
    }

    public function getDono(){
        return $this->dono;
    }

    public function setDono($d){
        $this->dono = $d;
    }   

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($s){
        $this->status = $s;
    }
}
