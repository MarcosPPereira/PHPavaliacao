<?
	require_once "login.class.php";
	/**
	* 
	*/
	class LoginCRUD
	{
		private $pdo;

		function __construct()
		{
			$this->pdo = new PDO('mysql:dbname=gravatar;host=127.0.0.1;port=3306','root','123456');
        }

		public function create($login)
		{
			$this->pdo->query("INSERT INTO `usuarios` VALUES (null, '{$login->getNome()}', '{$login->getSenha()}', '{$login->getEmail()}', '{$login->getTelefone()}', now())");
		}

		public function readAll()
		{
			$pdoStmt = $this->pdo->query("SELECT * FROM `usuarios`");
			$pdoStmt->execute();
			$loginsArray = $pdoStmt->fetchAll(PDO::FETCH_ASSOC);
			$logins = array();
			foreach ($loginsArray as $loginArray) {
			   extract($loginArray);
			   $logins[] = new Login($idLogin, $nome, $senha, $email, $telefone, $registryDate);
			}
			return $logins;
		}

		public function readById($id)
		{
			$pdoStmt = $this->pdo->query("SELECT * FROM `usuarios` WHERE `idLogin` = $id");
			$pdoStmt->execute();
			$loginsArray = $pdoStmt->fetchAll(PDO::FETCH_ASSOC);
			$logins = array();
			foreach ($loginsArray as $loginArray) {
			   extract($loginArray);
   			   $logins[] = new Login($idLogin, $nome, $senha, $email, $telefone, $registryDate);
			}
			return $logins;
		}

		public function delete($id)
		{
	        $pdoStmt = $this->pdo->query("DELETE FROM usuarios WHERE idLogin = '$id'");
	        $pdoStmt->execute();
			$loginArray = $pdoStmt->fetch(PDO::FETCH_ASSOC);
			extract($loginArray);
			return new Login($idLogin, $nome, $senha, $email, $telefone, $registryDate);
		}

        public function edit($id)
		{
            $pdoStmt = $this->pdo->query("UPDATE usuarios SET nome='{$login->getNome()}', senha='{$login->getSenha()}', email='{$login->getEmail()}', telefone='{$login->getTelefone()}' WHERE idLogin = '$id'");
	        $pdoStmt->execute();
			$loginArray = $pdoStmt->fetch(PDO::FETCH_ASSOC);
			extract($loginArray);
			return new Login($idLogin, $nome, $senha, $email, $telefone, $registryDate);
		}

	}
?>