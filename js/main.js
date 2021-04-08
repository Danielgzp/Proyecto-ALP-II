$(function(){

    $("#enviar").click(function(){
        $("#name").css("border-color", "#d4780e");
        $("#lastname").css("border-color", "#d4780e");
        $("#age").css("border-color", "#d4780e");
        $("#country").css("border-color", "#d4780e");
        $("#email").css("border-color", "#d4780e");
        $("#pass").css("border-color", "#d4780e");
        $("#pass2").css("border-color", "#d4780e");
    });

    $(".form").submit(function(e){
        e.preventDefault;

            var form = $(this);
            var respuesta = $('#respuesta');
            var action = form.attr('action');
            var method = form.attr('method');
            var formdata = new FormData(this);
            $("#preloader").fadeIn(1000);
            $("#enviar").fadeOut(1000);
            var loading = $("#form");
            loading.addClass('loading');
            $.ajax({
                type: method,
                url: action,
                data: formdata ? formdata : form.serialize(),
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    $("#preloader").fadeOut(1000);
                    $("#enviar").fadeIn(1000);
                    loading.removeClass('loading');
                    respuesta.html(data);
                },
                error: function (data) {
                    $("#preloader").fadeIn(1000);
                    $("#enviar").fadeOut(1000);
                    loading.removeClass('loading');
                    respuesta.html(data);
                }
            });
            return false;  
    })
});
