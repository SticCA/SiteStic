$( document ).ready(function() {

    $('button').bind('click', function(){
        var ta_count = $("textarea").length;
        var elem = document.createElement("textarea");
        $(elem).attr("name", "text" + ta_count.toString());
        $(elem).appendTo("#content");

        tinymce.init({ selector: 'textarea', height : 200 });
    });

});
