<?php
session_start();
ob_start();

//Mapeamento dos paths do proejto
define("URL_PROTOCOLO",(strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === false) ? 'http' : 'https');
define("URL_HOST",$_SERVER['HTTP_HOST']);
define("URL_SCRIPT",$_SERVER['SCRIPT_NAME']);
define("URL_PARAMS",$_SERVER['QUERY_STRING']);
define("URL_ATUAL",URL_PROTOCOLO . '://' . URL_HOST . URL_SCRIPT);
define("URL_ATUAL_COMPLETA",URL_PROTOCOLO . '://' . URL_HOST . URL_SCRIPT. '?' .URL_PARAMS);
define("DIR_ARQUIVO_ATUAL",basename ($_SERVER['PHP_SELF']));
define("DIR_RAIZ",str_replace('\\','/',realpath(dirname(__FILE__))).'/');
define("URL_RAIZ",str_replace(DIR_ARQUIVO_ATUAL,'',URL_ATUAL));

//Mapeamento de diretórios úteis
define("CONFIG_PATH",DIR_RAIZ.'config/');
define("VIEW_PATH",DIR_RAIZ.'view/');

//Chama scripts necessários
require_once CONFIG_PATH."Utils.php";
spl_autoload_register("Utils::carregaClasses"); 
