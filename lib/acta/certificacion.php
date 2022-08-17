<?php
// connection database
//include autoloader
require_once __DIR__ . '/../../extensiones/dompdf_0-8-5/autoload.inc.php';
require_once __DIR__ . '/cl_certificacion.php';
require_once  '../model/mdl_datosActas.php';

$objDatos = new Actas();
$obj = new CertificacionNASAKIWE();

//key que llega por get
$Key = $_GET["key"];
$datausuario = $objDatos->dataActa($Key);
if($datausuario==0){
      $asistentes = $objDatos->dataContratos(0);
}else{
      $cedula = $datausuario["us_cedula"];
      $asistentes = $objDatos->dataContratos($cedula);
}






// reference the Dompdf namespace
use Dompdf\Dompdf;
//initialize dompdf class
$document = new Dompdf();
ob_start();

?>
<!-- -------------------------------------------ESTILOS -->
<?php
echo '<link rel="stylesheet" type="text/css" href="../../dist/css/estilos.css">';
?>


<!-- -------------------------------------------------------PRIMERA TABLA -->
<?php
$obj->header();
?>

<?php
$obj->tablaDatos();
?>


<!-- -------------------------------------------------------Datos Usuario -->
<?php
if($datausuario==0){
      $lugar = "";
      $cedula = "";
      $nombre = "";
}else{
      $cedula = $datausuario["us_cedula"];
      $nombre = $datausuario["us_nombre"];
      $lugar =  $asistentes[0]["lugar_exp"] ?? "";
}
$obj->dataUsuario($nombre, $lugar, $cedula);
?>


<!-- -------------------------------------------------------contratos -->
<?php
$obj->contratos($asistentes);
?>


<!-- Pie de pagina -->
<?php
$obj->piedepagina();
?>


<!-- --------------------------------------------------------------------------------------------SALTO DE PAGINA NUEVA PAGINA -->
<!-- <div class='saltopagina'></div> -->
<!-- -------------------------------------HEADER -->


<?php
$html = ob_get_clean();
$document->loadHtml($html);
$document->setPaper('A4', 'portrait');
$document->render();
$document->stream("Webslesson", array("Attachment" => 0));
      //1 = Download
      //0 = Preview