<?php
require_once "../model/crud.php";

$accion = $_POST["accion"];
switch($accion){
    case "nuevoUsuario":
        $datos = array("nombre" => $_POST["nombre"], "correo" => $_POST["correo"], "cedula" => $_POST["cedula"], "pass1" => $_POST["pass1"], "pass2" => $_POST["pass2"], "celular" => $_POST["celular"], "rol"=>$_POST["rol"]);
        $obj = new Datos();
        $respuesta = $obj->registroUsuarioMdl($datos, "usuarios");
        $informacion["respuesta"] = $respuesta;
        echo json_encode($informacion);
    break;

    case "listarusuarios":
        $obj = new Datos();
        $respuesta = $obj->listarUsuarios();
        echo json_encode($respuesta);
    break;

    case "editarUsuario":
        $datos = array("nombre" => $_POST["nombreup"], "correo" => $_POST["correoup"], "cedula" => $_POST["cedulaup"],  "estado" => $_POST["estadoup"],  "celular" => $_POST["celularup"], "rol"=>$_POST["rolup"], "idusuario"=>$_POST["idusuario"], "correoold"=>$_POST["correoold"]);
        $obj = new Datos();
        $resp = $obj->editarUsuario($datos,"usuarios");
        $respuesta["respuesta"] = $resp;
        echo json_encode($respuesta);
    break;

    case "cambiarpassword":
        $datos = array("id"=>$_POST["iduserchangepassword"], "password"=>$_POST["passchange1"]);
        $obj = new Datos();
        $resp = $obj->adminCambiarPassword($datos);
        $respuesta["respuesta"] = $resp;
        echo json_encode($respuesta);
    break;

   
}

