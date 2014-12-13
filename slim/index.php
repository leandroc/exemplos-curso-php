<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader ();
$app = new \Slim\Slim ();



//Exemplo: http://localhost/exemplos-curso-php/slim/books/1
$app->get('/books/', function () {
    //Show book identified by $id
	echo json_encode(array('Teste', 'Test2'));
	//$_GET
});

//Exemplo: http://localhost/exemplos-curso-php/slim/books/
$app->post('/books/', function () {
    //Create book
	echo json_encode($_POST);
	//$_POST
});

$app->put('/books/:id', function ($id) {
    //Update book identified by $id
	//http://www.lornajane.net/posts/2008/accessing-incoming-put-data-from-php
	//$paramValue = $app->request()->put('paramName');
});

$app->delete('/books/:id', function ($id) {
    //Delete book identified by $id
});

//Estes dois métodos não foram estudados no curso
/*
$app->options('/books/:id', function ($id) {
    //Return response headers
});

$app->patch('/books/:id', function ($id) {
    // Patch book with given ID
});
*/

$app->run ();
