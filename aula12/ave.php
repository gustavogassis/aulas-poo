<?php 

    require_once "animal.php";
    class Ave extends Animal {

        private $corPena;

        public function alimentar() {
            echo "<p> Comendo Frutas</p>";
        }

        public function emitirSom() {
            echo "<p> Som de Ave</p>";
        }

        public function locomover() {
            echo "<p> Voando</p>";
        }

        public function soltarBolha() {
            echo "<p> Soltou um bolha</p>";
        }

        public function fazerNinho() {
            echo "<p> Construiu um ninho</p>";
        }

        public function getcorPena() {
            return $this->corPena;
        }

        public function setcorPena($corPena) {
            $this->corPena = $corPena;
        }

    }
?>