<?php
require_once "conexion.php";
require_once "../model/encrypt.php";
require_once "../model/check.php";


class Datos extends Conexion
{
    public function registroUsuarioMdl($datos, $tabla)
    {
        if($datos["pass1"] != $datos["pass2"]){
            return "PASSWORD";
        }

        $objCheck = new Check();
        $respuestaCheck = $objCheck-> verifymail($datos["correo"], $tabla);
        if($respuestaCheck != false){
            return "CORREOEXISTE";
        }

        $respuestaCheck = $objCheck-> verifyCedula($datos["cedula"], $tabla);
        if($respuestaCheck != false){
            return "CEDULAEXISTE";
        }

        $respuestaCheck = $objCheck-> verifyCedulaExist($datos["cedula"]);
        if(!$respuestaCheck){
            return "CEDULANOEXISTEADMIN";
        }

        $obj = new Pass_crypt();
        $newPass = $obj->create_hash($datos["pass1"]);
        $estado = 1;

        $sentencia = Conexion::conectar();
        $sql = "INSERT INTO $tabla(us_rol_id, us_nombre, us_correo, us_cedula, us_password, us_movil, us_estado) VALUES(:rol, :user, :email, :cedula, :pass, :telefono, :estado)";
        $stmt = $sentencia->prepare($sql);  
        $stmt->bindParam(":rol", $datos["rol"],PDO::PARAM_INT);
        $stmt->bindParam(":user", $datos["nombre"],PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":cedula", $datos["cedula"], PDO::PARAM_STR);
        $stmt->bindParam(":pass", $newPass, PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["celular"], PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_INT);

        // $rows = $sentencia->rowCount();
        if($stmt->execute()){
            return "USERCREADO";
        }else{
            return "ERROR";
        }
    }

    //cuando el usuario se registra solo desde afuera
    public function registroUsuarioUser($datos, $tabla)
    {
        if($datos["pass1"] != $datos["pass2"]){
            return "PASSWORD";
        }

        $objCheck = new Check();
        $respuestaCheck = $objCheck-> verifymail($datos["correo"], $tabla);
        if($respuestaCheck != false){
            return "CORREOEXISTE";
        }

        $respuestaCheck = $objCheck-> verifyCedula($datos["cedula"], $tabla);
        if($respuestaCheck != false){
            return "CEDULAEXISTE";
        }

        $respuestaCheck = $objCheck-> verifyCedulaExist($datos["cedula"]);
        if(!$respuestaCheck){
            return "CEDULANOEXISTE";
        }

        $obj = new Pass_crypt();
        $newPass = $obj->create_hash($datos["pass1"]);
        $estado = 1;
         
        $sentencia = Conexion::conectar();
        $sql = "INSERT INTO $tabla(us_rol_id, us_nombre, us_correo, us_cedula, us_password, us_movil, us_estado) VALUES(:rol, :user, :email, :cedula, :pass, :telefono, :estado)";
        $stmt = $sentencia->prepare($sql);  
        $stmt->bindParam(":rol", $datos["rol"],PDO::PARAM_INT);
        $stmt->bindParam(":user", $datos["nombre"],PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":cedula", $datos["cedula"], PDO::PARAM_STR);
        $stmt->bindParam(":pass", $newPass, PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_INT);



        // $rows = $sentencia->rowCount();
        if($stmt->execute()){
            return "REGISTRADOSUCCESS";
        }else{
            return "ERROR";
        }
    }

    public function loginUsuarioMdl($datos, $tabla){
    require_once "controller.php";

        $objCheck = new Check();
        $respuestaCheck = $objCheck-> verifymail($datos["correo"], $tabla);
        if($respuestaCheck == false){
            return "CORREONOEXISTE";
        }else{
            $passwordGuardada = $respuestaCheck["us_password"];
            $obj = new Pass_crypt();
            $passVerificada = $obj->check_value($datos["pass"], $passwordGuardada);
            if($passVerificada){
                session_start();
                $_SESSION['us_id']=$respuestaCheck['us_id'];
                $_SESSION['us_rol_id']=$respuestaCheck['us_rol_id'];
                $_SESSION['us_nombre']=$respuestaCheck['us_nombre'];
                $_SESSION['us_correo']=$respuestaCheck['us_correo'];
                $_SESSION['us_cedula']=$respuestaCheck['us_cedula'];
                $_SESSION['us_movil']=$respuestaCheck['us_movil'];
                $_SESSION['us_avatar_ruta'] = $respuestaCheck['us_avatar_ruta'];


                return "inicio";
            }else{
               return "LOGIN";
                
            }
        }
    }

