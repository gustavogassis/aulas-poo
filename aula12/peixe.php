<?php 

    require_once "animal.php";
    class Peixe extends Animal {

        private $corEscama;

        public function alimentar() {
            echo "<p> Comendo Substâncias</p>";
        }

        public function emitirSom() {
            echo "<p> Peixe não faz som</p>";
        }

        public function locomover() {
            echo "<p> Nadando</p>";
        }

        public function soltarBolha() {
            echo "<p> Soltou um bolha</p>";
        }

        public function getcorEscama() {
            return $this->corEscama;
        }

        public function setcorEscama($corEscama) {
            $this->corEscama = $corEscama;
        }

    }
?>