<!--Aula 23 - Conexao Com o Banco de Dados!-->

<?php 

$hostname = "localhost:3306";
$user = "root";
$password = "123";
$database = "cadastro";
$conexao = mysqli_connect($hostname, $user, $password, $database);

if(!$conexao){
echo "Falha na Conexão com Banco de Dados!";//Messagem de erro se a conexao não funcionar.
}

?>