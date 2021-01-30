<?php 
//Conexão Feita no Banco
   include "classe/conexao.inc";

   $vcod=$_POST["F_Cod"];
   $vprod=$_POST["F_Prod"];
   $vpreco=$_POST["F_Preco"];
   $vqtde=$_POST["F_Qtde"];

   $sql="INSERT INTO tb_produtos VALUES ('$vcod', '$vprod', $vpreco, $vqtde )";
   $res=mysqli_query($con,$sql);

   $num=mysqli_affected_rows($con);

   if($num == 1 ) {
   	echo"Gravado com Sucesso! <br/>";

   }else{

   echo "Não Conectado! <br/>";
   }

   //fechando a conexao com o banco de dados
   mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Método Cadastro  - Aula31 </title>
</head>
<body>
	
	<br/>
	<a href="FormCadastro.php"> Voltar </a>
</body>
</html>