<?php 
   include "classe/conexao.inc";
   //Fazendo inserção no banco de dados
   $vnome="jesusebom";
   $vuser="jesusebom";
   $vsenha="1321";
   $vemail="canal@gmail.com";
   $vtel="0800";
   $vst=1;
   $vobs="Gloria a Deus!";
   //Método para fazer inserção no banco de dados.
   $sql="INSERT INTO tb_cadastro VALUES(NULL,'$vnome', '$vuser', '$vsenha', '$vemail', '$vtel', $vst, '$vobs')";
   $res=mysqli_query($con, $sql);

   //verificar se esta na tela as informações da inserção
   $num=mysqli_affected_rows($con);//para INSER USAR ESSE COMANDO
   echo "$num resgistro inserido";



   //fechando a conexao com o banco de dados
   mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Conexão com Mysqli - Inserir </title>
</head>
<body>
	
</body>
</html>