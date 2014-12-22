<?php
class Conexao
{
	private $conexao;
	public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    protected function __construct()
    {
		//1 - Conexão normal
		$this->conexao = @mysql_connect('localhost', 'root', '');
		
		//2. Selecionando o banco de dados
		mysql_select_db('buriphp');
		    	
		// trata o encoding
		mysql_query("SET NAMES 'utf8'");
		mysql_query('SET character_set_connection=utf8');
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_results=utf8');
    }
    
    public function getConexao(){
    	return $this->conexao;
    }
}