<?php
require_once "../model/mdl_inicio.php";


$accion = $_POST["accion"];
switch($accion){

    case "allcontratos":
        // $cedula = $_SESSION['us_cedula'];
        $obj = new Inicio();
        $respuesta = $obj->listarmiscontratos();
        echo json_encode($respuesta);
    break; 
}

?>