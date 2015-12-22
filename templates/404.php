<?php
$chemin = array_filter(explode("/", $_SERVER['REQUEST_URI']));

$directory = "";

if(sizeof($chemin) < 2){
    $directory = "./";
}

for($i = 1; $i < sizeof($chemin) - 1; $i++){
    $directory .= "../";
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name='viewport' content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Erreur 404 !</title>
    <link rel="icon" type="image/png" href="<?php echo $directory;?>assets/imgs/upjv.jpg" />
    <link rel="stylesheet" href="<?php echo $directory;?>assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $directory;?>assets/css/app_global.css">
    <style>
        body{ background-color: #ecf0f1;}
        section{ margin-top: 15%; }
        p, ul{ text-align: center; font-size: 2em;}
        p#titre{ font-size: 5em; }
        ul{ margin-top: 3%; }
        ul li{ text-decoration: none; list-style: none; margin-top: 1%; }
        a.btn{ font-size: 20px;}
    </style>
</head>
<body class="row">
    <section class="col-md-12">
        <p id="titre">Erreur 404 <br> Page Introuvable</p>
        <p>Vous etes perdus ? <br> Retrouvez votre chemin vers l'un de ces deux site.</p>
        <ul>
            <li><a href="<?php echo $directory;?>miage" class="btn btn-info">Site du Master MIAGE</a></li>
            <li><a href="<?php echo $directory;?>2ibs" class="btn btn-success">Site du Master 2IBS</a></li>
        </ul>
    </section>
</body>
</html>
