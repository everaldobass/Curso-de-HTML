<?php
include"conexao.inc";

$vmat=$_POST["Mat"];
$vnome=$_POST["Nome"];
$vend=$_POST["End"];
$vcid=$_POST["Cid"];
$vest=$_POST["Est"];
$vemail=$_POST["Email"];
$vtel=$_POST["Tel"];
$vsexo=$_POST["Sexo"];

$sql="INSERT INTO tb_funcionario VALUES (NULL,'$vmat','$vnome','$vend','$vcid','$vest','$vemail','$vtel','$vsexo')";

$resultado=mysqli_query($conexao,$sql);
$linhas=mysqli_affected_rows($conexao);

echo"Funcionário cadastrado com Sucesso";

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title>Funcionario.php</title>

</head>
<body>

  <h1>Rotina de Inserir um Funcionário</h1>
  <a href="formCad.html"/>Voltar<a/>
  <a href="formConsultaFunc.html"/>Consulta<a/>


</body>
</html>
