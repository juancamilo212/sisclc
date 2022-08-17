<?php
require_once "conexion.php";
require_once "../model/check.php";


class Cedula extends Conexion
{
    public function registroUsuarioCedula($datos)
    {
        $objCheck = new Check();
        $respuestaCheck = $objCheck-> verifyCedulaExist($datos["cedula"]);
        if($respuestaCheck != false){
            return "CEDULAEXISTE";
        }
    
        $sentencia = Conexion::conectar();
        $sql = "INSERT INTO `cedulas`( nu_cedula, lugar_exp) VALUES(:cedula, :expedicion)";

        $stmt = $sentencia->prepare($sql);

        session_start();
        $stmt->bindParam(":cedula", $datos["cedula"],PDO::PARAM_STR);
        $stmt->bindParam(":expedicion", $datos["expedicion"], PDO::PARAM_STR);

        if($stmt->execute()){
            // $lastInsertId = $sentencia->lastInsertId();
            return "SUCCESS";
        }else{
            return "ERROR";
        }
    }

   
}

?>