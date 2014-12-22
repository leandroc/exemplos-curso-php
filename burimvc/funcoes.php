<?php
function carregaClasses($filtro){
	//Diretório do projeto
	$dir_projeto = "D:/Projetos/web/buriphp/exemplos-curso-php/oo/class/";
	
	//Listagem de diretórios;
	$lista = opendir ($dir_projeto);
	while ($arquivos = readdir ($lista)) {
		$arquivo_para_incluir = $dir_projeto.$arquivos;
		if(is_file($arquivo_para_incluir)){
			//echo $arquivos."<br>";
			require_once($arquivo_para_incluir);
		}
	}
	closedir($lista);
	
}