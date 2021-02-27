<!DOCTYPE html>
<html lang="pr-br">
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
    <a href="index.php"><li> Home </li></a>
    <a href="cadastro.php"><li> Cadastro </li></a>
    <a href="consultas.php"><li> Consultas </li></a>

    </ul>
   </nav>

   <section>
   <br>
   <h1> Tela de Cadastro de usúarios</h1>
   <hr><br><br>

   <form method="get" action=""><!-- Formulario de Pesquisar e Botão de Pesquisar -->
   Usuario: <input type="text" name="nome" class="campo" required autofocus><br/><br/>
   Senha: <input type="password" name="senha" class="campo" required autofocus><br/><br/>

   <input class="btn" type="submit" value="Logar" >
   </form>
   </section><!-- Fica o Cadastro de usuarios -->

  <!--<footer>
   <p>@TekLinux - Todos os direitos reservados - Everaldo do Nascimento.</p>
   </footer>-->


 </div>

</body>
</html>
