<?php
require_once "../model/mdl_cedulas.php";

$accion = $_POST["accion"];
switch($accion){
    case "añadircedula":
        $datos = array("cedula" => $_POST["cedula"], "expedicion" => $_POST["expedicion"]);
        $obj = new Cedula();
        $respuesta = $obj->registroUsuarioCedula($datos);
        $informacion["respuesta"] = $respuesta;
        echo json_encode($informacion);
    break;
   
}

