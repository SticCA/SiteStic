var num = $('textarea').length;
var colorTest = $('#color1').length;

$(document).ready(function() {

    if(num == 0 && colorTest == 0){
        $('#valider').prop("disabled", true);
    }

    $('button').bind('click', function(e){
        e.preventDefault();
        addBloc();
    });

    $('form').bind('submit', function(e){

        flag = false;

        for(i = 0; i < num; i++){
            id = 'body[data-id="textarea1"]';
            if($(id).innerHTML() == ""){
                flag = true;
            }
        }

        if(!flag){
            return;
        }

        e.preventDefault();
        alert("Veuillez saisir l'ensemble des textes !");
    });

    $('#btn_miage').bind('click', function(e){
        e.preventDefault();
        $('#miage').addClass("active in");
        $('#role_miage').addClass("active");
        $('#2ibs').removeClass("active in");
        $('#role_2ibs').removeClass("active");
    });

    $('#btn_2ibs').bind('click', function(e){
        e.preventDefault();
        $('#2ibs').addClass("active in");
        $('#role_2ibs').addClass("active");
        $('#miage').removeClass("active in");
        $('#role_miage').removeClass("active");
    });

});

function addBloc(){

    $('#valider').prop("disabled", false);

    num = num + 1;
    var bloc = "bloc" + num.toString();
    var txt = "text[]";
    var titre = "titre[]";

    /**********************************************/

    var div = document.createElement("div");
    $(div).attr("class","form-group blocs");
    $(div).attr("id", bloc);

    /**********************************************/

    var img = document.createElement("img");
    $(img).attr("src","../../assets/imgs/del.png");
    $(img).attr("class","delBloc");
    $(img).attr("onclick","delBloc('"+bloc+"');");

    /**********************************************/

    //label titre
    var label_titre = document.createElement("label");
    $(label_titre).text("Titre du bloc");

    // input
    var input = document.createElement("input");
    $(input).attr("name", titre);
    $(input).attr("class", "form-control titre");
    $(input).attr("required", "");

    /**********************************************/

    //label textearea
    var label_txt = document.createElement("label");
    $(label_txt).html("<br>Texte du bloc :<br>* Pour afficher l\'image précédement ajouté, il faut ajouter \"#IMG#\" dans le texte<br>** Pour afficher le fichier précédement ajouté, il faut ajouter \"#FILE#Texte du lien#\" dans le texte");

    // Textearea Tinymce
    var text = document.createElement("textarea");
    $(text).attr("name", txt);
    $(text).attr("id", "textarea" + num.toString());

    /**********************************************/

    $(div).appendTo("#content");
    $(img).appendTo("#" + bloc);
    $("#" + bloc).append(addOrder());
    $("#" + bloc).append(addIcon());
    $("#" + bloc).append(addFileImg());
    $("#" + bloc).append(addFileDoc());
    $(label_titre).appendTo("#" + bloc);
    $(input).appendTo("#" + bloc);
    $(label_txt).appendTo("#" + bloc);
    $(text).appendTo("#" + bloc);

    initTinyMce(num.toString());

    $('html, body').animate({
        scrollTop: $("#" + bloc).offset().top
    }, 1000);
}


function delBloc(bloc){
    if(confirm("Etes-vous sûr de vouloir supprimer ce bloc ?")) {
        var id = "#" + bloc;
        var text = "textarea"+num;
        tinymce.get(text).remove();
        $(id).remove();
        num = num - 1;
        if(num == 0 && colorTest == 0){
            $('#valider').prop("disabled", true);
        }
    }
}

function addFileImg(){
    return '<label class="control-label">Ajout Image</label> <input name="img[]" type="file" accept="image/*"><br>';
}

function addFileDoc(){
    return '<label class="control-label">Ajout Document</label> <input name="doc[]" type="file" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"><br>';
}

function addOrder(){
    return '<label for="color2">Ordre d\'affichage du bloc</label><br><input type="number" name="order[]" min="1" id="" value="'+(num)+'" required><br>';
}

function addIcon(){
    return '<label for="titre">Image du bloc</label> <br/> <label class="radio-inline"> <input type="radio" name="media'+(num-1)+'[]" value="worldgrid" required> <i class="flaticon-worldgrid"></i> </label> <label class="radio-inline"> <input type="radio" name="media'+(num-1)+'[]" value="briefcase69" required> <i class="flaticon-briefcase69"></i> </label> <label class="radio-inline"> <input type="radio" name="media'+(num-1)+'[]" value="downloading" required> <i class="flaticon-downloading"></i> </label> <label class="radio-inline"> <input type="radio" name="media'+(num-1)+'[]" value="edit-text" required> <i class="flaticon-edit-text"></i> </label> <label class="radio-inline"> <input type="radio" name="media'+(num-1)+'[]" value="graduation-cap2" required> <i class="flaticon-graduation-cap2"></i> </label> <label class="radio-inline"> <input type="radio" name="media'+(num-1)+'[]" value="magnifier13" required> <i class="flaticon-magnifier13"></i> </label> <label class="radio-inline"> <input type="radio" name="media'+(num-1)+'[]" value="mark1" required> <i class="flaticon-mark1"></i> </label> <label class="radio-inline"> <input type="radio" name="media'+(num-1)+'[]" value="shopping159" required> <i class="flaticon-shopping159"></i> </label> <label class="radio-inline"> <input type="radio" name="media'+(num-1)+'[]" value="suitcase58" required> <i class="flaticon-suitcase58"></i> </label> <br/>';
}
