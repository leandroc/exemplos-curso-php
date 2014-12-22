<?php
//Este arquivo atual como FronController.
//var_dump($_GET);

//O bootstrap carrega e inicializa tudo o que precisamos
require 'bootstrap.php';

//Isso aqui poderia ser otimizado e se tornar um método do FronController
$requisicao = array();
if(!isset($_GET["param"])){
	$requisicao[0] = 'home';//Nome do Controller
	$requisicao[1] = 'index';//Nome do métodos
} else {
	$requisicao = explode("/",$_GET["param"]);
	if(!isset($requisicao[1])){
		$requisicao[1] = 'index';
	} else if(empty($requisicao[1])){
		$requisicao[1] = 'index';
	}
}
// var_dump($requisicao);

//Pega o nome do controller para carregar
$nomeController = ucfirst($requisicao[0]);
$nomeController = ucfirst(trim($requisicao[0]))."Controller";

//Pega o nome do método para ser chamado
$nomeMetodo = Utils::parseUrlMethod($requisicao[1]);

// var_dump($nomeController);
// var_dump($nomeMetodo);

//Instancia o método do controller desejado
$controller = new $nomeController();
$controller->$nomeMetodo();