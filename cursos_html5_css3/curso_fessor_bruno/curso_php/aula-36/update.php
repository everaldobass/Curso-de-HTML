
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title>Aula 38 - Comando Update </title>
</head>
<body>

<?php
include"conexao.inc";

$sql="update tb_cadastro set telefone='961680492' where cod=5";
$res=mysqli_query($conexao, $sql);

if($res){
echo "Executado com Sucesso";
}else{
echo "Não Executado ";

}

mysqli_close($conexao);
?>



</body>
</html>
