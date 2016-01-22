<?php
if($flash['info']) {
    echo "<blockquote class='info'><p>" . $flash['info'] . "</p></blockquote>";
}elseif($flash['erreur']) {
    echo "<blockquote class='erreur'><p>" . $flash['erreur'] . "</p></blockquote>";
}
?>
<form method="post" enctype="multipart/form-data" action="<?php echo $directory.'admin/traitement/'.$site.'/'.$page; ?>">

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

    <?php } ?>

    <div id="content">
        <?php if(isset($contentData['BLOC'])){
            foreach ($contentData['BLOC'] as $key => $value) { ?>
            <div class="form-group blocs" id="bloc<?php echo $key; ?>">
                <img src="../../assets/imgs/del.png" class="delBloc" onclick="delBloc('bloc<?php echo $key; ?>');">
                <label for="color2">Ordre d'affichage du bloc</label><br>
                <input type="number" name="order[]" min="1" value="<?php if($value['order']) echo $value['order']; else echo ($key+1); ?>" required><br>
                <label for="titre">Image du bloc</label>
                <br>
                <label class="radio-inline">
                    <input type="radio" name="media<?php echo $key; ?>[]" value="worldgrid" required <?php if($value['media1'] == "worldgrid") echo "checked" ?>> <i class="flaticon-worldgrid"></i>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="media<?php echo $key; ?>[]" value="briefcase69" required <?php if($value['media1'] == "briefcase69") echo "checked" ?>> <i class="flaticon-briefcase69"></i>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="media<?php echo $key; ?>[]" value="downloading" required <?php if($value['media1'] == "downloading") echo "checked" ?>> <i class="flaticon-downloading"></i>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="media<?php echo $key; ?>[]" value="edit-text" required <?php if($value['media1'] == "edit-text") echo "checked" ?>> <i class="flaticon-edit-text"></i>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="media<?php echo $key; ?>[]" value="graduation-cap2" required <?php if($value['media1'] == "graduation-cap2") echo "checked" ?>> <i class="flaticon-graduation-cap2"></i>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="media<?php echo $key; ?>[]" value="magnifier13" required <?php if($value['media1'] == "magnifier13") echo "checked" ?>> <i class="flaticon-magnifier13"></i>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="media<?php echo $key; ?>[]" value="mark1" required <?php if($value['media1'] == "mark1") echo "checked" ?>> <i class="flaticon-mark1"></i>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="media<?php echo $key; ?>[]" value="shopping159" required <?php if($value['media1'] == "shopping159") echo "checked" ?>> <i class="flaticon-shopping159"></i>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="media<?php echo $key; ?>[]" value="suitcase58" required <?php if($value['media1'] == "suitcase58") echo "checked" ?>> <i class="flaticon-suitcase58"></i>
                </label>
                <br>
                <label class="control-label">Ajout Image</label>
                <input name="img[]" type="file" accept="image/*"><br>
                <label class="control-label">Ajout Document</label>
                <input name="doc[]" type="file" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"><br>
                <label for="titre">Titre du bloc</label>
                <input type="text" class="form-control titre" name="titre[]" maxlength="50" size="55" value="<?php echo $value['titre'] ?>">
                <br><label for="textarea<?php echo $key; ?>">Texte du bloc :
                    <br>* Pour afficher l'image précédement ajouté, il faut ajouter "#IMG#" dans le texte
                    <br>** Pour afficher le fichier précédement ajouté, il faut ajouter "#FILE#Texte du lien#" dans le texte</label>
                <textarea id="textarea<?php echo $key; ?>" name="text[]"><?php echo str_replace("assets", "../../assets", str_replace("files", "../../files", $value['text'])); ?></textarea>
            </div>
            <script type="text/javascript">initTinyMce(<?php echo $key; ?>);</script>
        <?php } } ?>
    </div>
    <input type="submit" class="btn btn-info" id="valider" value="Enregistrer">

    <button class="btn btn-warning" id="addBloc">Ajouter un bloc texte</button>
</form>