<?php
$accion = $_POST["accion"];
switch($accion){

    case "login":
        require_once "../model/crud.php";
        $datos = array("pass" => $_POST["password"] ,"correo" => $_POST["email"]);
        $obj = new Datos();
        $respuesta = $obj->loginUsuarioMdl($datos, "usuarios");
        $informacion["respuesta"] = $respuesta;
        echo json_encode($informacion);
    break;

    case "recuperarpassword":
        require_once "../model/crud.php";
        $correo = $_POST["correoregistrado"];
        $obj = new Datos();
        $respuesta = $obj->recuperarPasswordEmail($correo);
        $informacion["respuesta"] = $respuesta;
        echo json_encode($informacion);
    break;
}