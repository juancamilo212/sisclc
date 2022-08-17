<?php
require_once "../model/mdl_contrato.php";


$accion = $_POST["accion"];
switch($accion){
    case "crearcontrato":
        
        $datos = array("numeroc" => $_POST["numeroc"], "tipoc" => $_POST["tipoc"], "empleo" => $_POST["empleo"], "valorc" => $_POST["valor"], "fechainicio" => $_POST["fechainicial"], "duracion" => $_POST["duracion"], "cedula" => $_POST["identificacion"],"sector" => $_POST["sector"], "departamento" => $_POST["departamento"],"municipio" => $_POST["municipio"], );
        $obj = new contratos();
        $respuesta = $obj->crearContrato($datos);
        
        $informacion["respuesta"] = $respuesta;
        echo json_encode($informacion);
    break;

    case "allcontratos":
        $obj = new contratos();
        $respuesta = $obj->listarcontratos();
        echo json_encode($respuesta);
    break;

    case "editcontrato":
        
        $datos = array("numeroc" => $_POST["numerocup"], "tipoc" => $_POST["tipocup"], "empleo" => $_POST["empleoup"], "valorc" => $_POST["valorup"], "fechainicio" => $_POST["fechainicialup"], "duracion" => $_POST["duracionup"], "cedula" => $_POST["identificacionup"],"sector" => $_POST["sectorup"], "departamento" => $_POST["departamentoup"],"municipio" => $_POST["municipioup"], "id" => $_POST["id"], );
        $obj = new contratos();
        $respuesta = $obj->actualizarcontrato($datos);
        $informacion["respuesta"] = $respuesta;
        echo json_encode($informacion);
    break;

    
    case "borrarcontrato":
        $id = (int)$_POST["id"]; 
        $obj = new contratos();
        $respuesta = $obj->eliminarcontrato($id);
        $informacion["respuesta"] = $respuesta;
        echo json_encode($informacion);
    break;


    
}

?>