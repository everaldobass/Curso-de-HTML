<?php

include"conexao.inc";

$vcod=$_POST["Cod"];
$vprod=$_POST["Prod"];
$vpreco=$_POST["Preco"];
$vqtde=$_POST["Qtde"];

$sql="INSERT INTO tb_produtos VALUES('$vcod','$vprod', $vpreco, $vqtde)";

$resultado=mysqli_query($con,$sql);
$linhas=mysqli_affected_rows($con);

if($linhas == 1){
echo "Produto Cadastrado com Sucesso!";
}else{
echo "Produto Não Cadastrado.";
}



mysqli_close($con);


?>





<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title> Aula 31 - Insert com Formulário</title>
</head>
<body>
  <br/>
  <a href="form-aula31.html">Voltar</a>
</body>
</html>
