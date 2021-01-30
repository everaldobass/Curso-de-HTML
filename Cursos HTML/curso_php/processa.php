<!--Aula 23 - Criaçao do Arquivo Processa !-->
<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

//comando para inserir as informações no banco de dados
$sql = "insert into tbusuarios(nome, email,profissao) values ('$nome','$email','$profissao')";
$Salvar = mysqli_query($conexao, $sql);//comando para salvar no banco

$linhas = mysqli_affected_rows($conexao);//Mostra quantas linhas afetadas!

mysqli_close($conexao);//Fecha a Conexao com o banco de dados

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
			<h1> Confirmação de Usuarios</h1>
			<hr><br><br>

			<?php
			if ($linhas == 1) {
				print "Cadastro Efetuado com Sucesso!";
			}else{

				print" Cadastro não efetuado. <br> Já existe usuário com esse E-mail!";
			}

			?>

		</section><!-- Fica o Cadastro de usuarios -->

		<!--<footer>
			<p>@TekLinux - Todos os direitos reservados - Everaldo do Nascimento.</p>
		</footer>-->

	</div>

</body>
</html>
