var num = 1;

$(document).ready(function() {

    $('button').bind('click', function(e){
        e.preventDefault();

        addBloc();
    });

});

function initTinyMce(){
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
}

function addBloc(){

    num = num + 1;
    var bloc = "bloc" + num.toString();
    var txt = "text[]";
    var titre = "titre[]";

    /**********************************************/

    var div = document.createElement("div");
    $(div).attr("class","form-group");
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

    /**********************************************/

    //label textearea
    var label_txt = document.createElement("label");
    $(label_txt).text("Texte du bloc");

    // Textearea Tinymce
    var text = document.createElement("textarea");
    $(text).attr("name", txt);

    /**********************************************/

    $(div).appendTo("#content");
    $(img).appendTo("#" + bloc);
    $(label_titre).appendTo("#" + bloc);
    $(input).appendTo("#" + bloc);
    $(label_txt).appendTo("#" + bloc);
    $(text).appendTo("#" + bloc);
    $(hr).appendTo("#" + bloc);

    initTinyMce();

    $('html, body').animate({
        scrollTop: $("#" + bloc).offset().top
    }, 1000);
}


function delBloc(bloc){
    if(confirm("Etes-vous sûr de vouloir supprimer ce bloc ?")) {
        var id = "#" + bloc;
        $(id).remove();
    }
}
