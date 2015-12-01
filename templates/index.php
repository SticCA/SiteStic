<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name='viewport' content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/app_<?php echo $site; ?>.css">
    <link rel="stylesheet" href="assets/css/app_global.css">
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
                            <p style="font-size: 11px">Méthodes Informatiques Appliquées<br> à la Gestion des Entreprise</p>
                        <?php }elseif($site == "2ibs"){ ?>
                            <h1 id="titre_2IBS">2IBS</h1>
                            <p style="font-size: 11px">Informatique et Instrumentation pour<br> la Biologie et la Santé</p>
                        <?php } ?>
                    </a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Accueil</a></li>
                        <li><a href="#about">Candidater</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </header>

    <section class="container-fluid">
        <div class="row">
            <article class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar" id="sidebar-menu">
                    <li class="active"><a href="#"><i class="flaticon-graduation-cap2"></i> Pédagogie</a></li>
                    <li><a href="#"><i class="flaticon-mark1"></i> Spécialisations</a></li>
                    <li><a href="#"><i class="flaticon-briefcase69"></i> Professionnalisation</a></li>
                    <li><a href="#"><i class="flaticon-suitcase58"></i> Débouchés</a></li>
                    <li><a href="#"><i class="flaticon-pin66"></i> Nous localiser</a></li>
                    <li><a href="#"><i class="flaticon-downloading"></i> Téléchargement</a></li>
                </ul>

                <div id="content-img">
                    <img class="img-align" src="assets/imgs/upjv.jpg" alt="UPVJ Picardie" width="120">
                </div>

            </article>
            <article class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Master Méthodes Informatiques Appliquées à la Gestion des Entreprise - Amiens</h1>

                <div class="content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row box">
                                <div class="col-md-4">
                                    <div id="circle" style="border: 8px solid #1F9ADC;"><p>BAC +5</p></div>
                                </div>
                                <div class="col-md-8">
                                    <p>Formation universitaire française de niveau Bac +5</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row box">
                                <div class="col-md-4">
                                    <div id="circle" style="border: 8px solid #E8902C;"><p>x2</p></div>
                                </div>
                                <div class="col-md-8">
                                    <p>Double compétence en informatique et en gestion</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row box">
                                <div class="col-md-4">
                                    <div id="circle" style="border: 8px solid #4CC65E;"><p>20</p></div>
                                </div>
                                <div class="col-md-8">
                                    <p>20 semaines de présence en entreprise par an</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad deleniti, doloremque eos ex illum incidunt laudantium minus molestiae nam omnis placeat quos tempora vel voluptas. Atque doloremque nostrum veritatis?
                        </div>
                    </div>

                </div>
            </article>
        </div>
    </section>
</body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/css/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
</html>