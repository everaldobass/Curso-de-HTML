<?php

include"conexao.inc";

//DELETA DA TABELA CADASTRO QUANDO O CODIGO FOR O PRIMEIRO
$sql="Delete FROM tb_funcionario WHERE cod ='8'";
$res=mysqli_query($conexao,$sql);//EXECUTADO O COMANDO COM MYSQLI_QUERY

$linhas=mysqli_affected_rows($conexao);//MOSTRA O RESULTADO DAS LINHAS QUE FOI AFETADA A EXECUÇÃO

if($linhas > 0){
echo"Deletado com sucesso";
}else{
echo "Não Deletado";
}


mysqli_close($conexao);
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title>Aula 35 - Comando Delete </title>
</head>
<body>

</body>
</html>
