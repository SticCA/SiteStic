<form method="post" action="<?php echo $directory.'admin/traitement/'.$site.'/'.$page; ?>">

    <?php if($page == "accueil") { ?>

    <div class="form-group">
        <h3>Bloc 1</h3>
        <label for="color1">Couleur</label><br>
        <input type="color" name="ZONE_COLOR1" id="color1" value="<?php if(!empty($contentData['COLOR']['color1'])) echo $contentData['COLOR']['color1']; ?>" required><br>
        <label for="text_info1">Titre</label>
        <input type="text" class="form-control" name="ZONE_TITRE1" maxlength="6" value="<?php if(!empty($contentData['COLOR']['titre1'])) echo $contentData['COLOR']['titre1']; ?>" required>
        <label for="text_info3">Text</label>
        <input type="text" class="form-control" name="ZONE_TEXTE1" maxlength="60" value="<?php if(!empty($contentData['COLOR']['text1'])) echo $contentData['COLOR']['text1']; ?>" required>
    </div>
    <div class="form-group">
        <h3>Bloc 2</h3>
        <label for="color2">Couleur</label><br>
        <input type="color" name="ZONE_COLOR2" id="color2" value="<?php if(!empty($contentData['COLOR']['color2'])) echo $contentData['COLOR']['color2']; ?>" required><br>
        <label for="text_info2">Titre</label>
        <input type="text" class="form-control" name="ZONE_TITRE2" maxlength="6" value="<?php if(!empty($contentData['COLOR']['titre2'])) echo $contentData['COLOR']['titre2']; ?>" required>
        <label for="text_info3">Text</label>
        <input type="text" class="form-control" name="ZONE_TEXTE2" maxlength="60" value="<?php if(!empty($contentData['COLOR']['text2'])) echo $contentData['COLOR']['text2']; ?>" required>
    </div>
    <div class="form-group">
        <h3>Bloc 3</h3>
        <label for="color3">Couleur</label><br>
        <input type="color" name="ZONE_COLOR3" id="color3" value="<?php if(!empty($contentData['COLOR']['color3'])) echo $contentData['COLOR']['color3']; ?>" required><br>
        <label for="text_info3">Titre</label>
        <input type="text" class="form-control" name="ZONE_TITRE3" maxlength="6" value="<?php if(!empty($contentData['COLOR']['titre3'])) echo $contentData['COLOR']['titre3']; ?>" required>
        <label for="text_info3">Text</label>
        <input type="text" class="form-control" name="ZONE_TEXTE3" maxlength="60" value="<?php if(!empty($contentData['COLOR']['text3'])) echo $contentData['COLOR']['text3']; ?>" required>
    </div>
    <hr>

    <?php } ?>

    <div id="content">
        <?php if(isset($contentData['BLOC'])){
            foreach ($contentData['BLOC'] as $key => $value) { ?>
            <div class="form-group" id="bloc<?php echo $key; ?>">
                <img src="../../assets/imgs/del.png" class="delBloc" onclick="delBloc('bloc<?php echo $key; ?>');">
                <label for="titre">Titre du bloc</label>
                <input type="text" class="form-control titre" name="titre[]" maxlength="50" size="55" value="<?php echo $value['titre'] ?>">
                <label for="textarea<?php echo $key; ?>">Texte du bloc</label>
                <textarea id="textarea<?php echo $key; ?>" name="text[]"><?php echo $value['text'] ?></textarea>
            </div>
            <script type="text/javascript">initTinyMce(<?php echo $key; ?>);</script>
        <?php } } ?>
    </div>
    <input type="submit" class="btn btn-info" id="valider" value="Enregistrer">

    <button class="btn btn-warning" id="addBloc">Ajouter un bloc texte</button>
</form>