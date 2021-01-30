<!doctype html>
<html lang=“pt-br”>
<head>
	<title>Everaldo</title>
	<meta charset=“utf-8”/>
	<link rel="stylesheet" href="css/estilos.css"/> 
</head>
<body>
	
	<header>
		<?php
		include "topo.php";
		?><!--  Chama o Topo do Site-->
	</header>

	<section id="slider">
       <?php 
       include "slider.html";
       ?>
	</section>
	<section id="buscador">
       <?php 
       include "buscador.php";
       ?>
	</section>
	<section id="destaques">
       <?php 
       include "destaques.php";
       ?>
	</section>
	<footer>
	<?php 
      include"rodape.html";
	?>
	</footer>

</body>
</html> 