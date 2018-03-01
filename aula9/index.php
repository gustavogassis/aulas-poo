<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 09</title>
	</head>
	<body>   
        <pre>
		<?php
			require_once 'Pessoa.php';
			require_once 'Livro.php';

			$p[0] = new Pessoa("Pedro", 22, "M");
			$p[1] = new Pessoa("Maria", 31, "F");

			$l[0] = new Livro("PHP Básico", "José", 300, $p[0]);
			$l[1] = new Livro("POO com PHP", "Maria", 500, $p[0]);
			$l[2] = new Livro("PHP Avançado", "Ana", 800, $p[1]);

			$l[0]->abrir();
			$l[0]->folhear(80);
			$l[0]->avançarPag();
			$l[0]->detalhes();
		?>
        </pre>
	</body>
</html>