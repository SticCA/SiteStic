<?php

// Chargement des librairies via composer
require 'vendor/autoload.php';
require 'app/BDD.php';
require 'app/ConstanteArray.php';

// fichier de variable d'environnement
include('app/variable.ini.php');

// Base de donnée
$ACCES_BASE = new BDD(HOST_BDD, LOGIN_BDD, PWD_BDD);
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

// gestion de la page 404
$app->notFound(function() use ($app) {
    $app->render('404.php');
});

// Accueil admin
$app->get('/admin', function () use ($app) {
    $app->render('admin/index.php');
});

// Accueil miage / 2ibs
$app->get('/(:site)', function ($site = "miage") use ($app) {

    if(in_array($site, ConstanteArray::getArray('SITE_AVAILABLE'))){
        $app->render('index.php', array('site' => $site));
    }else{
        $app->notFound();
    }
});


$app->run();
