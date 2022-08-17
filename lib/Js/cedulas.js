$(document).ready(function() {
    save(); 
});


// ------------------------------SAVE
var save = () => {
    $("#fmrcedula").on("submit", function(e) {
        e.preventDefault();
        var datos = new FormData($("#fmrcedula")[0]);
        var x1 = document.getElementById("cedula").value;
        var x2 = document.getElementById("expedicion").value;
        Swal.fire({
            title: 'Verificar datos antes de enviar',
            showCancelButton: true,
            text: "Cedula " + x1 + " " + "Expedición " + x2,
            confirmButtonText: 'Registrar',
            
          }).then((result) => {
            if (result.value) {

                datos.append("accion", "añadircedula");
                    $.ajax({
                        method: "POST",
                        url: "lib/controller/ctr_cedulas.php",
                        data: datos,
                        contentType: false,
                        processData: false,
                        cache: false,
                        success: function(resp) {
                            console.log(resp);
                            var resp = JSON.parse(resp);
                            clearForms();
                            mostrar_mensaje(resp);
                        },
                    });
            }
        })
        
        })
}
    

// -----------------------------limpiar formularios
var clearForms = () => {
    $("#fmrcedula")[0].reset();
};