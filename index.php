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

//////////////////////////////////////////////////////////////////////////

// gestion de la page 404
$app->notFound(function() use ($app) {
    $app->render('404.php');
});

//////////////////////////////////////////////////////////////////////////

// Accueil admin + gestion des formulaires
$app->get('/admin(/)(:site)(/)(:page)', function ($site = "", $page = "") use ($app) {

    if(!empty($page)){

        if(in_array($page, ConstanteArray::$config['PAGE_AVAILABLE'])){

            $SITE_ID = ConstanteArray::$config['SITE_ID'][$site];
            $PAGE_ID = ConstanteArray::$config['PAGE_SITE_ID'][$page];

            // select des infos deja presentes
            $contentData = $app->ACCES_BASE->SelectBDD('page_content', $SITE_ID, $PAGE_ID);

            $app->render('admin/index.php', array('contentData' => $contentData, 'page' => $page , 'site' => $site));
        }else{
            $app->notFound();
        }
    }else{
        $app->render('admin/index.php', array('page' => $page, 'site' => $site));
    }
});

$app->post('/admin/traitement/:site/:page', function ($site, $page) use ($app) {

    $data = $app->request()->post();
    $data['SITE_ID'] = ConstanteArray::$config['SITE_ID'][$site];
    $data['PAGE_ID'] = ConstanteArray::$config['PAGE_SITE_ID'][$page];

    // delete des infos deja presentes
    $app->ACCES_BASE->DeleteBDD('page_content', $data['SITE_ID'], $data['PAGE_ID']);

    if(isset($data['titre']) && isset($data['text'])) {
        $dataBloc['titre'] = $data['titre'];
        $dataBloc['text'] = $data['text'];
        unset($data['titre']);
        unset($data['text']);

        // enregistrement des blocs
        for($i = 0; $i < sizeof($dataBloc['titre']); $i++){

            $params = array(
                'SITE_ID' => $data['SITE_ID'],
                'PAGE_ID' => $data['PAGE_ID'],
                'ZONE_TITRE_BLOC' => $dataBloc['titre'][$i],
                'ZONE_TEXT_BLOC' => $dataBloc['text'][$i]
            );

            $app->ACCES_BASE->InsertBDD('page_content', $params);
        }

    }

    // enregistrement des 3 bloc couleur
    if($page == "accueil"){
        $app->ACCES_BASE->InsertBDD('page_content', $data);
    }

    $app->redirect("../../../admin/$site/$page");

});

//////////////////////////////////////////////////////////////////////////

// Accueil miage / 2ibs
$app->get('/(:site)', function ($site = "miage") use ($app) {

    if(in_array($site, ConstanteArray::$config['SITE_AVAILABLE'])){

        $SITE_ID = ConstanteArray::$config['SITE_ID'][$site];
        $PAGE_ID = ConstanteArray::$config['PAGE_SITE_ID']["accueil"];

        // select des infos deja presentes
        $contentData = $app->ACCES_BASE->SelectBDD('page_content', $SITE_ID, $PAGE_ID);

        $app->render('accueil.php', array('site' => $site, 'contentData' => $contentData));

    }else{
        $app->notFound();
    }
});


// Gestion Page interne au site
$app->get('/(:site)(/)(:page)', function ($site = "miage", $page) use ($app) {

    if(in_array($site, ConstanteArray::$config['SITE_AVAILABLE'])
        && file_exists(TEMPLATE_FOLDER . "/" . $page . ".php")) {

        if ($page != "nous-localiser") {

            $SITE_ID = ConstanteArray::$config['SITE_ID'][$site];
            $PAGE_ID = ConstanteArray::$config['PAGE_SITE_ID'][$page];

            // select des infos deja presentes
            $contentData = $app->ACCES_BASE->SelectBDD('page_content', $SITE_ID, $PAGE_ID);
        }else{
            $contentData = array();
        }

        $app->render($page.'.php', array('site' => $site, 'contentData' => $contentData));

    }else{
        $app->notFound();
    }

});

$app->run();
