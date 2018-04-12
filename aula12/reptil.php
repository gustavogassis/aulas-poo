<?php 

    require_once "animal.php";
    class Reptil extends Animal {

        private $corEscama;

        public function alimentar() {
            echo "<p> Comendo Vegetais</p>";
        }

        public function emitirSom() {
            echo "<p> Som de Réptil</p>";
        }

        public function locomover() {
            echo "<p> Rastejando</p>";
        }

        public function getcorEscama() {
            return $this->corEscama;
        }

        public function setcorEscama($corEscama) {
            $this->corEscama = $corEscama;
        }
    }


?>