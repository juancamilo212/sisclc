$(document).ready(function() {
    save();
    list();
    upcertificado();

});


var list = function() {
    var table = $("#certificacion").DataTable({
        order: [[ 1, "asc" ]],
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"],
        ],
        ajax: {
            method: "POST",
            url: "lib/controller/ctr_contrato.php",
            data: { accion: "allcontratos" },
        },
        columns: [

            // id_us_cedula, id_creador, num_contrato, tipo_con, trabaco_con, valor_con, fecha_ini_con, duracion_con, sector_con, mun_con, dpt_con) VALUES(:cedula, :usuario, :numeroc, :tipoc, :trabajo, :valor, :fecha, :duracion, :sector, :municipio, :departamento     
            { data: "num_contrato" },
            { data: "valor_con" },
            { data: "fecha_ini_con" },
            { data: "id_us_cedula" },
            {
                defaultContent: "<button type='button' title='Editar' class='btn btn-dark btn-circle editar'><i class='ti-pencil'></i></button>&nbsp;<button type='button' title='Borrar' class='btn btn-danger btn-circle borrar'><i class='ti-trash'></i></button>",
            },
            
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        
    });
    editarContrato("#certificacion tbody", table);
    Deletecertificado("#certificacion tbody", table);
};


// ------------------------------EDITAR REUNION
var editarContrato = function(body, table) {
    $(body).on("click", "button.editar", function() {
        // clearForms();
        $("#modaleditar").modal("show");
        var data = table.row($(this).parents("tr")).data();
        $("#numerocup").val(data.num_contrato);
        $("#tipocup").val(data.tipo_con);
        $("#empleoup").val(data.trabaco_con);
        $("#valorup").val(data.valor_con);
        $("#fechainicialup").val(data.fecha_ini_con);
        $("#duracionup").val(data.duracion_con);
        $("#identificacionup").val(data.id_us_cedula);
        $("#sectorup").val(data.sector_con);
        $("#departamentoup").val(data.mun_con);
        $("#municipioup").val(data.dpt_con);
        $("#id").val(data.id);
        
    });
};

var Deletecertificado = (body, table) => {
    $(body).on("click", "button.borrar", function() {
    var data = table.row($(this).parents("tr")).data();
    Swal.fire({
        title: 'Desea eliminar este contrato?',
        showCancelButton: true,
        confirmButtonText: 'Eliminar',
        
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.value) {
          
            load();
            $.ajax({
                method: "POST",
                url: "lib/controller/ctr_contrato.php",
                data: {accion: "borrarcontrato", id: data.id },
                success: function(resp) {
                    endload();
                    console.log(resp);
                    var resp = JSON.parse(resp);
                    $("#certificacion").DataTable().ajax.reload();
                    mostrar_mensaje(resp);
                },
            });
       
        } 
      })
    });
};


var upcertificado = () => {
    $("#editar").on("submit", function(e) {
        e.preventDefault();
        var datos = new FormData($("#editar")[0]);
        datos.append("accion", "editcontrato");
        $("#modaleditar").modal("hide");
        load();
        $.ajax({
            method: "POST",
            url: "lib/controller/ctr_contrato.php",
            data: datos,
            contentType: false,
            processData: false,
            cache: false,
            success: function(resp) {
                endload();
                console.log(resp);
                var resp = JSON.parse(resp);
                $("#certificacion").DataTable().ajax.reload();
                mostrar_mensaje(resp);
            },
        });
    });
};


// ------------------------------SAVE
var save = () => {
    $("#formcertificado").on("submit", function(e) {
        e.preventDefault();
        var datos = new FormData($("#formcertificado")[0]);
        datos.append("accion", "crearcontrato");
        // $("#modalagregar").modal("hide");
        load();
        $.ajax({
            method: "POST",
            url: "lib/controller/ctr_contrato.php",
            data: datos,
            contentType: false,
            processData: false,
            cache: false,
            success: function(resp) {
                $("#modalagregar").modal("hide");
                endload();
                var resp = JSON.parse(resp);
                $("#certificacion").DataTable().ajax.reload();
                mostrar_mensaje(resp);
                location.reload();
               


            },
        });
    });
};


