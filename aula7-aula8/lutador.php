<?php
	class Lutador{
		// Atributos
		private $nome;
		private $nacionalidade;
		private $idade;
		private $altura;
		private $peso;
		private $categoria;
		private $vitorias;
		private $derrotas;
		private $empates;

		function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
			$this->nome = $no;
			$this->nacionalidade = $na;
			$this->idade = $id;
			$this->altura = $al;
			$this->setPeso($pe);
			$this->vitorias = $vi;
			$this->derrotas = $de;
			$this->empates = $em;
		}

		public function apresentar() {
			echo "<p>----------------------</p>";
			echo "<p>Lutador:" . $this->getNome() . "<br>";
			echo "Nacionalidade" . $this->getNacionalidade() . "<br>";
			echo "Idade" . $this->getIdade() . "<br>";
			echo "Peso" . $this->getPeso() . "<br>";
			echo "Vitórias" . $this->getVitorias() . "<br>";
			echo "Derrotas" . $this->getDerrotas() ."<br>";
			echo "Empates" . $this->getEmpates() . "</p>";
		}

		public function status() {
			echo "<p>--------------------</p>";
			echo "<p>" . $this->getNome() . " categoria " . $this->getCategoria() . "<br>";
			echo "Vitórias " . $this->getVitorias() . "<br>";
			echo "Perdeu " . $this->getDerrotas() . "<br>";
			echo "Empatou " . $this->getEmpates() . "<br>";
		}

		public function ganharLuta() {
			$this->setVitorias($this->getVitorias() + 1);
		}	
		
		public function perderLuta() {
			$this->setDerrotas($this->getDerrotas() + 1);
		}

		public function empatarLuta() {
			$this->setEmpates($this->getEmpates() + 1);
		}

		public function getNome() {
			return $this->nome;
		}

		public function setNome($no) {
			$this->nome = $no;
		}

		public function getNacionalidade() {
			return $this->nacionalidade;
		}

		public function setNacionalidade($na) {
			$this->nacionalidade = $na;
		}

		public function getIdade() {
			return $this->idade;
		}

		public function setIdade($id) {
			$this->idade = $id;
		}

		public function getAltura() {
			return $this->altura;
		}

		public function setAltura($al) {
			$this->altura = $al;
		}

		public function getPeso() {
			return $this->peso;
		}

		public function setPeso($pe) {
			$this->peso = $pe;
			$this->setCategoria();
		}

		public function getCategoria() {
			return $this->categoria;
		}

		private function setCategoria() {
			if($this->peso < 52.2) {
				$this->categoria = "Inválido";
			}elseif($this->peso <= 70.3) {
				$this->categoria = "Leve";
			}elseif($this->peso <= 83.9) {
				$this->categoria = "Médio";
			}elseif($this->peso <= 120.2) {
				$this->categoria = "Pesado";
			}else {
				$this->categoria = "Inválido";
			}

		}

		public function getVitorias() {
			return $this->vitorias;
		}

		private function setVitorias($vi) {
			$this->vitorias = $vi;
		}

		public function getDerrotas() {
			return $this->derrotas;
		}

		private function setDerrotas($de) {
			$this->derrotas = $de;
		}

		public function getEmpates() {
			return $this->empates;
		}

		private function setEmpates($em) {
			$this->empates = $em;
		}
	}


	
	
