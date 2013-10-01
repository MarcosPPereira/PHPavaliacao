<?
/**
* 
*/
class Login
{
	private $idLogin;
	private $nome;
	private $senha;
	private $email;
	private $telefone;
	private $registryDate;

	public function __construct($idLogin, $nome, $senha, $email, $telefone, $registryDate)
	{
		$this->idLogin = $idLogin;
		$this->nome = $nome;
		$this->senha = $senha;
		$this->email = $email;
		$this->telefone = $telefone;
		$this->registryDate = $registryDate;
	}

	public function getIdLogin()
	{
		return $this->idLogin;
	}

	public function setIdLogin($idLogin)
	{
		$this->idLogin = $idLogin;
		return $this;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
		return $this;
	}

	public function getSenha()
	{
		return $this->senha;
	}

	public function setSenha($senha)
	{
		$this->senha = $senha;
		return $this;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}

	public function getTelefone()
	{
		return $this->telefone;
	}

	public function setTelefone($telefone)
	{
		$this->telefone = $telefone;
		return $this;
	}

	public function getRegistryDate()
	{
		return $this->registryDate;
	}

	public function setRegistryDate($registryDate)
	{
		$this->registryDate = $registryDate;
		return $this;
	}

}