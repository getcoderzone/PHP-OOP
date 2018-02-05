$(document).ready(function(){
/*    $('ul li a').click(function(){
        $('li a').removeClass("active");
        $(this).addClass("active");
    });*/


    $('a.nav-link').click(function(){
        $('a.nav-link').removeClass("active");
        $(this).addClass("active");
    });
});