<?php

include "conexao.inc";


$vnome="Edson";
$vuser="josé";
$vsenha="331";
$vmail="everaldo@gmail.com";
$vtel="0800";
$vst= 0;
$vobs="Glória a Deus!!";

//Comando para inserir os valores na tb_cadastro(os valores das variaveis )
$sql="INSERT INTO tb_cadastro VALUES ( NULL,'$vnome','$vuser','$vsenha','$vmail','$vtel', $vst,'$vobs')";

$res=mysqli_query($con, $sql);

$num=mysqli_affected_rows($res);
echo"$num Registros inseridos com Sucesso!";


mysqli_close($con);//fechou a conexao

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title> Aula 30 - PHP Comandos Insert- </title>
</head>
<body>
<div>

</div>
</body>
</html>
