<?php
class HomeController extends FrontController
{
	
	public function index()
	{
		//Aqui vai qualquer coisa que precise ser feita antes da view ser mostrada
		$view = VIEW_PATH.'home.php';
		
		
		
		
		$this->showView($view);
	}
	
	public function listar()
	{
		//Eu sou outro método do HomeController e não faço nada
	}
	
}