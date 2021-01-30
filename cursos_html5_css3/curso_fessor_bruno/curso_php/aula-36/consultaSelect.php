<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title>Aula 36 - Comando Delete Selecionando </title>
</head>
<body>

<form name="Excluir" method="post" action="consultaSelect.php">

<table border="1">

<tr>
<td>Codigo</td><td>Nome</td><td>Selecionar</td>
</tr>

<?php

include"conexao.inc";

if(isset($_POST['sel'])){
  foreach($_POST['sel'] as $codigo){

  $sql="delete from tb_cadastro where cod=$codigo";
  $res=mysqli_query($conexao,$sql);
  }


}else{
  echo"Forme Não Submetido";
}



//comandos para deleter na tabela de cadastro
$sql="select * from tb_cadastro order by cod";
$res=mysqli_query($conexao, $sql);

while($vreg=mysqli_fetch_row($res)){
$vcod=$vreg[0];
$vnome=$vreg[1];

echo"<tr>";
echo"<td>$vcod</td><td>$vnome</td>";
echo"<td align=center><input type=checkbox value=$vcod name=sel[]></td>";
echo"</tr>";


}

mysqli_close($conexao);
?>
</table>
<br/>

<input type="submit" value="Excluir" name="bt_excluir">

</form>


</body>
</html>
