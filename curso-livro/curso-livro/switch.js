/*
O comando switch verifica o valor de uma variável e, para cada uma das opções, 
executa um conjunto de ações. Se nenhum dos valores for verificado, 
os comandos do bloco default são executados.
*/


let dia = 8;

switch(dia){

    case 1:
    console.log("Domingo: ")
    break;

    case 2:
    console.log("Segunda-feira: ")
    break;

    case 3:
    console.log("Terça-feira: ")
    break;

    case 4:
    console.log("Quarta-feira: ")
    break;

    case 5:
    console.log("Quinta-feira: ")
    break;

    case 6:
    console.log("Sexta-feira: ")
    break;

    case 7:
    console.log("Sábado: ")
    break;

   default:
    console.log("Não acertou o dia correto: ")
    break;
}