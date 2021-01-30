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

	
	<section id="main">

		<?php 
        //Conexao com o banco de dados criado
        include "conexao.inc";

		if (isset($_POST["f_logar"])) {
         
			$user=$_POST["f_user"];
			$senha=$_POST["f_senha"];

            //Selecionando todos os clientes da tabela colaboradores
			$sql="SELECT * FROM tb_colaboradores WHERE username='$user' AND senha='$senha'";
			$res=mysqli_query($con, $sql);
			$ret=mysqli_fetch_array($res);

         	


            //Verificar se o usuario e a senha esta correto
			if ($ret == 0)  {
				echo "<p id='lgErro'>Login incorreto</p>";
				
			}else{
              //Criando a chave de comparação segurança
				$chave1="abcdefghijKlmnopqrstuvwxz";
				$chave2="ABCDEFGHIJKLMNOPQRSTUVWXZ";
				$chave3="0123456789";

				$chave=str_shuffle($chave1.$chave2.$chave3);
				$tam=strlen($chave);
				$num="";
				$qtde=rand(20,50);

				for ($i=0; $i < $qtde; $i++) {

					$pos=rand(0,$tam);
					$num.=substr($chave, $pos, 1);

				}
				session_start();
				$_SESSION['numlogin']=$num;
				$_SESSION['username']=$user;
				$_SESSION['acesso']=$ret['acesso'];

				header("Location:gerenciamento.php?num=$num");
			}
				

		}

		 mysqli_close($con);

		?>

		<form action="login.php
			" method="post" name="f_login" id="f_login">
			<label> Usuário </label>
			<input type="text" name="f_user">

			<label> Senha</label>
			<input type="password" name="f_senha">
			<input type="submit" name="f_logar" value="logar">
		</form>
		

	</section>

	<footer>
		<?php 
		include "rodape.html";
		?>
	</footer>

</body>
</html> 