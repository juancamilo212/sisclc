$(document).ready(function() {
    saveUpPassword();
});


var saveUpPassword = () => {
    $("#frmpass").on("submit", function(e) {
        e.preventDefault();
        var datos = new FormData($("#frmpass")[0]);
        datos.append("accion", "cambiarpassword");
        if (verificarPassword(datos.get("passchange1"), datos.get("passchange2"))) {
            $.ajax({
                method: "POST",
                url: "lib/controller/ctr_cambiarContraseña.php",
                data: datos,
                contentType: false,
                processData: false,
                cache: false,
                success: function(resp) {
                    console.log(resp);
                    var resp = JSON.parse(resp);
                    mostrar_mensaje(resp);
                },
            });
        }
    });
};

var verificarPassword = (pass1, pass2) => {
    if (pass1 == pass2) {
        return true;
    } else {
        var inf = [];
        inf["respuesta"] = "PASSWORD";
        mostrar_mensaje(inf);
    }
};