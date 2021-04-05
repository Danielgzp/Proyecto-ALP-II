$(document).ready(function(){
    var estado = false;

    $('#btn-togle').on('click', function(){
        $('.main-aside').slideToggle();
    });

    $('#btn-togle--menu').on('click', function(){
        $('.header-nav').slideToggle();
    });
});