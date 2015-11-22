<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name='viewport' content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/ionicons-1.5.2/css/ionicons.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<header>
    <div class="logo">
        <i class="ion-code-working"></i>
        <p>Learn <strong>Dev</strong></p>
    </div>
    <div class="header-content" id="header-content">
        <div class="breadcrumb" id="breadcrumb">
            <div class="br-content">
                        <span class="home">
                            <a href="#">DASHBOARD</a>
                        </span>
                <span class="path-divider">/</span>
                        <span class="link">
                            <a href="#">Utilisateurs</a>
                        </span>
                <span class="path-divider">/</span>
                        <span class="text">
                            <p>Ajout d'un utilisateur</p>
                        </span>
            </div>
        </div>
        <div class="search-form">
            <form action="#">
                <input type="text" name="search" class="search-input" id="search-input">
                <button type="submit" id="search-responsive">
                    <i class="ion-search"></i>
                </button>
                <button type="submit" id="search-close">
                    <i class="ion-close-round"></i>
                </button>
            </form>
        </div>
        <div class="account" id="account">
            <img src="assets/img/avatar.jpg" alt="">
            <i class="ion-chevron-down" id='ico-account'></i>
        </div>
        <div class="topmenu hide" id="topbar-menu">
            <a href=""><i class="ion-person"></i> Mes informations</a>
            <a href=""><i class="ion-briefcase"></i> Mon entreprise</a>
            <a href=""><i class="ion-power"></i> Se deconnecter</a>
        </div>
    </div>
</header>
<div class="nav-button-responsive" id="nav-button-responsive">
    <i class="ion-navicon-round"></i>
</div>
<div class="nav" id="nav">
    <div class="menu">
        <a href="#">
            <i class="ion-home"></i> <span>Dashboard</span>
        </a>
    </div>
    <div class="submenu" id="submenu">
        <a href="#"><i class="ion-person"><span>Utilisateurs</span></i> <i class="ion-chevron-right right" id="icon"></i></a>
        <div class="sub-content hide" id="sub-content">
            <a href="#"> Ajouter un utilisateur</a>
            <a href="#"> Statistiques</a>
        </div>
    </div>
    <div class="submenu" id="submenu">
        <a href="#"><i class="ion-email"></i><span> Messages </span><i class="ion-chevron-right right " id="icon"></i></a>
        <div class="sub-content hide" id="sub-content">
            <a href="#"> Nouveau message</a>
            <a href="#"> Messages reçus</a>
            <a href="#"> Messages envoyés</a>
        </div>
    </div>
</div>
<div class="content">
    <p>Page Introuvable 404 !</p>
</div>
<div class="footer">
    <div class="company">
        <a href="#"><i class="ion-code-working"></i>
            Learn <strong>Dev</strong></a>
    </div>
    <div class="link">
        <a href="">A propos</a>
        <div class="separator">|</div>
        <a href="">Aide</a>
        <div class="separator">|</div>
        <a href="">Feedback</a>
        <div class="separator">|</div>
        <a href="">Conditions</a>
        <div class="separator">|</div>
        <a href="">Mentions</a>
    </div>
</div>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
</html>
