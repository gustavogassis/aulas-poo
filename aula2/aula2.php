<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 02</title>
	</head>
	<body>
		<?php
			class Caneta{
				var $modelo;
				var $cor;
				var $ponta;
				var $carga;
				var $tampada;

				function rabiscar(){
					if($this->tampada == true){
						echo "<p>ERRO! Não posso rabiscar";
					}else{
						echo "<p>Estou rabiscando...</p>";
					}
						
				}

				function tampar(){
					$this->tampada = true;
				}

				function destampar(){
					$this->tampada = false;
				}			
			}

			$c1 = new Caneta;

			$c1 ->cor = "Azul";
			$c1 ->ponta = "0.5";
			$c1 -> tampada = false;	
			$c1->tampar();
			

			print_r($c1)
		?>
	</body>
</html>
