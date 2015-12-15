<form method="post" action="<?php echo $directory.'admin/traitement/'.$site.'/'.$page; ?>">

    <div class="form-group">
        <label for="color1">Couleur</label><br>
        <input type="color" name="ZONE_COLOR1" id="color1" value=""><br>
        <label for="text_info1">Titre</label>
        <input type="text" class="form-control" name="ZONE_TITRE1" maxlength="6" value="">
        <label for="text_info3">Text</label>
        <input type="text" class="form-control" name="ZONE_TEXTE1" maxlength="60" value="">
    </div>
    <div class="form-group">
        <label for="color2">Couleur</label><br>
        <input type="color" name="ZONE_COLOR2" id="color2" value=""><br>
        <label for="text_info2">Titre</label>
        <input type="text" class="form-control" name="ZONE_TITRE2" maxlength="6" value="">
        <label for="text_info3">Text</label>
        <input type="text" class="form-control" name="ZONE_TEXTE2" maxlength="60" value="">
    </div>
    <div class="form-group">
        <label for="color3">Couleur</label><br>
        <input type="color" name="ZONE_COLOR3" id="color3" value=""><br>
        <label for="text_info3">Titre</label>
        <input type="text" class="form-control" name="ZONE_TITRE3" maxlength="6" value="">
        <label for="text_info3">Text</label>
        <input type="text" class="form-control" name="ZONE_TEXTE3" maxlength="60" value="">
    </div>
    <hr>
    <div id="content">
        <?php
        if(isset($FormData)) {
            foreach ($FormData as $key => $value) {
                ?>
                <div class="form-group">
                    <img src="../../assets/imgs/del.png" class="delBloc" onclick="delBloc('bloc1');">
                    <label for="titre">Titre du bloc</label>
                    <input type="text" class="form-control titre" name="titre" maxlength="50" size="55" value="">
                    <label for="textarea">Texte du bloc</label>
                    <textarea id="textarea" name="text"></textarea>
                </div>
        <?php }
        } ?>
    </div>
    <input type="submit" class="btn btn-info" value="Enregistrer">

    <button class="btn btn-warning" id="addBloc">Ajouter un bloc texte</button>
</form>