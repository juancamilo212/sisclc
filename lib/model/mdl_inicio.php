<?php
require_once "conexion.php";

class Inicio extends Conexion
{
	
    public function listarmiscontratos(){
        $sentencia = Conexion::conectar();
        session_start();
        $cedula=$_SESSION['us_cedula'];
        $sql="SELECT * FROM contratos WHERE id_us_cedula='$cedula'";
        $stmt = $sentencia->prepare($sql);
        if($stmt->execute()){
            $data["data"] = [];
            while($fila = $stmt->fetch(PDO::FETCH_ASSOC)){
                $data["data"][] = $fila;
            }
            return $data;
        }else{
            return "ERROR";
        }

    }


}


?>