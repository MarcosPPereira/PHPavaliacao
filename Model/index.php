<?
	require_once "loginCrud.class.php";
	$loginCrud = new LoginCRUD();
	$logins = $loginCrud->readAll();

	function formatDate($date){
		$date = explode("-", $date);
		$date = array_reverse($date);
		return implode("/", $date);
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuários</title>
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<style>
		section {
			width: 30%;
			margin: auto;
		}
		table {
			counter-reset: number;
		}
		thead {
			background-color: #000;
			color: #fff;
		}
		tbody tr:nth-child(even) {
			background-color: #ccc;
		}
		td.number:before {
			counter-increment: number;
			content: counter(number);
		}
		i:hover {
			color: #999;
		}
	</style>
</head>
<body>
	<section>
	<table>
		<thead>
			<tr>
				<th></th>
				<th>Usuarios</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?foreach ($logins as $id=>$login) {?>
				<tr>
					<td><?=$login->getIdLogin()?></td>
					<td><?=$login->getNome()?></td>
					<td><?=$login->getEmail()?></td>
					<td><?=$login->getTelefone()?></td>
                    <td><a href="edit.php?userId=<?=$login->getIdLogin()?>"><i class="icon-edit-sign"></i></a></td>					
	                <td><a href="delete.php?userId=<?=$login->getIdLogin()?>"><i class="icon-remove-sign"></i></a></td>
				</tr>
			<?}?>
		</tbody>
	</table>
	<button onclick="location.href='create.php'">Cadastrar</button>
	<button onclick="location.href='../Controller/index.php'">Login</button>	
	</section>
</body>
</html>