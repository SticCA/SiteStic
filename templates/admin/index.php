<?php if(empty($page)){ $directory = "./"; }else{ $directory = "../../"; } ?>
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
    <script type="text/javascript" src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea',
            height: 300,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
            toolbar2: 'link image | forecolor backcolor emoticons',
            image_advtab: true,
            templates: [
                { title: 'Test template 1', content: 'Test 1' },
                { title: 'Test template 2', content: 'Test 2' }
            ],
            image_list: [
                {title: 'Logo UPJV', value: '../../assets/imgs/upjv.jpg'},
                {title: 'Plan UPJV', value: '../../assets/imgs/plan.jpg'}
            ],
            //external_image_list_url : "myexternallist.js",
            content_css: [
                '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });
    </script>
</head>
<body>

<section class="container-fluid">
    <div class="row">
        <article class="col-sm-3 col-md-2 sidebar">

            <ul id="myTabs" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="<?php if($site == "miage") {?>active<?php } ?>">
                    <a href="#miage" id="miage-tab" role="tab" data-toggle="tab" aria-controls="miage" aria-expanded="true">MIAGE</a>
                </li>
                <li role="presentation" class="<?php if($site == "2ibs") {?>active<?php } ?>">
                    <a href="#2ibs" role="tab" id="2ibs-tab" data-toggle="tab" aria-controls="2ibs" aria-expanded="false">2IBS</a>
                </li>
            </ul>

            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade <?php if($site == "miage") {?>active in<?php } ?>" id="miage" aria-labelledby="miage-tab">
                    <ul class="nav nav-sidebar">
                        <li class="<?php if($site == "miage" && $page == "accueil") {?>active<?php } ?>"><a href="<?php echo $directory; ?>admin/miage/accueil">Accueil</a></li>
                        <li class="<?php if($site == "miage" && $page == "") {?>active<?php } ?>"><a href="#">Candidater</a></li>
                        <li class="<?php if($site == "miage" && $page == "") {?>active<?php } ?>"><a href="#">Contact</a></li>
                        <li class="<?php if($site == "miage" && $page == "") {?>active<?php } ?>"><a href="#">Pédagogie</a></li>
                        <li class="<?php if($site == "miage" && $page == "") {?>active<?php } ?>"><a href="#">Spécialisations</a></li>
                        <li class="<?php if($site == "miage" && $page == "") {?>active<?php } ?>"><a href="#">Professionnalisation</a></li>
                        <li class="<?php if($site == "miage" && $page == "") {?>active<?php } ?>"><a href="#">Débouchés</a></li>
                        <li class="<?php if($site == "miage" && $page == "") {?>active<?php } ?>"><a href="#">Nous localiser</a></li>
                        <li class="<?php if($site == "miage" && $page == "") {?>active<?php } ?>"><a href="#">Téléchargement</a></li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade <?php if($site == "2ibs") {?>active in<?php } ?>" id="2ibs" aria-labelledby="2ibs-tab">
                    <ul class="nav nav-sidebar">
                        <li><a href="<?php echo $directory; ?>admin/2ibs/accueil">Accueil</a></li>
                        <li><a href="#">Candidater</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Pédagogie</a></li>
                        <li><a href="#">Spécialisations</a></li>
                        <li><a href="#">Professionnalisation</a></li>
                        <li><a href="#">Débouchés</a></li>
                        <li><a href="#">Nous localiser</a></li>
                        <li><a href="#">Téléchargement</a></li>
                    </ul>
                </div>
            </div>

            <div id="content-img">
                <img class="img-align" src="<?php echo $directory; ?>assets/imgs/upjv.jpg" alt="UPVJ Picardie" width="120">
            </div>

        </article>
        <article class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Administration <?php if($site) echo ucfirst($page) . " - " . strtoupper($site) ?></h1>

            <div class="content">
                <?php if(empty($page)){ ?><p id="info">Sélectionnez un site et une page pour continuer ...</p><?php }else{ ?>
                <?php include('content/'.$page.'.php'); } ?>
            </div>
        </article>
    </div>
</section>
</body>

<script type="text/javascript" src="<?php echo $directory; ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $directory; ?>assets/css/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $directory; ?>assets/js/app_admin.js"></script>
</html>
