<?php

/*
 * Fichier de variable global
 */

// Source Html/php dossier
const TEMPLATE_FOLDER = "templates";

// Information BDD
const HOST_BDD = "mysql:dbname=site-stic;host=127.0.0.1";
const LOGIN_BDD = "root";
const PWD_BDD = "root";

ConstanteArray::$config['COMPTE_ADMIN'] = array(
    "root" => "root",
);

// Site Disponible
ConstanteArray::$config['SITE_AVAILABLE'] = array(
    "miage",
    "2ibs"
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
    "nous-localiser" => 8,
    "telechargement" => 9,
);
