<?php

include"conexao.inc";

$vcod=$_POST["Cod"];
$vprod=$_POST["Prod"];
$vpreco=$_POST["Preco"];
$vqtde=$_POST["Qtde"];
$vcat=$_POST["Cat"];

$sql="INSERT INTO tb_produtos VALUES('$vcod','$vprod', $vpreco, $vqtde, $vcat)";

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
  <title> Aula 33 - Rotina de cadastrar no Banco</title>
</head>
<body>
   <h3>Essa Rotina inseri os Dados no Banco.</h3>

  <br/>
  <a href=""/>Voltar<a/>
  <a href="form-consulta.html"/>Consultar<a/>


</body>
</html>
