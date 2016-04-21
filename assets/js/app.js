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

    if($(document).width() < 993){
        $('html, body').animate({
            scrollTop: $(".main").offset().top - 100
        }, 1000);
    }

});

function locationUPJV()
{
    width = 700;
    height = 700;
    if(window.innerWidth)
    {
        var left = (window.innerWidth-width)/2;
        var top = (window.innerHeight-height)/2;
    }
    else
    {
        var left = (document.body.clientWidth-width)/2;
        var top = (document.body.clientHeight-height)/2;
    }
    window.open('../location','Location','url=no, menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');

}
