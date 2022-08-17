<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="20x20" href="assets/img/favicon.png">
    <title>NASA KIWE</title>
    
    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
        href="assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/style2.css">
    <!-- <link rel="stylesheet" href="assets/css/sidebar.css"> -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <!--alerts CSS -->
    <link href="assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    
</head>

<body>

<?php
if (isset($_SESSION['us_id'])) {
   include 'modulos/preloader.php';
 }
 ?>

<?php 
 
 if (isset($_SESSION['us_id'])) {
     
     include "modulos/menu.php";
    //  echo '<div id="right-panel" class="right-panel">';
    //  include "modulos/header.php";
     
       echo "<main>";
         if (isset($_GET['action'])) {
             
             if($_SESSION['us_rol_id'] == 1){
                 
                 if ($_GET["action"] == "inicio" ||
                 $_GET["action"] == "usuarios" ||
                 $_GET["action"] == "cedulas" ||
                 $_GET["action"] == "inscribir" ||
                 $_GET["action"] == "contrato" ||
                 $_GET["action"] == "configuracion" 

                 
                 ) {
                     include "lib/view/" . $_GET["action"] . ".php";
                    }
                }else{
                     if($_SESSION['us_rol_id'] == 2){
                         if ($_GET["action"] == "inicio" || $_GET["action"] == "configuracion" ) {
                             include "lib/view/" . $_GET["action"] . ".php";
                         }else{
                             $_GET["action"] = "inicio";
                             include "lib/view/" . $_GET["action"] . ".php";
                         }

                     }else{
                        if ($_GET["action"] == "inicio" || $_GET["action"] == "configuracion" || $_GET["action"] == "contrato" ||  $_GET["action"] == "cedulas" ) {
                            include "lib/view/" . $_GET["action"] . ".php";
                        }else{
                            $_GET["action"] = "inicio";
                            include "lib/view/" . $_GET["action"] . ".php";
                        }

                     }
                  

                }
                
                
            }
        
            
            
            
            
            
            include "modulos/footer.php";
            echo '</main>';
            
    }else{
        $inicio = new ControllerPlantilla();
        $inicio->login();
    }
        
 


    
    ?>
    <!-- loading  -->
   
    
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/app.js"></script>


<!-- Date Picker Plugin JavaScript -->
<script src="assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    // Date Picker
    jQuery('.mydatepicker').datepicker();
    </script>





<script src="lib/js/funcionalidades.js"></script>
<!-- <script src="lib/js/actas.js"></script> -->
<script src="assets/node_modules/blockUI/jquery.blockUI.js"></script>
    
    <script src="assets/node_modules/sweetalert/sweetalert.min.js"></script>
    <script src="assets/node_modules/sweetalert/jquery.sweet-alert.custom.js"></script>
    
    <script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/node_modules/popper/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- This is data table -->
        <script src="assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->

    
<?php
    if (isset($_SESSION['us_id'])) {

        if (isset($_GET['action'])) {
            if (
                $_GET["action"] == "usuarios" ||
                $_GET["action"] == "contrato" ||
                $_GET["action"] == "cedulas" ||
                $_GET["action"] == "inicio" ||
                $_GET["action"] == "configuracion" 

            ) {
                $dir = '<script src="lib/js/';
                $ruta = $_GET["action"] . ".js";
                $dire = '"></script>';
                echo $dir . $ruta . $dire;
            }
        } else {
            echo "vero/js/inicio.js";
        }
    }
    ?>
    
    <script>
    $(function() {
        $('#myTable').DataTable();
        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group +
                        '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
        // responsive table
        $('#config-table').DataTable({
            responsive: true
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass(
            'btn btn-primary mr-1');
        });
        </script>


<script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
    </script>

</html>