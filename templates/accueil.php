<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name='viewport' content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Accueil - <?php echo strtoupper($site); ?></title>
    <link rel="icon" type="image/png" href="assets/imgs/upjv.jpg" />
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/app_global.css">
    <link rel="stylesheet" href="assets/css/app_global_mobile.css">
    <link rel="stylesheet" href="assets/css/app_<?php echo $site; ?>.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top" id="header">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./<?php echo $site; ?>">
                        <?php if($site == "miage"){ ?>
                            <img src="assets/imgs/miage.png" width="150" alt="Miage"/>
                            <p style="font-size: 11px; margin-left: -7px;">Méthodes Informatiques Appliquées<br> à la Gestion des Entreprise</p>
                        <?php }elseif($site == "2ibs"){ ?>
                            <h1 id="titre_2IBS">2IBS</h1>
                            <p style="font-size: 11px; margin-left: -7px;">Informatique et Instrumentation pour<br> la Biologie et la Santé</p>
                        <?php } ?>
                    </a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="./<?php echo $site; ?>">Accueil</a></li>
                        <li><a href="./<?php echo $site; ?>/candidater">Candidater</a></li>
                        <li><a href="./<?php echo $site; ?>/contact">Contact</a></li>
                        <li><a href="./<?php echo $site; ?>/mentions-legales">Mentions Légales</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </header>

    <section class="container-fluid">
        <div class="row">
            <article class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar" id="sidebar-menu">
                    <li><a href="<?php echo $site; ?>/pedagogie"><i class="flaticon-graduation-cap2"></i> Pédagogie</a></li>
                    <li><a href="<?php echo $site; ?>/specialisations"><i class="flaticon-mark1"></i> Spécialisations</a></li>
                    <li><a href="<?php echo $site; ?>/professionnalisation"><i class="flaticon-briefcase69"></i> Professionnalisation</a></li>
                    <li><a href="<?php echo $site; ?>/debouches"><i class="flaticon-suitcase58"></i> Débouchés</a></li>
                    <li><a href="<?php echo $site; ?>/nous-localiser"><i class="flaticon-pin66"></i> Nous localiser</a></li>
                    <li><a href="<?php echo $site; ?>/telechargement"><i class="flaticon-downloading"></i> Téléchargement</a></li>
                </ul>

                <div id="content-img">
                    <img class="img-align" src="assets/imgs/upjv_<?php echo $site; ?>.png" alt="UPVJ Picardie" width="120">
                </div>

            </article>
            <article class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">
                    <?php if($site == "miage"){ ?>
                    Master Méthodes Informatiques Appliquées à la Gestion des Entreprise - Amiens
                    <?php }elseif($site == "2ibs"){ ?>
                    Informatique et Instrumentation pour la Biologie et la Santé - Amiens
                    <?php } ?>
                </h1>

                <div class="content">
                    <div class="row">
                        <?php for($i = 1; $i < 4; $i++){ ?>
                        <div class="col-md-4">
                            <div class="row box">
                                <div class="col-md-4">
                                    <div id="circle" style="border: 8px solid <?php echo $contentData['COLOR']['color'.$i] ?>"><p><?php echo $contentData['COLOR']['titre'.$i] ?></p></div>
                                </div>
                                <div class="col-md-8">
                                    <p><?php echo $contentData['COLOR']['text'.$i] ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                    <?php if(isset($contentData['BLOC'])){
                        echo $contentData['BLOC'];
                    } ?>

                    <?php if($site == "miage"){ ?>
                    <div class="row">
                        <div class="col-md-12 toggle" data-toggle="toggle">
                            <header>
                                <i class="flaticon-worldgrid"></i>
                                <span class="titre-toggle">Réseaux MIAGE en France</span>
                                <span class="arrow-toggle"><i class="flaticon-arrow483"></i></span>
                            </header>

                            <article class="row" id="toggle">
                                <div class="col-md-6">
                                    <img class="img-reponsive img-align" src="assets/imgs/e-miage.png" alt="e-miage">
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li style="color: #1F9ADC; font-weight: bold;">Amiens</li>
                                        <li>Aix-Marseille</li>
                                        <li>Bordeaux</li>
                                        <li>Grenoble</li>
                                        <li>Lille</li>
                                        <li>Lyon</li>
                                        <li>Rennes</li>
                                        <li>Toulouse</li>
                                        <li>Mulhouse</li>
                                        <li>Nancy</li>
                                        <li>Nantes</li>
                                        <li>Nice</li>
                                        <li>Paris et Ile-de-France <br> (7 universités)</li>
                                        <li>Orléans</li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </article>
        </div>
    </section>
</body>

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/css/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
</html>
