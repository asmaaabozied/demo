$(document).ready(function(){
    var ww = $(window).width();
    $(".mobNav").css("right", -ww);

    $("button.navbar-toggler").click(function(){
        $(".mobNav").animate({right: '0px'});
    });
    $(".mobNav .btn").click(function(){
        $(".mobNav").animate({right: '-'+ww});
    });

})