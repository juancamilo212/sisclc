$(document).ready(function() {
    list();
    // Vercertificado();
});

var Vercertificado = () => {
    var key = $("#cedulaid").val();
  let direccion = `lib/acta/certificacion?key=${key}`;
  window.open(direccion, "_blank");
};


var list = function() {
    var table = $("#inicio").DataTable({
        // destroy: true,
        // scrollX: true,
        "order": [[ 3, "desc" ]],
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"],
        ],
        ajax: {
            method: "POST",
            url: "lib/controller/ctr_inicio.php",
            data: { accion: "allcontratos" },
        },
        columns: [

            // id_us_cedula, id_creador, num_contrato, tipo_con, trabaco_con, valor_con, fecha_ini_con, duracion_con, sector_con, mun_con, dpt_con) VALUES(:cedula, :usuario, :numeroc, :tipoc, :trabajo, :valor, :fecha, :duracion, :sector, :municipio, :departamento     
            { data: "num_contrato" },
            { data: "valor_con" },
            { data: "fecha_ini_con" },
            { data: "dpt_con" },
            { data: "id_us_cedula"},
            
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        
    });
   
};