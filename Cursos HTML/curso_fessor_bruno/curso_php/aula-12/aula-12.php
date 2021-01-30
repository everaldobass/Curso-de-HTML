<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title></title>
</head>
<body>
<div>
    <?php

    function aula(){
      echo "<hr/>Olá Mundo!  <br/>";
      echo "Aula sobre funções<hr/>";
    }
    /*Chamando uma função*/
    aula();


     /*função com paramentros*/
    function soma($n1,$n2){

    $res=$n1+$n2;
    echo "<br/> A Soma de $n1 com $n2 = $res<br/>";

    }

    soma(5,7);
     /*função com paramentros*/
    function soma2($n1,$n2){
    $res=$n1+$n2;
    return $res;

    }
    $so=soma2(10,5);
    echo "<br/>resultado e = $so<br/>";


    $valores=array(1,3,5,7,9,12,6,4,20,18);
    function media($val){

    $tam=count($val);
    $soma=0;

    for($i=0; $i<$tam; $i++){
    $soma+=$val[$i];

    }
    return $soma/$tam;

    }
    $resultado=media($valores);
    echo"<br/>Média = $resultado<br/>";


    ?>
</div>
</body>
</html>
