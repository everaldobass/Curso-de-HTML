<?php 

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from tbusuarios where profissao like '%$filtro%'order by nome";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Formulário de Cadastro! </title>
	<meta name="author" content="Everaldo do Nascimento" >
	<meta name="description" content="Curso de HTML5 e CSS3">
	<link rel="stylesheet" type="text/css" href="css/Css_aula23.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,600i,700,700i,800" rel="stylesheet"> 
</head>
<body>

 <div class="container">

   <nav><!-- Fica a Nave on se localiza o menu -->

    <ul class="menu"><!-- Fica o menu -->
      <a href="index.php"><li> Cadastro </li></a>
      <a href="consultas.php"><li> Consultas </li></a>
      </ul>
  </nav>

  <section>
   <br>
   <h1> Consultas</h1>
   <hr><br>

   <form method="get" action=""><!-- Formulario de Pesquisar e Botão de Pesquisar -->
   Filtrar por Profissão <input type="text" name="filtro" class="campo" required autofocus>
   <input class="btn" type="submit" value="Pesquisar" >
   </form>

   <?php 

   print "$registros registros encontrados. ";
   print "<br><br>";

   while($exibirRegistros = mysqli_fetch_array($consulta)) {
     
      $codigo = $exibirRegistros[0];
      $nome = $exibirRegistros[1];
      $email = $exibirRegistros[2];
      $profissao = $exibirRegistros[3];

      print "<article>";

      print "$codigo <br>";  
      print "$nome <br>";
      print "$email <br>";
      print "$profissao ";

      print "</article>";
   }

   mysqli_close($conexao);

   ?>

 </section><!-- Fica o Cadastro de usuarios -->

 <!--<footer>
   <p>@TekLinux - Todos os direitos reservados - Everaldo do Nascimento.</p>
 </footer>-->
 
</div>

</body>
</html>