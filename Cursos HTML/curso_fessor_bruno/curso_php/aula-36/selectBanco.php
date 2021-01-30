<?php

include"conexao.inc";

$res=mysqli_query($conexao, "SELECT *FROM tb_funcionario");
$linhas=mysqli_num_rows($res);

echo "$linhas Registro na Tabela Funcionarios.";


mysqli_close($conexao);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title></title>
</head>
<body>

</body>
</html>
