<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 03</title>
	</head>
	<body>
        <pre>
		<?php
            require_once 'caneta.php';

            $c1 = new Caneta;
            $c1->modelo = "BIC cristal";
            $c1->cor = "Azul";
            //$c1 ->ponta = 0.5;
            //$c1 ->carga = 99;
            //$c1 ->tampada = true;
            
            
            $c1->rabiscar();
            $c1->tampar();
            $c1->destampar();

            print_r($c1);   


		?>
        </pre>
	</body>
</html>
