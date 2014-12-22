<?php
class ContatoController extends FrontController
{
	public function index()
	{
		//Aqui vai qualquer coisa que precise ser feita antes da view ser mostrada
		$view = VIEW_PATH.'contato.php';
		$this->showView($view);
	}
	
	public function salvar()
	{
		//Aqui eu posso criar uma lógica bacana para salvar no banco
		//Instanciando o DAO
		$conexao = Conexao::getInstance()->getConexao();
		$dao = new ContatoDAO($conexao);
		
		//Criando nosso objeto contato.
		$contato = new ContatoVO();
		$contato->setNome("Eder Franco");
		$contato->setDataCadastro();
		
		//Utiliando o método cadastrar do DAO
		$id = $dao->cadastrar($contato);
		$params["id"] = $id;
		$view = VIEW_PATH.'sucesso.php';
		$this->showView($view,$params);
		//var_dump($id);
		
		
	}
	
	public function salvarRest()
	{
		//Aqui eu posso criar uma lógica bacana para salvar no banco
		//Instanciando o DAO
		$conexao = Conexao::getInstance()->getConexao();
		$dao = new ContatoDAO($conexao);
	
		//Criando nosso objeto contato.
		$contato = new ContatoVO();
		$contato->setNome("Eder Franco");
		$contato->setDataCadastro();
	
		//Utiliando o método cadastrar do DAO
		$id = $dao->cadastrar($contato);
// 		$params["id"] = $id;
// 		$view = VIEW_PATH.'sucesso.php';
// 		$this->showView($view,$params);
// 		//var_dump($id);
		echo json_encode($id);
		exit;
	
	
	}
	
	
	
	
	
	
	
	
	
	
	public function buscarPorEmail()
	{
		echo 'veio';
	}
	
}
