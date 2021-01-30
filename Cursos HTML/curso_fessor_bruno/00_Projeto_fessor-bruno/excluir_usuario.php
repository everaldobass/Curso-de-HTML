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

		<h1>Exclusão de Usuários.</h1>

		<?php 
		if (isset($_GET["f_bt_excluir_coloborador"])) {
			$vid=$_GET["f_colaboradores"];
			$sql="DELETE FROM tb_colaboradores WHERE id_colaborador=$vid";
			mysqli_query($con, $sql);

			$linhas=mysqli_affected_rows($con);
			if($linhas >=1){
            echo "<p>Deletado com Sucesso!</p>";

			}else{

             echo "<p>Erro ao deletar</p>";
			}

		}

		?>

		<!--  Formulario de excluir colaborador-->

		<form name="f_excluir_coloborador" action="excluir_usuario.php" class="f_colaborador"  method="get">

			<input type="hidden" name="num" value="<?php echo $n1;?>">

			<label>Selecione o colaborador</label>
			<select name="f_colaboradores" size="10">

			
			<?php 
			$sql="SELECT * FROM tb_colaboradores";//Criou o codigo
			$col=mysqli_query($con,$sql);

			//$total_col=mysqli_num_rows($col);

			while ( $exibe= mysqli_fetch_array($col)) {
				# code...
				echo "<option value='".$exibe['id_colaborador']."'>" .$exibe['nome']."</option>";
			}




			 ?>

			</select>
			<input type="submit" name="f_bt_excluir_coloborador" class="btmenu" value="excluir">
		</form>

	</section>
	<!--  Menu de gerenciamento-->
	

</body>
</html> 