
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Tela de Login e Senha! </title>
	<meta name="author" content="Everaldo do Nascimento" >
	<meta name="description" content="Curso de HTML5 e CSS3">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <section>
    <form method="post" action="processa.php">
      <p>Login	ou <a href="cadastroindex.php"> Cadastre-se </a></p>
      <br>

      <input class="campos" type="text" name="login" maxlength="10" placeholder="Login" required autofocus ><br><br>

      <input class="campos" type="password" name="senha" maxlength="6" placeholder="Digite sua Senha." required autofocus ><br><br>

      <input class="btn" type="submit" name="btn" value="Entrar">
     
   
    </form>
       
    </section>
	
</body>
</html>