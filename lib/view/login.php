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

    <!-- <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
     
     <!--alerts CSS -->
     <link href="assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body >

    <div class="preloader bg-danger ms-auto">
        <div class="spinner-grow text-center" role="status">
            <span class="visually-hidden" style="color:#FFFFFF">Loading...</span>
        </div>
    </div>

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="login">
                        <img class="align-content" src="assets/img/logo4.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form id="formlogin" method="POST">
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="email" class="form-control" name="email" placeholder="Correo">
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" name="password"  placeholder="......">
                        </div>

                            <a type='button' style="color:#C02028;cursor:pointer" onClick="" data-toggle='modal' data-target='#modalrecuperarpassword'
                            data-toggle='tooltip' data-placement='top' class=" m-l-5"><b>¿Olvidaste tu
                                contraseña?</b></a>
                                <input type="hidden" name="accion" value="login">
                        <button type="submit" class="btn btn-danger btn-flat m-b-30 m-t-30">Iniciar sesion</button>
                        
                        <div class="register-link m-t-15 text-center " >
                            <p>No tienes una cuenta aún? <a style="cursor:pointer;color:#C02028;" href="registro"> Registrarse</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL RECUPERAR CONTRASEÑA -->
    <div class="modal fade" id="modalrecuperarpassword" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Recuperar Contraseña</h4><br>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button> -->
                </div>
                <div class="modal-body">

                    <form id="fmrrecuperarpassword">
                        <div class="col-lg-12">
                            <label>Ingrese su correo electronico</label>
                            <div class="input-group mb-3">
                                <input type="email" id="correoregistrado" name="correoregistrado" class="form-control"
                                    aria-describedby="basic-addon1" placeholder="Ingrese su correo electronico"
                                    required>
                            </div>
                        </div>

                        <div>
                            <input type="hidden" name="accion" value="recuperarpassword">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger waves-effect"
                                data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Recuperar</button>
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
    <script src="lib/js/login.js"></script>

    <!--Custom JavaScript -->
    <script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });  
    </script>

</html>
