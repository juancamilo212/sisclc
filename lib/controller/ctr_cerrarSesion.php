<?php
$accion = $_GET["accion"];
switch($accion){
     case 1:
         require_once "../model/crud.php";
        $obj = new Datos();
        $obj->loginCerrarUsuarioMdl();
    break;
}