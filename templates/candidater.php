<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name='viewport' content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Candidater - <?php echo strtoupper($site); ?></title>
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
                            <p style="font-size: 11px">Méthodes Informatiques Appliquées<br> à la Gestion des Entreprise</p>
                        <?php }elseif($site == "2ibs"){ ?>
                            <h1 id="titre_2IBS">2IBS</h1>
                            <p style="font-size: 11px">Informatique et Instrumentation pour<br> la Biologie et la Santé</p>
                        <?php } ?>
                    </a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="../<?php echo $site; ?>">Accueil</a></li>
                        <li class="active"><a href="../<?php echo $site; ?>/candidater">Candidater</a></li>
                        <li><a href="../<?php echo $site; ?>/contact">Contact</a></li>
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
                    <li><a href="../<?php echo $site; ?>/nous-localiser"><i class="flaticon-pin66"></i> Nous localiser</a></li>
                    <li><a href="../<?php echo $site; ?>/telechargement"><i class="flaticon-downloading"></i> Téléchargement</a></li>
                </ul>

                <div id="content-img">
                    <img class="img-align" src="../assets/imgs/upjv.jpg" alt="UPVJ Picardie" width="120">
                </div>

            </article>
            <article class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">
                    Cadidater
                </h1>

                <div class="content">
                    <div class="row">
                        <div class="col-md-12 toggle">
                            <header>
                                <i class="flaticon-worldgrid"></i>
                            </header>

                            <article>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad deleniti, doloremque eos ex illum incidunt laudantium minus molestiae nam omnis placeat quos tempora vel voluptas. Atque doloremque nostrum veritatis?
                            </article>
                        </div>
                    </div>

                </div>
            </article>
        </div>
    </section>
</body>

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/css/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
</html>
