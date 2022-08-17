

var mostrar_mensaje = function(informacion) {
    console.log(informacion);
    if (informacion.respuesta == "SUCCESS") {
        Swal.fire({
            title: "MUY BIEN",
            text: "Creado correctamente!",
            type: "success",
            confirmButtonText: "Aceptar",
        })
        // .then((result) => {
        //     if (result.value) {
        //         location.reload();
        //     } else {
        //         location.reload();
        //     }
        // });
    }
    if (informacion.respuesta == "REGISTRADOSUCCESS") {
        Swal.fire({
            title: "MUY BIEN",
            text: "Se ha registrado exitosamente!",
            type: "success",
            confirmButtonText: "Aceptar",
        }).then((result) => {
            if (result.value) {
                window.location = "login";
            } else {
                window.location = "login";
            }
        });
    } else if (informacion.respuesta == "ERROR") {
        Swal.fire({
            title: "ERROR",
            text: "No se realizaron cambios!",
            type: "error",
            confirmButtonText: "Aceptar",
        })
        // .then((result) => {
        //     if (result.value) {
        //         location.reload();
        //     } else {
        //         location.reload();
        //     }
        // });
    } else if (informacion.respuesta == "PASSWORD") {
        Swal.fire({
            title: "!Ups las contraseñas no coinciden",
            text: "No se realizaron cambios!",
            type: "warning",
            confirmButtonText: "Aceptar",
        });
    } else if (informacion.respuesta == "CORREOEXISTE") {
        Swal.fire({
            title: "!Ups el correo ya se encuentra registrado en nuestro sistema",
            text: "No se realizaron cambios!",
            type: "warning",
            confirmButtonText: "Aceptar",
        });
    } else if (informacion.respuesta == "LOGIN") {
        Swal.fire({
            title: "Contraseña incorrecta",
            text: "La contraseña que ingresaste no es valida para este correo",
            type: "warning",
            confirmButtonText: "Aceptar",
        });
    } else if (informacion.respuesta == "CORREONOEXISTE") {
        Swal.fire({
            title: "Correo no existe!",
            text: "El correo electrónico que ingresaste no está conectado a una cuenta.",
            type: "warning",
            confirmButtonText: "Aceptar",
        });
    } else if (informacion.respuesta == "USERCREADO") {
        Swal.fire({
            title: "Bien!",
            text: `Usuario creado con exito`,
            type: "success",
            confirmButtonText: "Aceptar",
        });
    } else if (informacion.respuesta == "CEDULAEXISTE") {
        Swal.fire({
            title: "!Ups",
            text: "Ya hay un usuario registrado con esta identificación",
            type: "warning",
            confirmButtonText: "Aceptar",
        });
    } else if (informacion.respuesta == "NOPESO") {
        Swal.fire({
            title: "Peso erróneo",
            text: "La imagen no debe pesar mas de 2MB",
            type: "warning",
            confirmButtonText: "Aceptar",
        });
    } else if (informacion.respuesta == "DELETEC") {
        Swal.fire({
            title: "Bien",
            text: "Contrato eliminado",
            type: "success",
            confirmButtonText: "Aceptar",
        });
    } else if (informacion.respuesta == "ACTUALIZADO") {
        Swal.fire({
            title: "SUCCESS",
            text: "Informacion Actualizada correctamente",
            type: "success",
            confirmButtonText: "Aceptar",
        });
    } else if (informacion.respuesta == "REUNIONFINALIZADA") {
        Swal.fire({
            title: "!Ups",
            text: "Lo sentimos ya no puedes firmar esta reunión",
            type: "warning",
            confirmButtonText: "Aceptar",
        });
    } else if (informacion.respuesta == "PASSNOCOINCIDEN") {
        Swal.fire({
            title: "!Ups",
            text: "Lo sentimos las contraseñas no coinciden",
            type: "warning",
            confirmButtonText: "Aceptar",
        });
    } else if (informacion.respuesta == "PASSOLDNOCOINCIDE") {
        Swal.fire({
            title: "!Ups",
            text: "Lo sentimos la contraseña no coincide con la guardada en nuestro sistema",
            type: "warning",
            confirmButtonText: "Aceptar",
        });
    } else if (informacion.respuesta == "PASSWORDCAMBIADA") {
        Swal.fire({
            title: "Contraseña cambiada con exito",
            text: "Le hemos enviado a su correo su nueva contraseña, le recomendamos que la cambie una vez ingrese al sistema",
            type: "success",
            confirmButtonText: "Aceptar",
        }).then((result) => {
            if (result.value) {
                location.reload();
            } else {
                location.reload();
            }
        });
    } else if (informacion.respuesta == "REUNIONSINDATOSAUN") {
        Swal.fire({
            title: "!Ups",
            text: "El acta aún no tiene datos para poder visualizarse o firmarse",
            type: "warning",
            confirmButtonText: "Aceptar",
        });
    } else if (informacion.respuesta == "CEDULANOEXISTEADMIN") {
        Swal.fire({
            title: "!UPS",
            text: "Debes registrar la cedula primero",
            type: "warning",
            confirmButtonText: "Aceptar",
        });
    } else if (informacion.respuesta == "CEDULANOEXISTE") {
        Swal.fire({
            title: "!UPS",
            text: "Esta cedula no esta registrada en nuestra base de datos comunicate a info@nasakiwe.gov.co",
            type: "warning",
            confirmButtonText: "Aceptar",
        });
    } else if (informacion.respuesta == "CREADO") {
        Swal.fire({
            title: "SUCCESS",
            text: "Contrato creado correctamente",
            type: "SUCCESS",
            confirmButtonText: "Aceptar",
        });
    }
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