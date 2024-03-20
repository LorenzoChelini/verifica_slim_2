<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
spl_autoload_register(function ($class) {
    if(file_exists("./$class.php"))
        require_once("$class.php");
    if(file_exists("./controllers/$class.php"))
        require_once("./controllers/$class.php");
});

$app = AppFactory::create();

$app->addBodyParsingMiddleware();

$app->get('/', 'SiteController:index');
$app->get('/articoli','NegozioController:articoli');
$app->get('/articoli/{id}','NegozioController:articoliConID');

$app->get('/ordini','NegozioController:ordini');

$app->run();


?>