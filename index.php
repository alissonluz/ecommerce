<?php 

require_once("vendor/autoload.php"); //tras as dependencias do projetos o que o projeto precisa

use \Slim\Slim;
use \Hcode\Page;

$app = new Slim();   // sao namespaces --- carrega as classes que o projeto precisa

$app->config('debug', true);

$app->get('/', function(){

	$page = new Page();
	$page->setTpl("index");
});

$app->run();  /// tudo carregado -> roda o projeto

 ?>