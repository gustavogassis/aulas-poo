<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 05</title>
	</head>
	<body>   
        <pre>
		<?php
			require_once 'conta.php';
            
			$p1 = new ContaBanco();
			$p2 = new ContaBanco();
			$p1->abrirConta("cc");
			$p1->setnumConta(1111);
			$p1->setDono("Jubileu");
			$p2->abrirConta("cp");
			$p2->setnumConta(2222);
			$p2->setDono("Creuza");

			$p1->depositar(300);
			$p2->depositar(500);

			$p2->sacar(100);

			print_r($p1);
			print_r($p2);
            

		?>
        </pre>
	</body>
</html>