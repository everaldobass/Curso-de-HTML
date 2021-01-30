<?php
include "conexao.inc";

$resultado=mysqli_query($con,"SELECT *FROM tb_produtos");
$linhas=mysqli_num_rows($resultado);

echo"$linhas o resultado";

mysqli_close($con);

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title> Aula 31 - Select na Tb_Produtos</title>
</head>
<body>
<div>

</div>
</body>
</html>
