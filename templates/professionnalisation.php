<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name='viewport' content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Profésionnalisation - <?php echo strtoupper($site); ?></title>
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
                    <li class="active"><a href="../<?php echo $site; ?>/professionnalisation"><i class="flaticon-briefcase69"></i> Professionnalisation</a></li>
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
                    Profésionnalisation
                </h1>

                <div class="content">

                    <div class="row">
                        <div class="col-md-12 toggle" data-toggle="toggleStat">
                            <header>
                                <img src="../assets/imgs/pie-chart.png" width="40px" style="margin: 3px 3px 5px 15px;">
                                <span class="titre-toggle" style="top: 5px;">Statistiques</span>
                            </header>

                            <article class="row" id="toggleStat">
                                <div class="col-md-6">
                                    <h3>Répartition des alternants par secteur :</h3>
                                    <div id="graph1"></div>
                                </div>
                                <div class="col-md-6">
                                    <h3>Répartition des alternants par region :</h3>
                                    <div id="graph2"></div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <?php if(isset($contentData['BLOC'])){
                        echo $contentData['BLOC'];
                    } ?>

                </div>
            </article>
        </div>
    </section>
</body>

    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
    <script src="../assets/js/morris/morris.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>
    <script type="text/javascript" src="../assets/css/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/app.js"></script>

    <script type="text/javascript">
        Morris.Donut({
            element: 'graph1',
            data: [
                <?php for($i=5; $i < 10; $i++) {?>
                {value: <?php echo $contentData['STAT'][$i][2]; ?>, label: '<?php echo $contentData['STAT'][$i][0]; ?>'}<?php if($i != 3) echo ","; ?>
                <?php } ?>
            ],
            backgroundColor: '#ccc',
            <?php if($site == "2ibs") {?>
            labelColor: '#060',
            colors: [
                '#0BA462',
                '#39B580',
                '#67C69D',
                '#95D7BB'
            ],
            <?php } ?>
            formatter: function (x) { return x + "%"}
        });

        Morris.Donut({
            element: 'graph2',
            data: [
                <?php for($i=0; $i < 4; $i++) {?>
                {value: <?php echo $contentData['STAT'][$i][2]; ?>, label: '<?php echo $contentData['STAT'][$i][0]; ?>'}<?php if($i != 3) echo ","; ?>
                <?php } ?>
            ],
            backgroundColor: '#ccc',
            <?php if($site == "2ibs") {?>
            labelColor: '#060',
            colors: [
                '#0BA462',
                '#39B580',
                '#67C69D',
                '#95D7BB'
            ],
            <?php } ?>
            formatter: function (x) { return x + "%"}
        });
    </script>

</html>
