<?php
include "conexao.inc";

$vcat=$_POST["Cat"];

$sql="SELECT *FROM tb_produtos WHERE cat = $vcat";
$res=mysqli_query($con,$sql);
$linhas=mysqli_num_rows($res);

if($vcat == 1){
echo"$linhas Essa e a quantidade da categoria $vcat";
}else{
echo"$linhas Essa e a quantidade da categoria $vcat";

}


mysqli_close($con);

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title> Aula 32 - Select na Tb_Produtos</title>
</head>
<body>

<br/>
<a href="form-consulta.html"/>Voltar<a/>

</body>
</html>
