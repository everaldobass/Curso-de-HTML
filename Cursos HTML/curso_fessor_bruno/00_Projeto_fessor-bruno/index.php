<!doctype html>
<html lang=“pt-br”>
<head>
	<title>Itaipú Veículos</title>
	<meta charset=“utf-8”/>
	<link rel="stylesheet" href="css/estilos.css"/> 
</head>
<body>
	
	<header>
		<?php
		include "topo.php";
		?><!--  Chama o Topo do Site-->
	</header>

	<section id="slider"><!--  Chama o Slider do site-->
		<?php 
		include "slider.html";
		?>
	</section>
	<!--  Chama a pagina de Buscador do Site-->
	<section id="buscador">
		<?php 
		include "buscador.php";
		?>
	</section>
	<!--  Chama a pagina de Destaque do Site-->
	<section id="destaques">
		<?php 
		include "destaques.html";
		?>
	</section>
	<!--  Chama o Rodapé do Site-->
	<footer>
		<?php 
		include "rodape.html";
		?>
	</footer>

</body>
</html> 