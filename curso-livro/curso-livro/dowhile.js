/**
 * aula - 11
 * Uma outra estrutura muito semelhante é a do - while, que executa um bloco de ações até que uma condição seja falsa. Porém, essa condição é avaliada após a execução dos comandos,
 *  fazendo com que estes sejam executados pelo menos uma vez.
 */

 let contador = 0;

do{
    console.log("Contador: " + contador)
    contador = contador + 1;
}
while (contador <= 5);