<?php
require_once "conexion.php";
require_once "../model/encrypt.php";
require_once "../model/check.php";




class Contratos extends Conexion
{
    public function crearContrato($datos)
    {
    
	    $newDate = date("Y/m/d", strtotime($datos["fechainicio"]));


        $sentencia = Conexion::conectar();
        $sql = "INSERT INTO `contratos`( id_us_cedula, id_creador, num_contrato, tipo_con, trabaco_con, valor_con, fecha_ini_con, duracion_con, sector_con, mun_con, dpt_con) VALUES(:cedula, :usuario, :numeroc, :tipoc, :trabajo, :valor, :fecha, :duracion, :sector, :municipio, :departamento)";

        $stmt = $sentencia->prepare($sql);

        session_start();
        $stmt->bindParam(":cedula", $datos["cedula"],PDO::PARAM_STR);
        $stmt->bindParam(":usuario", $_SESSION["us_id"],PDO::PARAM_INT);
        $stmt->bindParam(":numeroc", $datos["numeroc"], PDO::PARAM_STR);
        $stmt->bindParam(":tipoc", $datos["tipoc"], PDO::PARAM_STR);
        $stmt->bindParam(":trabajo", $datos["empleo"], PDO::PARAM_STR);
        $stmt->bindParam(":valor", $datos["valorc"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $newDate, PDO::PARAM_STR);
        $stmt->bindParam(":duracion", $datos["duracion"], PDO::PARAM_STR);
        $stmt->bindParam(":sector", $datos["sector"], PDO::PARAM_STR);
        $stmt->bindParam(":municipio", $datos["municipio"], PDO::PARAM_STR);
        $stmt->bindParam(":departamento", $datos["departamento"], PDO::PARAM_STR);

       
        

        if($stmt->execute()){
            // $lastInsertId = $sentencia->lastInsertId();
            return "SUCCESS";
        }else{
            return "ERROR";
        }
    }

    public function listarcontratos(){
        session_start();
        $sentencia = Conexion::conectar();
        $sql="SELECT * FROM contratos";
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

    

    public function actualizarcontrato($datos){
        
	    $newDate = date("Y/m/d", strtotime($datos["fechainicio"]));

        $sql = "UPDATE contratos SET id_us_cedula=:cedula, num_contrato=:numeroc, tipo_con=:tipoc, trabaco_con=:trabajo, valor_con=:valor, fecha_ini_con=:fecha, duracion_con=:duracion, sector_con=:sector, mun_con=:municipio, dpt_con=:departamento  WHERE id=:id";

        $sentencia = Conexion::conectar();
        $stmt = $sentencia->prepare($sql);
        $stmt->bindParam(":cedula", $datos["cedula"],PDO::PARAM_STR);
        $stmt->bindParam(":numeroc", $datos["numeroc"], PDO::PARAM_STR);
        $stmt->bindParam(":tipoc", $datos["tipoc"], PDO::PARAM_STR);
        $stmt->bindParam(":trabajo", $datos["empleo"], PDO::PARAM_STR);
        $stmt->bindParam(":valor", $datos["valorc"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $newDate, PDO::PARAM_STR);
        $stmt->bindParam(":duracion", $datos["duracion"], PDO::PARAM_STR);
        $stmt->bindParam(":sector", $datos["sector"], PDO::PARAM_STR);
        $stmt->bindParam(":municipio", $datos["municipio"], PDO::PARAM_STR);
        $stmt->bindParam(":departamento", $datos["departamento"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
    


        if($stmt->execute()){
           
            return "ACTUALIZADO";
        }else{

            return "ERROR";
        }
        
    }

    public function eliminarcontrato($id){
        $sentencia = Conexion::conectar();
        $sql="DELETE FROM contratos WHERE id='$id'";
        $stmt = $sentencia->prepare($sql);
        if($stmt->execute()){
            return "DELETEC";
        }else{
            return "ERROR";
        }
    }


}


?>