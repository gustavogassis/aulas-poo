<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
    class Livro implements Publicacao {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        function __construct($titulo, $autor, $totPaginas, $leitor) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->pagAtual = 0;
            $this->aberto = false;
            $this->leitor = $leitor;
        }
        
        public function detalhes() {
            echo "Livro " . $this->titulo . " escrito por " . $this->autor;
            echo "<br> Páginas: " . $this->totPaginas . " atual " . $this->pagAtual;
            echo "<br> Sendo lido por " . $this->leitor->getNome();
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function setTitulo($t) {
            $this->titulo = $t;
        }
        
        public function getAutor() {
            return $this->autor;
        }

        public function setAutor($a) {
            $this->autor = $a;
        }

        public function getsTotPaginas() {
            return $this->totPaginas;
        }

        public function setTotPaginas($tp) {
            $this->totPaginas = $tp;
        }

        public function getPagAtual() {
            return $this->pagAtual;
        }

        public function setPagAtual($pa) {
            $this->pagAtual = $pa;
        }

        
        public function getAberto() {
            return $this->aberto;
        }

        public function setAberto($a) {
            $this->aberto = $a;
        }

        
        public function getLeitor() {
            return $this->leitor;
        }

        public function setleitor($l) {
            $this->leitor = $l;
        }

        public function abrir() {
            $this->aberto = true;
        }

        public function fechar() {
            $this->aberto = false;
        }

        public function folhear($p) {
            if ($p > $this->totPaginas) {
                $this->pagAtual = 0;
            } else {
                $this->pagAtual = $p;
            } 

        }

        public function avançarPag(){
            $this->pagAtual ++;
        }

        public function voltarPag() {
            $this->pagAtual --;
        }
    }
?>