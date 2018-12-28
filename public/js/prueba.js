function enviarMensaje(){
    var data = {
        nombre: $("#nombre").val(),
        mensaje: $("#mensaje").val()
    };

    $.ajax({
        url: `/prueba`,
        method: "POST",
        data: data,
        dataType: "json",
        success: function (res) {
            console.log(res);
            $("#respuesta").html(" ");
            $("#respuesta").append(`
                                        Nombre: ${res.nombre}<br>
                                        Mensaje: ${res.mensaje}`);
        },
        error: function (error) {
            console.error(error);
        }
    });
}

function obtenerMensaje(){
    var data = {
        nombre: $("#obNombre").val(),
        mensaje: $("#obMensaje").val()
    };

    $.ajax({
        url: `/prueba`,
        method: "GET",
        data: data,
        dataType: "json",
        success: function (res) {
            console.log(res);
            $("#respuesta").html(" ");
            $("#respuesta").append(`
                                        Nombre: ${res.nombre}<br>
                                        Mensaje: ${res.mensaje}`);
        },
        error: function (error) {
            console.error(error);
        }
    });
}