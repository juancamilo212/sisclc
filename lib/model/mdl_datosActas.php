<?php
require_once "conexion.php";

class Actas extends Conexion
{
    

    public function dataActa($key){
        $sentencia = Conexion::conectar();
        $sql="SELECT * FROM usuarios WHERE us_cedula=:llave";
        $stmt = $sentencia->prepare($sql);
        $stmt->bindParam(":llave",$key, PDO::PARAM_STR);

        if($stmt->execute()){
            $fila = $stmt->fetch(PDO::FETCH_ASSOC);
            if($fila){
                return $fila;
            }else{
                return 0;
            }
           
        }else{
            return "ERROR";
        }

    }

    public function dataContratos($cedula){
        $sentencia = Conexion::conectar();
        $sql="SELECT * FROM contratos INNER JOIN usuarios ON(id_us_cedula=us_cedula) INNER JOIN cedulas ON (id_us_cedula=nu_cedula) WHERE id_us_cedula=:llave";
        $stmt = $sentencia->prepare($sql);
        $stmt->bindParam(":llave",$cedula, PDO::PARAM_STR);

        if($stmt->execute()){
            $data = [];
            while($fila = $stmt->fetch(PDO::FETCH_ASSOC)){
                $data[]=$fila;
            }
            return $data;
           
        }else{
            return "ERROR";
        }

    }



}