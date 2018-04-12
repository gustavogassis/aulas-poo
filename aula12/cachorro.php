<?php 
    require_once "mamiferos.php";
    class Cachorro extends Mamifero {

        public function emitirSom() {
            echo "<p> Au! Au! Au!</p>";
        }

        public function enterrarOsso() {
            echo "<p> Enterrando</p>";
        }

        public function abanarRabo() {
            echo "<p> Abanando</p>";
        }
    
    }



?>