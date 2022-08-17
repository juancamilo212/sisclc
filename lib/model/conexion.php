<?php
class Conexion
{
    public function conectar()
    {
        // local
     
        $con = new PDO("mysql:host=localhost;dbname=nasakiwe", "root", "");
        // remoto
       // $con = new PDO("mysql:host=nasakiwe.gov.co;dbname=NasaKiwe", "usuarioBD", "Contraseña si tiene");
        
        return $con;
    }
}