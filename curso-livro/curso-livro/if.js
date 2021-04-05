/**
 * Assim como a maioria das linguagens de alto nível, 
 * JavaScript possui estruturas condicionais e de repetição para controle de fluxo.
 * Na Listagem 6 temos a sintaxe e um exemplo de uso de tais estruturas.
 */


//Sintaxe
if(condição 1)
{
  //ação se condição 1 verdadeira
}
else if (condição 2)
{
  //ação se condição 2 verdadeira
}
else
{
  //ação se nenhuma das condições for verdadeira
}


//A declaração else if
let idade;
if (idade >= 18) {
    console.log ("Você é maior de idade");
        } else {
    console.log ("Você não é maior de idade");
 }


// Escreva um codigo e mostre se o aulo foi aprovado ou não

let n1,n2, media;

n1 = 8;
n2 = 5;

media = (n1 + n2 )/ 2

if(media >=10){
    console.log ("Aluno Aprovado: " + media);

}else if(media <= 5){
    console.log ("Aluno Recuperação: " + media);
}else{
    console.log ("Aluno Reprovado: " + media);

}

    
