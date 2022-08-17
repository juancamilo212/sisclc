<?php
require_once "../model/mdlCambiarcontraseña.php";

$accion = $_POST["accion"];
switch($accion){
    case "cambiarpassword":
        $datos = array("password"=>$_POST["passchange1"]);
        $obj = new Contraseña();
        $resp = $obj->adminCambiarPassword($datos);
        $respuesta["respuesta"] = $resp;
        echo json_encode($respuesta);
    break;

   
}

