<?php
//Sesão para bloquear o controle de acesso a páginas

session_start();
if (isset($_SESSION['numlogin'])) {
 	# code...
	$n1=$_GET["num"];
	$n2=$_SESSION['numlogin'];
	if ($n1!=$n2) {
 		# code...
		echo "<p>Login não efetuado!</p>";
		exit;
	}

} else{
	echo "<p>Login não efetuado!</p>";
	exit;

}
 #incluindo a conexão com o banco de dados
include "conexao.inc";

?>


<!doctype html>
<html lang=“pt-br”>
<head>
	<title>Tela de Novos usuarios</title>
	<meta charset=“utf-8”/>
	<link rel="stylesheet" href="css/estilos.css"/> 
	

</head>
<body>
	
	<header>
		<?php
		include "topo.php";
		?><!--  Chama o Topo do Site-->
	</header>

	
	<!--  Pagina de gerenciamento-->
	<section id="main" >
		<a href="gerenciamento.php?num=<?php echo $n1; ?>" target="_self" class="btmenu">voltar</a>

		<h1>Cadastre novo usuário.</h1>

		<?php 
		if (isset($_GET["f_bt_novo_coloborador"])) {
              	# recebe as informações do botão do formulario
			$vnome=$_GET["f_nome"];
			$vuser=$_GET["f_user"];
			$vsenha=$_GET["f_senha"];
			$vacesso=$_GET["f_acesso"];

			$sql="INSERT INTO tb_colaboradores (nome,username,senha,acesso) VALUES ('$vnome','$vuser','$vsenha',$vacesso)";
			mysqli_query($con, $sql);
			$linhas=mysqli_affected_rows($con);

			if ($linhas >= 1) {
              		# Verificando se foi cadastrado ou não.
				echo "<p>Usúario cadastrado com Sucesso!</p>";
			}else{
				
				echo "<p>Erro Usúario não Cadastrado</p>";
			}

		}
		?>

		<form name="f_novo_coloborador" action="novo_usuario.php" class="f_colaborador"  method="get">

			<input type="hidden" name="num" value="<?php echo $n1;?>">

			<label>Nome</label>
			<input type="text" name="f_nome" maxlength="50" size="50" required="required">

			<label>Username</label>
			<input type="text" name="f_user" maxlength="50" size="50" required="required">

			<label>Senha</label>
			<input type="text" name="f_senha" maxlength="50" size="50" required="required">

			<label>Acesso</label>
			<input type="text" name="f_acesso" maxlength="50" size="50" required="required" pattern="[0-1]+$" placeholder="0 ou 1" title="0 ou 1">

			<input type="submit" name="f_bt_novo_coloborador" class="btmenu" value="gravar">
		</form>

	</section>
	<!--  Menu de gerenciamento-->
	

</body>
</html> 