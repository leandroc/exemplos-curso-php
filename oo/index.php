<?php
include "funcoes.php";
spl_autoload_register("carregaClasses");

//Instanciando o DAO
$conexao = Conexao::getInstance()->getConexao();
$dao = new ContatoDAO($conexao);

//Criando nosso objeto contato.
$contato = new ContatoVO();
$contato->setNome("Eder Franco");
$contato->setDataCadastro();
$contato = new ContatoVO();

//Utiliando o método cadastrar do DAO
$id = $dao->cadatrar($contato);
var_dump($id);