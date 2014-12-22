<?php
class Utils
{
	static public function carregaClasses($filtro){
		//Diretório do projeto
		$dir_projeto = "D:/Projetos/web/buriphp/exemplos-curso-php/burimvc/";
		$dir_to_load = array("controller","config","model");
		
		foreach($dir_to_load as $class_dir){
			//Listagem de diretórios;
			$class_dir = $dir_projeto.$class_dir."/";
			$lista = opendir ($class_dir);
			while ($arquivos = readdir ($lista)) {
				$arquivo_para_incluir = $class_dir.$arquivos;
				if(is_file($arquivo_para_incluir)){
					//echo $arquivos."<br>";
					require_once($arquivo_para_incluir);
				}
			}
			closedir($lista);
		}
		
	}
	
	static public function parseUrlMethod($metodo){
	
		$nomeMetodo = $metodo;
		if(strstr($metodo,'-')){
			$arrayMetodo = explode('-',$metodo);
			$nomeMetodo = $arrayMetodo[0];
			$arrayMetodo = array_slice($arrayMetodo,1);
			foreach($arrayMetodo as $met){
				$nomeMetodo.= ucfirst($met);
			}
		}
		return $nomeMetodo;
	}
}