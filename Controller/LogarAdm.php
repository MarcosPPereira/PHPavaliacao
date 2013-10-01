<?
	$login = "adm";
	$pass = "123";
	if ($login == $_POST['login'] && $pass == $_POST['password']){
		session_start();
        header('Location:../Model/index.php');
	} else {
		echo 'Senha Invalida...!!!';?>
		<button onclick="location.href='index.php'">Cancel</button>
	<?}
?>