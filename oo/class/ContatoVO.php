<?php
class ContatoVO {
	private $nome, $dataCadastro;

	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	
	public function getDataCadastro() {
		return $this->dataCadastro;
	}
	
	public function setDataCadastro($dataCadastro = null) {
		if($dataCadastro == null){
			$this->dataCadastro = date("Y:m:d H:i:s");
		}
	}
}