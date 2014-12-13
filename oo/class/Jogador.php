<?php
class Jogadores {
	//CTRL + 3 -> GGAS       ou        CTRL + G
	private $nome;
	private $username;
	private $nivel;
	private $servidor;
	private $isAtivo;
	
	public function getNome(){
		return $this->nome;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getUsername() {
		return $this->username;
	}
	public function setUsername($username) {
		$this->username = $username;
		return $this;
	}
	
	public function getNivel() {
		return $this->nivel;
	}
	public function setNivel($nivel) {
		$this->nivel = $nivel;
		return $this;
	}
	public function getServidor() {
		return $this->servidor;
	}
	public function setServidor($servidor) {
		$this->servidor = $servidor;
		return $this;
	}
	public function getIsAtivo() {
		return $this->isAtivo;
	}
	public function setIsAtivo($isAtivo) {
		$this->isAtivo = $isAtivo;
		return $this;
	}
	
}