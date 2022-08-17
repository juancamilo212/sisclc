<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="20x20" href="assets/img/favicon.png">
    <title>NASA KIWE</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body >
<script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/node_modules/popper/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Sweet-Alert  -->
    <script src="assets/node_modules/sweetalert/sweetalert.min.js"></script>
    <script src="assets/node_modules/sweetalert/jquery.sweet-alert.custom.js"></script>

    <script src="lib/js/funcionalidades.js"></script>
   
    <div class="preloader bg-danger ms-auto">
        <div class="spinner-grow text-center" role="status">
            <span class="visually-hidden" style="color:#FFFFFF">Loading...</span>
        </div>
    </div>

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="assets/img/logo4.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form id="formregister" method="POST">
                        <div class="form-group">
                            <label>Nombre De Usuario</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <label>Correo eletronico</label>
                            <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo">
                        </div>
                        <div class="form-group">
                            <label>Identificación</label>
                            <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" name="pass1" id="pass1" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <label> Validar Contraseña</label>
                            <input type="password" class="form-control" name="pass2" id="pass2" placeholder="Contraseña">
                        </div>
                        
                        <button type="submit" class="btn btn-danger btn-flat m-b-30 m-t-30">Register</button>
                        
                        <div class="register-link m-t-15 text-center">
                            <p>Ya tienes una cuenta? <a style="color:#C02028;cursor:pointer"  href="login"> Iniciar Sesion</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/node_modules/popper/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Sweet-Alert  -->
    <script src="assets/node_modules/sweetalert/sweetalert.min.js"></script>
    <script src="assets/node_modules/sweetalert/jquery.sweet-alert.custom.js"></script>

    <script src="lib/js/funcionalidades.js"></script>
    <script src="lib/js/registro.js"></script>


<script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
    </script>

</html>
