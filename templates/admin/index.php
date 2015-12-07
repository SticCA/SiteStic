<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name='viewport' content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Administration des Sites</title>
    <link rel="icon" type="image/png" href="assets/imgs/upjv.jpg" />
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/app_admin.css">
</head>
<body>

<section class="container-fluid">
    <div class="row">
        <article class="col-sm-3 col-md-2 sidebar">

            <p>Choisir le site :</p>
            <select name="site">
                <option value="">Choisissez ...</option>
                <option value="1">MIAGE</option>
                <option value="2">2IBS</option>
            </select>

            <!--div id="content-img">
                <img class="img-align" src="assets/imgs/upjv.jpg" alt="UPVJ Picardie" width="120">
            </div-->

        </article>
        <article class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Administration</h1>

            <div class="content"></div>
        </article>
    </div>
</section>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/css/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/app_admin.js"></script>
</html>
