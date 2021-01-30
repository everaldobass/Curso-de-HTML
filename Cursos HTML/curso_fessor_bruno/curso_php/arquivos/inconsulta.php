<?php 
   include "classe/conexao.inc";
   //Consulta realizada na tabela cadastro
   $res=mysqli_query($con, "SELECT *FROM tb_cadastro");
   //mostra as informações da linhas
   $linhas=mysqli_num_rows($res);
   echo "encontrados $linhas registros  da tabela tb_cadastro..!";



   //fechando a conexao com o banco de dados
   mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Conexão com Mysqli </title>
</head>
<body>
	
</body>
</html>