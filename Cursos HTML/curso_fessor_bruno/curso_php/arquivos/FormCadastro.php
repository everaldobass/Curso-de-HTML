<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulário - Aula 31 </title>
</head>
<body>

  <form name="F_CadProd" method="post" action="Cadastroindex.php">
  
  <label>Código</label><br>
  <input type="text" name="F_Cod" size="40" maxlength="30"/><br/><br/>

  <label>Produto</label><br>
  <input type="text" name="F_Prod" size="60" maxlength="30"/><br/><br/>

  <label>Preço</label><br>
  <input type="text" name="F_Preco" size="10" maxlength="30"/><br/><br/>
 
  <label>Quantidade</label><br>
  <input type="text" name="F_Qtde" size="10" maxlength="30"/><br/><br/>

  <input type="submit" name="Gravar" value="Gravar"/>
  <input type="reset" name="Resetar" value="Limpar"/>
 

  </form>
	
</body>
</html>