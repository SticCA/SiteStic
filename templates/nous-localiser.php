<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name='viewport' content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Nous Localiser - <?php echo strtoupper($site); ?></title>
    <link rel="icon" type="image/png" href="../assets/imgs/upjv.jpg" />
    <link rel="stylesheet" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/app_global.css">
    <link rel="stylesheet" href="../assets/css/app_global_mobile.css">
    <link rel="stylesheet" href="../assets/css/app_<?php echo $site; ?>.css">
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
                    <a class="navbar-brand" href="../<?php echo $site; ?>">
                        <?php if($site == "miage"){ ?>
                            <img src="../assets/imgs/miage.png" width="150" alt="Miage"/>
                            <p style="font-size: 11px; margin-left: -7px;">Méthodes Informatiques Appliquées<br> à la Gestion des Entreprise</p>
                        <?php }elseif($site == "2ibs"){ ?>
                            <h1 id="titre_2IBS">2IBS</h1>
                            <p style="font-size: 11px; margin-left: -7px;">Informatique et Instrumentation pour<br> la Biologie et la Santé</p>
                        <?php } ?>
                    </a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="../<?php echo $site; ?>">Accueil</a></li>
                        <li><a href="../<?php echo $site; ?>/candidater">Candidater</a></li>
                        <li><a href="../<?php echo $site; ?>/contact">Contact</a></li>
                        <li><a href="../<?php echo $site; ?>/mentions-legales">Mentions Légales</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </header>

    <section class="container-fluid">
        <div class="row">
            <article class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar" id="sidebar-menu">
                    <li><a href="../<?php echo $site; ?>/pedagogie"><i class="flaticon-graduation-cap2"></i> Pédagogie</a></li>
                    <li><a href="../<?php echo $site; ?>/specialisations"><i class="flaticon-mark1"></i> Spécialisations</a></li>
                    <li><a href="../<?php echo $site; ?>/professionnalisation"><i class="flaticon-briefcase69"></i> Professionnalisation</a></li>
                    <li><a href="../<?php echo $site; ?>/debouches"><i class="flaticon-suitcase58"></i> Débouchés</a></li>
                    <li class="active"><a href="../<?php echo $site; ?>/nous-localiser"><i class="flaticon-pin66"></i> Nous localiser</a></li>
                    <li><a href="../<?php echo $site; ?>/telechargement"><i class="flaticon-downloading"></i> Téléchargement</a></li>
                </ul>

                <div id="content-img">
                    <img class="img-align" src="../assets/imgs/upjv_<?php echo $site; ?>.png" alt="UPVJ Picardie" width="120">
                </div>

            </article>
            <article class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">
                    Nous Localiser
                </h1>

                <div class="content">

                    <div class="row">
                        <div class="col-md-12 toggle" data-toggle="toggle1">
                            <header>
                                <i class="flaticon-pin66"></i>
                                <span class="titre-toggle">Contact</span>
                                <span class="arrow-toggle"><i class="flaticon-arrow483"></i></span>
                            </header>

                            <article class="row" id="toggle1">
                                <div class="col-md-12">
                                    <p>Accueil téléphonique : <a href="tel:0322828802">03-22-82-88-02</a></p>
                                    <p>Un guichet mail unique et nous vous redirigeons vers le bon interlocuteur : <a href="mailto:<?php echo $site; ?>@u-picardie.fr"><?php echo $site; ?>@u-picardie.fr</a></p>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 toggle" data-toggle="toggle2">
                            <header>
                                <i class="flaticon-pin66"></i>
                                <span class="titre-toggle">Localisation</span>
                                <span class="arrow-toggle"><i class="flaticon-arrow483"></i></span>
                            </header>

                            <article class="row" id="toggle2">
                                <div class="col-md-6">
                                    <a href="#location" onclick="locationUPJV();">
                                        <img style="width: 100%; height: auto;" src="../assets/imgs/plan.jpg" alt="location">
                                    </a>
                                </div>
                                <div class="col-md-6">

                                    <p style="font-size: 20px; margin-top: 25%; text-align: center;">Master <?php echo strtoupper($site); ?><br>

                                    UFR des Sciences<br>
                                    Bâtiment F<br>
                                    33, rue Saint Leu<br>
                                    80039 Amiens Cedex 1</p>
                                </div>
                            </article>
                        </div>
                    </div>

                </div>
            </article>
        </div>
    </section>
</body>

    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/css/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/app.js"></script>
</html>