    public function loginCerrarUsuarioMdl(){
        session_start();
        session_unset();
        session_destroy();
        header('Location:../../login');
    }

    public function listarUsuarios(){
        $sentencia = Conexion::conectar();
        $sql = "SELECT * FROM usuarios INNER JOIN rol ON(us_rol_id=rol_id)";
        $stmt = $sentencia->prepare($sql);
        if($stmt->execute()){
            $data["data"] = [];
            while($fila = $stmt->fetch(PDO::FETCH_ASSOC)){
                if($fila["us_estado"]==1){
                    $fila["us_estado"]="Activo";
                }else{
                    $fila["us_estado"]="Inactivo";
                }
                $data["data"][]=$fila;
            }
            return $data;
        }
    }
    

   

    public function editarUsuario($datos,$tabla){
        // verificamos los correos 
        if($datos["correo"] != $datos["correoold"]){
        $objCheck = new Check();
        $respuestaCheck = $objCheck-> verifymail($datos["correo"], $tabla);
            if($respuestaCheck != false){
                return "CORREOEXISTE";
            }
         }

         $sql = "UPDATE $tabla SET us_rol_id=:rol, us_nombre=:nombre, us_correo=:correo, us_estado=:estado, us_cedula=:cedula, us_movil=:telefono WHERE us_id=:id";

         $sentencia = Conexion::conectar();
         $stmt = $sentencia->prepare($sql);

         $stmt->bindParam(":rol", $datos["rol"],PDO::PARAM_INT);
         $stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
         $stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_INT);
         $stmt->bindParam(":telefono", $datos["celular"], PDO::PARAM_STR);
         $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR); 
         $stmt->bindParam(":cedula", $datos["cedula"], PDO::PARAM_STR); 
         $stmt->bindParam(":id",$datos["idusuario"], PDO::PARAM_INT);

         if($stmt->execute()){
            return "ACTUALIZADO";
         }else{
             return "ERROR";
         }
    }

    public function adminCambiarPassword($datos){
        $obj = new Pass_crypt();
        $newPass = $obj->create_hash($datos["password"]);

        $sql = "UPDATE usuarios SET us_password=:pass WHERE us_id=:id";
        $sentencia = Conexion::conectar();

        $stmt = $sentencia->prepare($sql);
        $stmt->bindParam(":pass", $newPass, PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

        if($stmt->execute()){
            return "ACTUALIZADO";
        }else{
            return "ERROR";
        }
    }

    public function recuperarPasswordEmail($email){
        require_once "controller.php";

        $objCheck = new Check();
        $respuestaCheck = $objCheck-> verifymail($email, "usuarios");
        if($respuestaCheck == false){
            return "CORREONOEXISTE";
        }else{
            $nuevaPass = "NASAKIWE_".date("h_i_s");
            $obj = new Pass_crypt();
            $newPassEncriptada = $obj->create_hash($nuevaPass);

            $sql = "UPDATE usuarios SET us_password=:passwordnew WHERE us_correo=:correo";
            $sentencia = Conexion::conectar();
            $stmt = $sentencia->prepare($sql);
            $stmt->bindParam(":passwordnew", $newPassEncriptada,PDO::PARAM_STR);
            $stmt->bindParam(":correo",$email,PDO::PARAM_STR);
            if($stmt->execute()){
                require "mdl_enviarCorreo.php";
                $objSendEmail  = new send_email();
                $response = $objSendEmail->envioCorreo(1, $email, $nuevaPass);
                if($response == null){
                return "PASSWORDCAMBIADA";
                }else{
                    return "ERROR";
                }
            }else{
                return "ERROR";
            }


        }
    }

   

}