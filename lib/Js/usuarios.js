$(document).ready(function() {
    list();
    save();
    saveUp();
    saveUpPassword();
});

var list = function() {
    var table = $("#usuarios").DataTable({
        // destroy: true,
        // scrollX: true,
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"],
        ],
        ajax: {
            method: "POST",
            url: "lib/controller/ctr_usuarios.php",
            data: { accion: "listarusuarios" },
        },
        columns: [
            { data: "us_nombre" },
            { data: "us_correo" },
            { data: "us_cedula" },
            { data: "us_movil" },
            { data: "rol_nombre" },
            {
                defaultContent: "<button type='button' title='Editar' class='btn btn-dark btn-circle editar'><i class='ti-pencil'></i></button>&nbsp;<button type='button' title='Password' class='btn btn-danger btn-circle pass'><i class='ti-lock'></i></button>",
            },
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        
    });
    dataedit("#usuarios tbody", table);
    datachangepass("#usuarios tbody", table);
};

//-----------------------------CHANGE PASSWORD
var datachangepass = function(body, table) {
    $(body).on("click", "button.pass", function() {
        $("#cambiarpassword").modal("show");
        var data = table.row($(this).parents("tr")).data();
        console.log(data);
        $("#iduserchangepassword").val(data.us_id);
    });
};

var saveUpPassword = () => {
    $("#frmDatospassword").on("submit", function(e) {
        e.preventDefault();
        var datos = new FormData($("#frmDatospassword")[0]);
        datos.append("accion", "cambiarpassword");
        $("#cambiarpassword").modal("hide");
        if (verificarPassword(datos.get("passchange1"), datos.get("passchange2"))) {
            $.ajax({
                method: "POST",
                url: "lib/controller/ctr_usuarios.php",
                data: datos,
                contentType: false,
                processData: false,
                cache: false,
                success: function(resp) {
                    var resp = JSON.parse(resp);
                    mostrar_mensaje(resp);
                },
            });
        }
    });
};


//-----------------------------EDIT
var dataedit = function(body, table) {
    $(body).on("click", "button.editar", function() {
        $("#modaleditarusuario").modal("show");
        var data = table.row($(this).parents("tr")).data();
        $("#nombreup").val(data.us_nombre);
        $("#correoup").val(data.us_correo);
        $("#correoold").val(data.us_correo);
        $("#cedulaup").val(data.us_cedula);
        $("#celularup").val(data.us_movil);
        $("#idusuario").val(data.us_id);
        $("#estadoupd").val(data.us_estado);
        $("#rolup").val(data.rol_id);
    });
};

// ------------------------------SAVE
var save = () => {
    $("#fmradd").on("submit", function(e) {
        e.preventDefault();
        var datos = new FormData($("#fmradd")[0]);
        datos.append("accion", "nuevoUsuario");

        if (verificarPassword(datos.get("pass1"), datos.get("pass2"))) {
            $.ajax({
                method: "POST",
                url: "lib/controller/ctr_usuarios.php",
                data: datos,
                contentType: false,
                processData: false,
                cache: false,
                success: function(resp) {
                    var resp = JSON.parse(resp);
                    $("#usuarios").DataTable().ajax.reload();
                    if (resp.respuesta == "USERCREADO") {
                    $("#modalagregarusuario").modal("hide");
                    }
                    mostrar_mensaje(resp);
                },
            });
        }
    });
};

var saveUp = () => {
    $("#fmredit").on("submit", function(e) {
        e.preventDefault();
        var datos = new FormData($("#fmredit")[0]);
        datos.append("accion", "editarUsuario");
        $("#modaleditarusuario").modal("hide");
        $.ajax({
            method: "POST",
            url: "lib/controller/ctr_usuarios.php",
            data: datos,
            contentType: false,
            processData: false,
            cache: false,
            success: function(resp) {
                console.log(resp);
                var resp = JSON.parse(resp);
                $("#usuarios").DataTable().ajax.reload();
                mostrar_mensaje(resp);
            },
        });
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