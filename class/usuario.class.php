<?php 
// classe modelo
class Usuario {
	//definição das colunas existentes na tabela do banco de dados
	private $usuId;
	private $usuNome;
	private $usuEmail;
	private $usuSenha;
	private $usuTipo;

	public function getUsuId()
	{
	    return $this->usuId;
	}
	
	public function setUsuId($usuId)
	{
	    return $this->usuId = $usuId;
	}

	public function getUsuNome()
	{
	    return $this->usuNome;
	}
	
	public function setUsuNome($usuNome)
	{
	    return $this->usuNome = $usuNome;
	}

	public function getUsuEmail()
	{
	    return $this->usuEmail;
	}
	
	public function setUsuEmail($usuEmail)
	{
	    return $this->usuEmail = $usuEmail;
	}

	public function getUsuTipo()
	{
	    return $this->usuTipo;
	}
	
	public function setUsuTipo($usuTipo)
	{
	    return $this->usuTipo = $usuTipo;
	}

	public function getUsuSenha()
	{
	    return $this->usuSenha;
	}
	
	public function setUsuSenha($usuSenha)
	{
	    return $this->usuSenha = $usuSenha;
	}

	//formatando a apresentação do objeto - método __toString()
	public function __toString(){
		return
				"Id: ".$this->getusuId().
				"<br> Nome: ".$this->getusuNome().
				"<br> Email: ".$this->getusuEmail().
				"<br> Senha: ".$this->getusuSenha().
				"<br> Tipo: ".$this->getusuTipo();
	}
}


 ?>