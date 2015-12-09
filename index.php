<?php

// Chargement des librairies via composer
require 'vendor/autoload.php';
require 'app/BDD.php';
require 'app/ConstanteArray.php';

// fichier de variable d'environnement
include('app/variables.ini.php');

// Init Framework Slim
$app = new \Slim\Slim();

// Authentification HTTP pour l'espace Admin
$app->add(new \Slim\Middleware\HttpBasicAuthentication([
    "path" => "/admin",
    "realm" => "Connexion Administration Site STIC",
    "secure" => true,
    "relaxed" => ConstanteArray::$config['DOMAINE_OK'],
    "users" => ConstanteArray::$config['COMPTE_ADMIN']
]));

// config du mode debug et du dossier
// contenant les templates
$app->config(array(
    'debug' => true,
    'templates.path' => TEMPLATE_FOLDER
));

// Base de donnée
$app->ACCES_BASE = new BDD(HOST_BDD, LOGIN_BDD, PWD_BDD);
//$tmp = $app->ACCES_BASE->InsertBDD("test", ["name"=>'toto',"pwd"=>123]);

//////////////////////////////////////////////////////////////////////////

// gestion de la page 404
$app->notFound(function() use ($app) {
    $app->render('404.php');
});

//////////////////////////////////////////////////////////////////////////

// Accueil admin + gestion des formulaires
$app->get('/admin(/)(:site)(/)(:page)', function ($site = "", $page = "") use ($app) {

    if(!empty($page)){

        if(file_exists(TEMPLATE_FOLDER . '/admin/'. CONTENT_FOLDER . '/'. $page .'.php')){
            $app->render('admin/index.php', array('content' => '', 'page' => $page , 'site' => $site));
        }else{
            $app->notFound();
        }
    }else{
        $app->render('admin/index.php', array('page' => $page, 'site' => $site));
    }
});

$app->post('/admin/traitement/:site/:page', function ($site, $page) use ($app) {
    print_r($app->request()->post());
});

//////////////////////////////////////////////////////////////////////////

// Accueil miage / 2ibs
$app->get('/(:site)', function ($site = "miage") use ($app) {

    if(in_array($site, ConstanteArray::$config['SITE_AVAILABLE'])){

        $app->render('accueil.php', array('site' => $site));

    }else{
        $app->notFound();
    }
});


// Gestion Page interne au site
$app->get('/(:site)(/)(:page)', function ($site = "miage", $page) use ($app) {

    if(in_array($site, ConstanteArray::$config['SITE_AVAILABLE'])
        && file_exists(TEMPLATE_FOLDER . "/" . $page . ".php")){

        $app->render($page.'.php', array('site' => $site));

    }else{
        $app->notFound();
    }

});

$app->run();
