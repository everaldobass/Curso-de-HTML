<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title>Aula 04 - Arrays-Vetores</title>
</head>
<body>
<div>
    <?php

    $vetor = array(5);//Array de Tamanho 5 posições.

    $mat=array(
      array("Carro 1 ",70000 ),
      array("Carro 2 ",80000 ),
      array("Carro 3 ",90000 )
);

    echo "Carro A: ".$mat[0][0]."Valor: ".$mat[0][1]."<br/>";
    echo "Carro B: ".$mat[1][0]."Valor: ".$mat[1][1]."<br/>";
    echo "Carro C: ".$mat[2][0]."Valor: ".$mat[2][1]."<br/>";

    $i=3;

    $vetor[0]="Carro";
    $vetor[1]="Avião";
    $vetor[2]="Navio";
    $vetor[3]="Moto";
    $vetor[4]="Onibus";

    echo "$vetor[$i]";
       
    ?>
    
</div>
</body>
</html>