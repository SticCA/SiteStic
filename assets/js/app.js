$( document ).ready(function() {

    $(".arrow-toggle").bind("click", function(){
        id = "#" + $(this).parent().parent().data("toggle");
        if($(id).is(":visible")){
            $(this).css({
                'transform' : 'rotate(0deg)',
                'margin-right' : '30px'
            });
        }else{
            $(this).css({
                'transform' : 'rotate(180deg)',
                'margin-right' : '10px'
            });
        }
        $(id).slideToggle();
    });

});
