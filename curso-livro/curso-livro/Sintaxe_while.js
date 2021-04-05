/**
 * 
 * A estrutura de repetição while é usada para executar um conjunto de ações enquanto uma condição for verdadeira.
 *  Quando a condição se tornar falsa, o bloco é finalizado. 
 * 
 * A seguir temos um exemplo que exibe uma mensagem para o usuário enquanto uma variável for menor que 5.
 */


let contador = 0;
while(contador <= 5)
{
  console.log("Curso de JavaScript: " +  contador);
  contador = contador + 1;
}