<?php
$chemin = array_filter(explode("/", $_SERVER['REQUEST_URI']));

if(sizeof($chemin) > 2){
    $directory = "..";
}else{
    $directory = ".";
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name='viewport' content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Erreur 404 !</title>
    <link rel="icon" type="image/png" href="<?php echo $directory;?>assets/imgs/upjv.jpg" />
    <style>
        body{
            background-color: #ecf0f1;
        }
    </style>
</head>
<body>
    <section>
        <p>404</p>
        <ul>
            <li><a href="<?php echo $directory;?>/miage">Retour sur le site du Master MIAGE</a></li>
            <li><a href="<?php echo $directory;?>/2ibs">Retour sur le site du Master 2IBS</a></li>
        </ul>
    </section>
</body>
</html>
