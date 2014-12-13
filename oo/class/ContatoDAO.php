<?php
class ContatoDAO {
	private $conexao;
	public function __construct($conexao){
		//Recebe aqui uma conexão ao banco criada antes
		//Com o singleton, por exemplo
		$this->conexao = $conexao;
	}

	public function cadastrar(ContatoVO $contato){
		$nome = $contato->getNome();
		$dataCadastro = $contato->getDataCadastro();
		$query = "INSERT INTO contato (nome, dataCadastro)
				  VALUES ('".$nome."','".$dataCadastro."')";

		mysql_query($query) or die(mysql_error());
		return mysql_insert_id();
	}
}