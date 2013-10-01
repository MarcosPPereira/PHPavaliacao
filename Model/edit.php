<?
	require_once "loginCrud.class.php";
	require_once "login.class.php";
	$loginCrud = new LoginCRUD();
	$user;

	if(isset($_GET['userId'])){
		$userId = $_GET['userId'];
		$user = $loginCRUD->readById($userId);
	}

	if(isset($_POST['submit'])){
		extract($_POST);
		$user = new Login($nome, $senha, $email, $telefone);
		$loginCRUD->update($_POST[$userId], $user);
		header("Location: index.php");
	}

	if(isset($_POST['cancel'])){
		header("Location: index.php");
	}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar Usuario</title>
</head>

<body>
	<section>
	<form action="" method="post" autocomplete="off" enctype="multipart/form-data">
		<fieldset id="editFieldset">
			<legend>Cadastro de Usuário</legend>
				<input type="hidden" name="userId" value="<?=$userId?>">
				<input type="text" name="name" id="name" placeholder="Nome" value="<?=$user->getNome()?>">
                <input type="password" name="senha" id="senha" value="<?=$user->getSenha()?>">				
				<input type="text" name="email" id="email" placeholder="e-mail" value="<?=$user->getEmail()?>">
				<input type="text" name="telefone" id="telefone" placeholder="Telefone" value="<?=$user->getTelefone()?>">
		</fieldset>
		<input type="submit" name="submit" value="Editar Usuário">
		<input type="submit" name="cancel" value="Voltar">
	</form>
	</section>
</body>
</html>
