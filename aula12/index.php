<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 12</title>
	</head>
	<body>
        <pre>
		<?php
            require_once 'animal.php';
            require_once 'mamiferos.php';
            require_once 'reptil.php';
            require_once 'peixe.php';
            require_once 'ave.php';
            require_once 'canguru.php';
            require_once 'cachorro.php';
            require_once 'cobra.php';
            require_once 'tartaruga.php';
            require_once 'goldfish.php';
            require_once 'arara.php';

            $m = new Mamifero();   
            $a = new Ave();
            $r = new Reptil();
            $c = new Canguru;
            $k = new Cachorro;
            $t = new Tartaruga;

            $m->emitirSom();
            $k->emitirSom();
            $c->emitirSom();

		?>
        </pre>
	</body>
</html>
