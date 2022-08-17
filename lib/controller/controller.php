<?php
class ControllerPlantilla
{
    public function plantilla()
    {
        include ('lib/view/plantilla.php');
    }

    public function registro()
    {
        include 'lib/view/registro.php';
    }
    public function login()
    {
        include 'lib/view/login.php';
    }
}