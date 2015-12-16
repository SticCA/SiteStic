<?php

/*
 * Fichier de variable global
 */

// Source Html/php dossier
const TEMPLATE_FOLDER = "templates";
const CONTENT_FOLDER = "content";

// Information BDD
const HOST_BDD = "mysql:dbname=site-stic;host=127.0.0.1";
const LOGIN_BDD = "root";
const PWD_BDD = "root";

ConstanteArray::$config['COMPTE_ADMIN'] = array(
    "root" => "root",
);

ConstanteArray::$config['DOMAINE_OK'] = array(
    "localhost",
    "local.dev",
    "192.168.0.30",
);

// Site Disponible
ConstanteArray::$config['SITE_AVAILABLE'] = array(
    "miage",
    "2ibs"
);

ConstanteArray::$config['PAGE_AVAILABLE'] = array(
    "accueil",
    "candidater",
    "contact",
    "pedagogie",
    "specialisations",
    "professionnalisation",
    "debouches",
    "telechargement"
);

// Site ID
ConstanteArray::$config['SITE_ID'] = array(
    "miage" => 1,
    "2ibs" => 2,
);

// page du site avec leur id
ConstanteArray::$config['PAGE_SITE_ID'] = array(
    "accueil" => 1,
    "candidater" => 2,
    "contact" => 3,
    "pedagogie" => 4,
    "specialisations" => 5,
    "professionnalisation" => 6,
    "debouches" => 7,
    "telechargement" => 9,
);
