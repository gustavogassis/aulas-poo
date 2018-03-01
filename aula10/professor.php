<?php
    require_once 'Pessoa.php';
    class Professor extends Pessoa {
        private $especialidade;
        private $salario;

        public function ReceberAumento($aum) {
            $this->salario += $aum;
        }

        public function getEspecialidade() {
            return $this->especialidade;
        }

        public function setEspecialidade($e) {
            $this->especialidade = $e;
        }

        public function getsalario() {
            return $this->salario;
        }

        public function setsalario($s) {
            $this->salario = $s;
        }
    }