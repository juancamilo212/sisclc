<nav>
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bx bx-chevron-left'></i>
      </span>
      <img src="assets/img/logo5.png" class="logo" alt="">
      <h3 class="hide">NASA KIWE</h3>
    </div>

</br>
</br>


    <div class="sidebar-links">
      <!-- <div class="active-tab"></div> -->
    <?php
        if($_SESSION['us_rol_id']==1){
          echo '<ul class="sidebarnav">
          <li class="tooltip-element" data-tooltip="0">
            <a href="inicio"  class="active" data-active="0">
              <div class="icon">
                <i class="bx bx-home-alt"></i>
                <i class="bx bxs-home" ></i>
              </div>
              <span class="link hide">Inicio</span>
            </a>
          </li>
          <li class="tooltip-element" data-tooltip="1">
            <a href="usuarios" data-active="1">
              <div class="icon">
                <i class="bx bx-user"></i>
                <i class="bx bxs-user"></i>
              </div>
              <span class="link hide">Usuarios</span>
            </a>
          </li>
          <li class="tooltip-element" data-tooltip="2">
            <a href="contrato"  data-active="2">
              <div class="icon">
              <i class="bx bx-book-content" ></i>
                <i class="bx bxs-book-content" ></i>
              </div>
              <span class="link hide">Crear Contratos</span>
            </a>
          </li>
          <li class="tooltip-element" data-tooltip="3">
            <a href="cedulas" data-active="3">
              <div class="icon">
                  <i class="bx bx-id-card"></i>
                  <i class="bx bxs-id-card" ></i>
              </div>
              <span class="link hide">Inscribir Cedulas</span>
            </a>
          </li>
          <li class="tooltip-element" data-tooltip="4">
            <a href="configuracion" data-active="4">
              <div class="icon">
                 <i class="bx bx-lock-alt"></i>
                 <i class="bx bxs-lock-alt" ></i>
              </div>
              <span class="link hide">Cambiar Contraseña</span>
            </a>
          </li>
          <!-- <div class="tooltip">
            <span class="show">Inicio</span>
            <span>Usuarios</span>
            <span>Crear Contrato</span>
            <span>Inscribir Cedulas</span>
          </div> -->
        </ul>';
        
        } 

        if($_SESSION['us_rol_id']==2){
          echo '<ul>
          <div class="active-tab"></div>
          <li class="tooltip-element" data-tooltip="0">
            <a href="inicio" class="active" data-active="0">
              <div class="icon">
                <i class="bx bx-home-alt"></i>
                <i class="bx bxs-home" ></i>
              </div>
              <span class="link hide">Inicio</span>
            </a>
          </li>
          <li class="tooltip-element" data-tooltip="4">
            <a href="configuracion" data-active="4">
            <div class="icon">
            <i class="bx bx-lock-alt"></i>
            <i class="bx bxs-lock-alt" ></i>
         </div>
         <span class="link hide">Cambiar Contraseña</span>
            </a>
          </li>
        </ul>';
        
        } 

        if($_SESSION['us_rol_id']==3){
          echo '<ul>
          <div class="active-tab"></div>
          <li class="tooltip-element" data-tooltip="0">
            <a href="inicio" class="active" data-active="0">
              <div class="icon">
                <i class="bx bx-home-alt"></i>
                <i class="bx bxs-home" ></i>
              </div>
              <span class="link hide">Inicio</span>
            </a>
          </li>
          <li class="tooltip-element" data-tooltip="2">
            <a href="contrato" data-active="2">
              <div class="icon">
              <i class="bx bx-book-content" ></i>
                <i class="bx bxs-book-content" ></i>
              </div>
              <span class="link hide">Crear Contratos</span>
            </a>
          </li>
          <li class="tooltip-element" data-tooltip="3">
            <a href="cedulas" data-active="3">
              <div class="icon">
                  <i class="bx bx-id-card"></i>
                  <i class="bx bxs-id-card" ></i>
              </div>
              <span class="link hide">Inscribir Cedulas</span>
            </a>
          </li>
          <li class="tooltip-element" data-tooltip="4">
            <a href="configuracion" data-active="4">
            <div class="icon">
            <i class="bx bx-lock-alt"></i>
            <i class="bx bxs-lock-alt" ></i>
         </div>
         <span class="link hide">Cambiar Contraseña</span>
            </a>
          </li>
          <!-- <div class="tooltip">
            <span class="show">Inicio</span>
            <span>Usuarios</span>
            <span>Crear Contrato</span>
            <span>Inscribir Cedulas</span>
          </div> -->
        </ul>';
        
        } 

        

      ?>  
      

      

     
    </div>
    <div class="sidebar-footer">
      <a href="#" class="account tooltip-element" data-tooltip="0">
        <i class='bx bx-user'></i>
      </a>
      <div class="admin-user tooltip-element" data-tooltip="1">
        <div class="admin-profile hide">
          <img src="assets/img/user.png" alt="">
          <div class="admin-info">
            
            <h3><?php echo $_SESSION["us_nombre"] ?></h3>
          </div>
        </div>
        <a href="lib/controller/ctr_cerrarSesion.php?accion=1" class="log-out">
          <i class='bx bx-log-out'></i>
        </a>
      </div>
      <div class="tooltip">
        <span class="show"><?php echo $_SESSION["us_nombre"] ?></span>
        <span>Salir</span>
      </div>
    </div>
  </nav> 

                    