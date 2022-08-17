<?php
$accion = $_POST["accion"];
switch($accion){
    case "register":
        require_once "../model/crud.php";
        $datos = array("pass1" => $_POST["pass1"], "pass2" => $_POST["pass2"], "rol"=>2, "correo" => $_POST["correo"], "nombre"=>$_POST["nombre"], "cedula"=>$_POST["cedula"], "telefono"=>$_POST["telefono"]);
        $obj = new Datos();
        $respuesta = $obj->registroUsuarioUser($datos, "usuarios");
        $informacion["respuesta"] = $respuesta;
        echo json_encode($informacion);
    break;
}