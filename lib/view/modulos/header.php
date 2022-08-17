
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="inicio"><img src="assets/img/logo4.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <ul class="float-right p-3" style="color:black;"><?php echo $_SESSION["us_nombre"]?></ul>
                    <div class="header-left">

                        <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="assets/img/user.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="lib/controller/ctr_cerrarSesion.php?accion=1"><i class="fa fa-power -off"></i>Salir</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->