<?php

// Chargement des librairies via composer
require 'vendor/autoload.php';
require 'app/BDD.php';

// Source Html
const TEMPLATE_FOLDER = "templates";
// Base de donnée
$ACCES_BASE = new BDD('mysql:dbname=site-miage;host=127.0.0.1', 'root', 'root');
//$tmp = $ACCES_BASE->InsertBDD("test", ["name"=>'toto',"pwd"=>123]);

// Init Framework Slim
$app = new \Slim\Slim();

// config du mode debug et du dossier
// contenant les templates
$app->config(array(
    'debug' => true,
    'templates.path' => TEMPLATE_FOLDER
));

//////////////////////////////////////////////////////////////////////////

// Accueil
$app->get('/', function () use ($app) {
    $app->render('main.php');
});

// gestion de la page 404
$app->notFound(function() use ($app) {
    $app->render('404.php');
});

$app->run();
