$(document).ready(function () {
    $('form').submit(function (e) {
        e.preventDefault();

        var data = $(this).serializeArray();
        data.push({name: 'tag',value: 'login'});
        $.ajax({
            url: '../Controladores/Controlador_registro_inicio.php',
            type: 'post',
            dataType: 'json',
            data: data,
            beforeSend: function () {

            }
        })
        .done(function () {
            console.log("sucess");
        })
        .fail(function () {
            console.log("error");
        })
        .always(function () {
            console.log("complete");
        });
    });
});
