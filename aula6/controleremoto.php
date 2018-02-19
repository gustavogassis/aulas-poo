<?php 

require_once 'controlador.php';
class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;

    function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;    
    }
    

    function getVolume() {
        return $this->volume;
    }

    function getLigado() {
        return $this->volume;
    }

    function getTocando() {
        return $this->tocando;
    }

    function setVolume($v) {
        $this->volume = $v;
    }

    function setLigado($l) {
        $this->ligado = $l;
    }

    function setTocando($t) {
        $this->tocando = $t;
    }

    public function ligar() {
        $this->setLigado(true);
    }

    
    public function desligar() {
        $this->setLigado(false);
    }

    
    public function abrirMenu() {
        echo "<br>Está ligado?: " . ($this->getLigado()?"SIM":"NÂO");
        echo "<br>Está tocando?: " . ($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume: " . $this->getVolume();
        for($i=0;$i <= $this->getVolume(); $i+=10) {
            echo "|";
        }
        echo "<br>";

    }

    
    public function fecharMenu() {
        echo "<br>Fechando Menu...";
    }

    
    public function maisVolume() {
        if ($this->getLigado() == true) {
            $this->setVolume($this->getVolume() + 5);
        }
    }
    
    public function menosVolume() {
        if ($this->getLigado() == true){
            $this->setLigado($this->getVolume() - 5);
        }
    }

    
    public function ligarMudo() {
        if ($this->getLigado() == true && $this->getVolume()>0) {
            $this->setVolume(0);
        }
    }

    
    public function desligarMudo() {
        if ($this->getLigado() == true && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    
    public function play() {
        if ($this->getLigado() == true && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }

    public function pause() {
        if ($this->getLigado() == true && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}   