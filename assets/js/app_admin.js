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

    var hr = document.createElement("hr");

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
    $(label_txt).text("Texte du bloc");

    // Textearea Tinymce
    var text = document.createElement("textarea");
    $(text).attr("name", txt);
    $(text).attr("id", "textarea" + num.toString());

    /**********************************************/

    $(div).appendTo("#content");
    $(img).appendTo("#" + bloc);
    $(label_titre).appendTo("#" + bloc);
    $(input).appendTo("#" + bloc);
    $(label_txt).appendTo("#" + bloc);
    $(text).appendTo("#" + bloc);
    $(hr).appendTo("#" + bloc);

    initTinyMce(num.toString());

    $('html, body').animate({
        scrollTop: $("#" + bloc).offset().top
    }, 1000);
}


function delBloc(bloc){
    if(confirm("Etes-vous sûr de vouloir supprimer ce bloc ?")) {
        var id = "#" + bloc;
        $(id).remove();
        num = num - 1;
        if(num == 0 && colorTest == 0){
            $('#valider').prop("disabled", true);
        }
    }
}
