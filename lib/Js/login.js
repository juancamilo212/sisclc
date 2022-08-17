$(document).ready(function() {
    login();
    recuperarPassword();
});

var login = () => {
    $("#formlogin").on("submit", function(e) {
        e.preventDefault();
        // console.log( $( this ).serialize() );
        load();
        var datos = new FormData($("#formlogin")[0]);
        console.log(datos);
        $.ajax({
            method: "POST",
            url: "lib/controller/ctr_login.php",
            data: datos,
            contentType: false,
            processData: false,
            cache: false,
            success: function(resp) {
                console.log(resp);
                var resp = JSON.parse(resp);
                endload();
                if (resp.respuesta == "CORREONOEXISTE" || resp.respuesta == "LOGIN") {
                    mostrar_mensaje(resp);
                } else {
                    window.location.href = `${resp.respuesta}`;
                }
            },
        });
    });
};

// --------------------------------------------------RECUPERAR CONTRASEÑA
var recuperarPassword = () => {
    $("#fmrrecuperarpassword").on("submit", function(e) {
        e.preventDefault();
        var datos = new FormData($("#fmrrecuperarpassword")[0]);
        $.ajax({
            method: "POST",
            url: "lib/controller/ctr_login.php",
            data: datos,
            contentType: false,
            processData: false,
            cache: false,
            success: function(resp) {
                console.log(resp);
                var r = JSON.parse(resp);
                mostrar_mensaje(r);
            },
        });
    });
};

// loading
var load = () => {
    Swal.fire({
        allowOutsideClick: false,
        icon: "warning",
        text: "Espere por favor...",
      });
    
      Swal.showLoading();
};
var endload = () => {
    Swal.close();
};