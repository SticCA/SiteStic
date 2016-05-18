<?php if(empty($page)){ $directory = "./"; }else{ $directory = "../"; } ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name='viewport' content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Administration des Sites</title>
    <link rel="icon" type="image/png" href="<?php echo $directory; ?>assets/imgs/upjv.jpg" />
    <link rel="stylesheet" href="<?php echo $directory; ?>assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $directory; ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo $directory; ?>assets/css/app_admin.css">
</head>
<body>

<section class="container-fluid">
    <div class="row">
        <article class="col-sm-3 col-md-2 sidebar">

            <div class="mediatheque">
                <a class="btn btn-info" href="<?php echo $directory; ?>admin/mediatheque">Médiathèque</a>
            </div>

            <ul id="myTabs" class="nav nav-tabs" role="tablist">
                <li id="role_miage" role="presentation" class="<?php if($site == "miage") {?>active<?php } ?>">
                    <a href="#miage" id="miage-tab" role="tab" data-toggle="tab" aria-controls="miage" aria-expanded="true">MIAGE</a>
                </li>
                <li id="role_2ibs" role="presentation" class="<?php if($site == "2ibs") {?>active<?php } ?>">
                    <a href="#2ibs" role="tab" id="2ibs-tab" data-toggle="tab" aria-controls="2ibs" aria-expanded="false">2IBS</a>
                </li>
            </ul>

            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade <?php if($site == "miage") {?>active in<?php } ?>" id="miage" aria-labelledby="miage-tab">
                    <ul class="nav nav-sidebar">
                        <li class="<?php if($site == "miage" && $page == "accueil") {?>active<?php } ?>"><a href="<?php echo $directory; ?>admin/miage/accueil">Accueil</a></li>
                        <li class="<?php if($site == "miage" && $page == "candidater") {?>active<?php } ?>"><a href="<?php echo $directory; ?>admin/miage/candidater">Candidater</a></li>
                        <li class="<?php if($site == "miage" && $page == "contact") {?>active<?php } ?>"><a href="<?php echo $directory; ?>admin/miage/contact">Contact</a></li>
                        <li class="<?php if($site == "miage" && $page == "pedagogie") {?>active<?php } ?>"><a href="<?php echo $directory; ?>admin/miage/pedagogie">Pédagogie</a></li>
                        <li class="<?php if($site == "miage" && $page == "specialisations") {?>active<?php } ?>"><a href="<?php echo $directory; ?>admin/miage/specialisations">Spécialisations</a></li>
                        <li class="<?php if($site == "miage" && $page == "professionnalisation") {?>active<?php } ?>"><a href="<?php echo $directory; ?>admin/miage/professionnalisation">Professionnalisation</a></li>
                        <li class="<?php if($site == "miage" && $page == "debouches") {?>active<?php } ?>"><a href="<?php echo $directory; ?>admin/miage/debouches">Débouchés</a></li>
                        <li class="<?php if($site == "miage" && $page == "telechargement") {?>active<?php } ?>"><a href="<?php echo $directory; ?>admin/miage/telechargement">Téléchargement</a></li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade <?php if($site == "2ibs") {?>active in<?php } ?>" id="2ibs" aria-labelledby="2ibs-tab">
                    <ul class="nav nav-sidebar">
                        <li class="<?php if($site == "2ibs" && $page == "accueil") {?>active<?php } ?>"><a href="<?php echo $directory; ?>admin/2ibs/accueil">Accueil</a></li>
                        <li class="<?php if($site == "2ibs" && $page == "candidater") {?>active<?php } ?>"><a href="<?php echo $directory; ?>admin/2ibs/candidater">Candidater</a></li>
                        <li class="<?php if($site == "2ibs" && $page == "contact") {?>active<?php } ?>"><a href="<?php echo $directory; ?>admin/2ibs/contact">Contact</a></li>
                        <li class="<?php if($site == "2ibs" && $page == "pedagogie") {?>active<?php } ?>"><a href="<?php echo $directory; ?>admin/2ibs/pedagogie">Pédagogie</a></li>
                        <li class="<?php if($site == "2ibs" && $page == "specialisations") {?>active<?php } ?>"><a href="<?php echo $directory; ?>admin/2ibs/specialisations">Spécialisations</a></li>
                        <li class="<?php if($site == "2ibs" && $page == "professionnalisation") {?>active<?php } ?>"><a href="<?php echo $directory; ?>admin/2ibs/professionnalisation">Professionnalisation</a></li>
                        <li class="<?php if($site == "2ibs" && $page == "debouches") {?>active<?php } ?>"><a href="<?php echo $directory; ?>admin/2ibs/debouches">Débouchés</a></li>
                        <li class="<?php if($site == "2ibs" && $page == "telechargement") {?>active<?php } ?>"><a href="<?php echo $directory; ?>admin/2ibs/telechargement">Téléchargement</a></li>
                    </ul>
                </div>
            </div>

            <div id="content-img">
                <img class="img-align" src="<?php echo $directory; ?>assets/imgs/upjv_miage.png" alt="UPVJ Picardie" width="120">
            </div>

        </article>
        <article class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Médiathèque</h1>

            <div class="content">

                <?php
                if($flash['info']) {
                    echo "<blockquote class='info'><p>" . $flash['info'] . "</p></blockquote>";
                }
                if($flash['erreur']) {
                    echo "<blockquote class='erreur'><p>" . $flash['erreur'] . "</p></blockquote>";
                }
                ?>

                <form style="float: right; margin-right: 45%;" method="post" enctype="multipart/form-data" action="../admin/mediatheque/add">
                    <label class="control-label">Ajout Document</label>
                    <input name="doc" type="file" accept="application/pdf" required><br>
                    <input type="submit" class="btn btn-info" value="Ajouter">
                </form>


                <form method="post" enctype="multipart/form-data" action="../admin/mediatheque/add">
                    <label class="control-label">Ajout Image</label>
                    <input name="img" type="file" accept="image/*" required><br>
                    <input type="submit" class="btn btn-info" value="Ajouter">
                </form>
                <br>

                <ul id="myTabs" class="nav nav-tabs" role="tablist">
                    <li id="role_image" role="presentation" class="active">
                        <a href="#image" id="image-tab" role="tab" data-toggle="tab" aria-controls="image" aria-expanded="true">Images</a>
                    </li>
                    <li id="role_doc" role="presentation">
                        <a href="#doc" role="tab" id="doc-tab" data-toggle="tab" aria-controls="doc" aria-expanded="false">Documents</a>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="image" aria-labelledby="image-tab">
                        <?php
                        $dir = "files/imgs";
                        if (is_dir($dir)) {
                            $direc = opendir($dir);
                            while ($file = readdir($direc)) {
                                if (is_file("$dir/$file") && getimagesize("$dir/$file") != FALSE) {
                                    $link = $dir.'/'.$file;
                                    echo '
                                    <div class="media-aff col-md-2" >
                                        <div class="control-img">
                                            <img src="../'.$link.'">
                                        </div>
                                        <div class="control-btn">
                                            <a href="#del" onclick="del(\'../admin/mediatheque/delete/imgs/'.urlencode($file).'\', \'cette image\')" class="btn btn-danger">Supprimer</a>
                                        </div>
                                    </div>
                                    ';
                                }
                            }
                            closedir($direc);
                        }
                        ?>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="doc" aria-labelledby="doc-tab">
                        <?php
                        $dir = "files/docs";
                        if (is_dir($dir)) {
                            $direc = opendir($dir);
                            while ($file = readdir($direc)) {
                                if (is_file("$dir/$file")) {
                                    echo '
                                    <div class="media-aff col-md-2" >
                                        <div class="control-doc">
                                            '.substr($file,0,20).'
                                        </div>
                                        <div class="control-btn">
                                            <a href="#del" onclick="del(\'../admin/mediatheque/delete/docs/'.urlencode($file).'\', \'ce document\')" class="btn btn-danger">Supprimer</a>
                                        </div>
                                    </div>
                                    ';
                                }
                            }
                            closedir($direc);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
</body>

<script type="text/javascript" src="<?php echo $directory; ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $directory; ?>assets/css/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $directory; ?>assets/js/app_admin.js"></script>
</html>
