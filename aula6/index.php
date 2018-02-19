<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 06</title>
	</head>
	<body>   
	<h1>Projeto Controle Remoto</h1>
        <pre>
		<?php
			require_once 'controleremoto.php';
			$d = new ControleRemoto();
			
			$d->maisVolume();
			$d->abrirMenu();
			
			

		?>
        </pre>
	</body>
</html>