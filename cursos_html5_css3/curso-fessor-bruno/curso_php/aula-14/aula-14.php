<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title>Aula-14 PHP Funções recursivas</title>
</head>
<body>
<div>
    <?php

function aula($num){

    if($num!=0){
    echo "Função Aula com valor $num<br/>";
    aula($num-1);
    }

 }
 //aula(10);
//<hr/>

//4 = 4x3x2x1 = 24
function fatorial($num){

   if($num < 0){
   return -1;
   }

   if($num <=1){
   return 1;
   }

   return $num*fatorial($num-1);

}
   echo "<br/>Fatorial de 10 é:".fatorial(10);
   echo "<br/>Fatorial de 3 é: ".fatorial(10);
   echo "<br/>Fatorial de 4 é: ".fatorial(10);
 ?>
</div>
</body>
</html>
