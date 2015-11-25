<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name='viewport' content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
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
                <ul class="nav nav-sidebar">
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis auctor leo, vel blandit elit. Phasellus id dolor eu purus scelerisque tristique eu ac mi. Proin eu sem enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis a semper erat. Phasellus ultricies velit quis arcu viverra, vitae bibendum lectus ultricies. Curabitur volutpat congue nisi ut aliquam. Duis luctus quis erat a sodales.</p>
                    <p>Sed euismod purus quis ante mollis ornare. Etiam euismod purus quis dui iaculis pulvinar. Maecenas placerat nisl in nulla egestas facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis sagittis vehicula augue sed aliquet. Vivamus semper, sem vel vulputate dictum, lectus tellus ultrices purus, et posuere dolor elit non lorem. Fusce id eros leo. Proin lorem ex, facilisis in velit vitae, fermentum gravida augue.</p>
                    <p>Suspendisse potenti. Morbi a vulputate lorem. Curabitur facilisis elit at enim ullamcorper viverra. Suspendisse euismod augue vitae diam commodo cursus. Nunc pretium, justo vitae commodo elementum, diam massa euismod urna, sit amet bibendum felis lorem id lectus. Nullam imperdiet lectus mauris, at sagittis nulla fermentum sed. Aliquam venenatis hendrerit metus, sed tincidunt lacus faucibus at. Aliquam gravida dapibus nisl sed volutpat. Nam sit amet congue mauris. Mauris pulvinar ante ac efficitur aliquam. Sed ut faucibus dolor. Sed vel aliquam tortor. Quisque id velit vel diam elementum elementum.</p>
                    <p>Quisque ut consequat erat. Vivamus molestie euismod lectus, non rhoncus dui rutrum id. Cras consectetur varius arcu, quis porta tellus egestas non. Vivamus id sollicitudin diam, sed condimentum nisl. In tortor sapien, tristique nec risus id, commodo vehicula tortor. Proin dapibus est arcu. In tincidunt neque sed turpis dapibus mattis. Sed turpis elit, sollicitudin vel libero a, rutrum tincidunt dui.</p>
                    <p>Integer sit amet eros luctus, consequat tortor at, pulvinar nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut scelerisque, lorem consectetur semper mollis, arcu magna venenatis dui, sit amet facilisis orci ipsum ac turpis. Sed consequat vel erat et consectetur. Nullam at orci dignissim, consectetur lacus ut, aliquet velit. Nulla convallis tellus libero, sit amet maximus leo sodales vel. Suspendisse nunc libero, lacinia id porttitor hendrerit, lobortis et quam. Sed sit amet augue vel velit sollicitudin posuere. Nullam elit ligula, vulputate et pretium facilisis, pulvinar placerat justo. Morbi vel quam feugiat, elementum augue molestie, aliquam dolor. Integer interdum vel felis ut fermentum.</p>
                    <p>Integer dignissim velit quis placerat ultrices. Donec eget sapien condimentum nulla vestibulum viverra quis bibendum enim. Integer justo leo, tincidunt id odio tempus, bibendum aliquet lacus. Vestibulum et nulla eget nisl feugiat lacinia. Sed porttitor sem diam, quis feugiat ante pellentesque quis. Vivamus ut massa consequat, facilisis neque in, aliquet ligula. Integer ullamcorper, lorem vel venenatis lobortis, tortor odio congue nunc, eget ultrices enim purus a quam. Donec at purus convallis, posuere est vel, sagittis ex. Suspendisse odio arcu, volutpat et ipsum consequat, placerat aliquet orci. Donec risus lacus, scelerisque ut quam in, finibus rhoncus justo. Suspendisse eu ultrices neque. Nam bibendum sodales velit et ullamcorper. Curabitur in nulla quis massa porta condimentum sit amet a turpis. Morbi euismod magna quis convallis tempor. Quisque scelerisque enim in diam elementum, a feugiat purus rutrum.</p>
                    <p>Suspendisse neque odio, mattis vel gravida at, sollicitudin ac nulla. Nullam a lacus non augue molestie vulputate. In mauris nulla, consequat tempor posuere eget, vulputate ut diam. Etiam scelerisque sagittis ante quis commodo. Quisque vitae libero sit amet augue posuere ultrices non vel urna. Sed aliquet tempor dolor porttitor rutrum. Phasellus elit justo, hendrerit in commodo nec, gravida eget mauris. Morbi gravida, nunc eu ullamcorper consectetur, sapien urna elementum elit, at rhoncus turpis diam et tortor. Proin eu mi a lectus suscipit volutpat. Nunc venenatis dolor congue tortor viverra, a aliquet ipsum ultrices. Vivamus mollis ex vel ex suscipit, at tristique lectus tempor. Sed euismod pellentesque dolor vel euismod. Donec nulla dui, finibus et ultricies non, aliquet at eros.</p>
                    <p>Quisque sed accumsan neque, eu faucibus neque. Maecenas ac luctus purus. Duis sit amet nisi ac sapien finibus varius. Praesent non turpis turpis. Curabitur vel commodo ipsum, in feugiat elit. Ut vel maximus ipsum, at tincidunt mi. Pellentesque odio nunc, varius et facilisis vitae, feugiat nec metus. Cras lacinia tristique iaculis. Proin ac mi diam. Donec lacus ante, ullamcorper et est vitae, aliquet aliquam nibh. Nunc ut sagittis libero.</p>
                    <p>Donec libero mauris, mattis faucibus malesuada nec, semper vitae lorem. Nunc augue nisi, egestas nec felis eget, luctus imperdiet elit. Etiam at interdum nunc. Nunc semper posuere mi, ac suscipit felis vestibulum id. Maecenas ac vestibulum purus. Morbi id orci vel nunc efficitur blandit. Aliquam nibh odio, placerat in varius ultrices, volutpat id lectus. Morbi sodales eros non aliquet vehicula. Sed rhoncus eu urna ac accumsan. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam eget est et nibh varius feugiat a nec erat. Nunc urna sapien, finibus id risus vitae, feugiat vehicula leo. In et massa in magna efficitur accumsan a at felis.</p>
                    <p>Maecenas nibh justo, feugiat quis justo a, elementum luctus libero. Sed vestibulum semper facilisis. Duis tristique, dui vel hendrerit consequat, tellus libero pellentesque felis, quis vestibulum erat mauris id ligula. Vestibulum tempus quam eget arcu mollis, a rutrum neque imperdiet. Aenean porta, sapien in placerat gravida, urna neque rhoncus eros, quis sagittis risus dolor vel libero. Sed vitae interdum quam, sit amet rutrum purus. Curabitur ultrices dui velit, nec ultricies metus sodales quis. Proin sagittis, lacus non vestibulum tincidunt, tellus dolor porta quam, vel suscipit sem velit id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer sit amet dui sed augue maximus aliquet sit amet non enim. Integer ultricies urna lacus, at vestibulum purus eleifend vitae.</p>
                </div>
            </article>
        </div>
    </section>
</body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/css/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
</html>
