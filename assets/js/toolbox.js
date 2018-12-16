function send(accion,postArgument,callbackOK,callbackFail = null){
    // el get argument va en la direccion, el post argument siempre es un
    // array que se envia via post y del otro lado se descompone, requiere
    // AJAX / JQUERY para funcionar correctamente
    // cuando retornar sea true, el servidor responde con un array con lo 
    // que se le envio, util cuando JS cambia de ambito y se necesita saber
    // a quien se hacia referencia
    url_envio = url_query_local + "?accion=" + accion;
    window.con = $.ajax({
        type: 'POST',
        // make sure you respect the same origin policy with this url:
        // http://en.wikipedia.org/wiki/Same_origin_policy
        url: url_envio,
        async: true,
        data: postArgument,
        success: function(msg){
            // tengo respuesta, envio a callback
            // msg = retArr(msg);
            callbackOK(msg);
            },
        error: function(msg){
            //if(msg.status == 401) // que no esta logueado, redirecciono al login
                //window.location.href = "login.html";
            if(!callbackFail)
                callbackFail(msg);
        }
    });
}