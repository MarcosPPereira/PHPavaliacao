<?
	require_once "loginCrud.class.php";
	require_once "login.class.php";
	$loginCRUD = new LoginCRUD();

	if(isset($_GET['userId'])){
		$userId = $_GET['userId'];
		$user = $loginCRUD->readById($userId);
	}
	if(isset($_POST['delete'])){
		$loginCRUD->delete($_POST['userId']);
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
	<title>Deletar Usuario</title>
</head>
<body>
	<form action="" method="post">
		<input type="hidden" name="userId" value="<?=$userId?>">
		<p>Deseja excluir usuário de Código <?=$userId?></p>
		<input type="submit" name="delete" value="Confirmar">
		<input type="submit" name="cancel" value="Voltar">
	</form>
</body>
</html>

