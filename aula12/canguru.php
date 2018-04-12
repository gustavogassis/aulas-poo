<?php 
    require_once "mamiferos.php";
    class Canguru extends Mamifero {

        public function locomover() {
            echo "<p> Saltando</p>";
        }

        public function usarBolsa() {
            echo "<p> Usando Bolsa </p>";
        }
    }



?>