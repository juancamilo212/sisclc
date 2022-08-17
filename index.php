<?php
require_once 'lib/controller/controller.php';

$objPlantilla = new ControllerPlantilla();
if (isset($_GET["action"]) && $_GET["action"] == "registro") {
    $objPlantilla->registro();
} else if (isset($_GET["action"]) && $_GET["action"] != "login" && $_GET["action"] != "registro") {
    $objPlantilla->plantilla();
} else {
    $objPlantilla->login();
}
