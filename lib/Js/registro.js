$(document).ready(function() {
    save();
});

var save = () => {
    $("#formregister").on("submit", function(e) {
        e.preventDefault();
        var datos = new FormData($("#formregister")[0]);
        datos.append("accion", "register");
        load();
        $.ajax({
            method: "POST",
            url: "lib/controller/ctr_registro.php",
            data: datos,
            contentType: false,
            processData: false,
            cache: false,
            success: function(resp) {
                console.log(resp);
                endload();
                var resp = JSON.parse(resp);
                mostrar_mensaje(resp);
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