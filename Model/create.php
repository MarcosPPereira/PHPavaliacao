<?
	require_once "loginCrud.class.php";
	$loginCrud = new LoginCRUD();
	extract($_GET);
	if(isset($submit)){
		// Insert into db
		$login = new Login(null, $nome, $senha, $email, $telefone, null);
		$loginCrud->create($login);
		// Redirect to index.php
		header("Location: index.php");
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
	<style>
		#content {
			font-family: helvetica, sans-serif;
			text-align: center;
			width: 30%;
			margin: auto;
		}
		#content input:not([type=submit]), #content textarea {
			width:90%;
		}
	</style>
</head>
<body>
	<div id="content">
		<h1>Cadastrar Usuarios</h1>
		<form action="">
			<fieldset>
				<legend>Cadastro</legend>
				<input type="text" name="nome" placeholder="Nome">
				<input type="password" name="senha">	
				<input type="text" name="email" placeholder="Email">
				<input type="text" name="telefone" placeholder="Telefone">
				<input type="submit" name="submit" value="Cadastrar">
			</fieldset>
		</form>
	</div>
</body>
</html>