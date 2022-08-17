<?php
require_once "conexion.php";
require_once "../model/encrypt.php";

class Contraseña extends Conexion
{
   

    public function adminCambiarPassword($datos){
        $obj = new Pass_crypt();
        $newPass = $obj->create_hash($datos["password"]);
        session_start();
        $id=$_SESSION['us_id'];

        $sql = "UPDATE usuarios SET us_password=:pass WHERE us_id='$id'";
        $sentencia = Conexion::conectar();

        $stmt = $sentencia->prepare($sql);
        $stmt->bindParam(":pass", $newPass, PDO::PARAM_STR);

        if($stmt->execute()){
            return "ACTUALIZADO";
        }else{
            return "ERROR";
        }
    }

   

}