<?php 

    class Pessoa {
        private $nome;
        private $idade;
        private $sexo;

        function __construct($n, $i, $s) {
            $this->nome = $n;
            $this->idade = $i;
            $this->sexo = $s;
        }

        public function fazerAniver() {
            $this->idade ++;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($n) {
            $this->nome = $n;
        }

        
        public function getIdade() {
            return $this->idade;
        }

        public function setIdade($i) {
            $this->idade = $i;
        }

        
        public function getsexo() {
            return $this->sexo;
        }

        public function setSexo($s) {
            $this->sexo = $s;
        }
    }