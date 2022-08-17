<?php
require_once "conexion.php";
class Check extends Conexion
{
    public function verifymail($mail, $table)
    {
        $sentencia = Conexion::conectar();
        $sql = "SELECT * FROM $table WHERE us_correo = :correo";
        $stmt = $sentencia->prepare($sql);  
        $stmt->bindParam(":correo", $mail,PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function verifyCedula($cedula, $table)
    {
        $sentencia = Conexion::conectar();
        $sql = "SELECT * FROM $table WHERE us_cedula = :cedula";
        $stmt = $sentencia->prepare($sql);  
        $stmt->bindParam(":cedula", $cedula,PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function verifyCedulaExist($cedula)
    {
        $sentencia = Conexion::conectar();
        $sql = "SELECT * FROM cedulas WHERE nu_cedula=:cedula";
        $stmt = $sentencia->prepare($sql);  
        $stmt->bindParam(":cedula", $cedula,PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function existPerson($identification, $table)
    {
        include __DIR__ . '/../connection/conexion.php';
        $q = "SELECT * FROM {$table} WHERE per_cedula = {$identification}";
        $r = mysqli_query($conexion, $q);
        if (!$r) {
            return "mistake";
        } else {
            $size = mysqli_num_rows($r);
            if ($size > 0) {
                return "exist";
            } else {
                return "notexist";
            } 
        }
    }
}
