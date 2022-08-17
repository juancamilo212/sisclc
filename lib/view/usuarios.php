
<div class=" breadcrumbs">
    <h4 class="text-center">Usuarios</h4>

    <div class="row">
        <div class="pl-4">
            <div class="text-center">
            <!-- Button trigger modal -->
            <button id="btncrearreunion" type="button" data-toggle='modal' data-target='#modalagregarusuario'
                        data-toggle='tooltip' data-placement='top' class="btn btn-danger"><i class="ti-plus"></i>
                        Crear Usuario</button>
            </div>
        </div>
    </div>
        <br />


    <!-- Tab panes -->
                                        <div class="tab-content" id="contenedortabla1">
                                        <div class="table-responsive m-t-40">
                                            <table id="usuarios"
                                                class="display nowrap table table-hover table-striped table-bordered"
                                                cellspacing="0" width="100%">
                                                <thead>
                                                    <tr >
                                                  <th>Nombre</th>
                                                  <th>Correo</th>
                                                  <th>Identificacion</th>
                                                  <th>Telefono</th>
                                                  <th>Rol</th>
                                                  <th>Acciones</th>
                                                       
                                                    </tr>
                                                </thead>

                                            </table>
                                        </div>
                                    </div>



<!-- MODAL  ADD-->
<div class="modal fade" id="modalagregarusuario" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar Usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form  autocomplete="off" id="fmradd" method="POST" enctype="multipart/form-data">
                       
                    <div class="col-md-12">
                    <div class="row">
                    

                      <div class="col-md-6">
                      <div class="form-group">
                        <label>Nombre de usuario</label>
                        <input class="form-control" type="text" placeholder="Nombre de usuario" id="nombre" name="nombre" required>
                    </div>
                      </div>

                      <div class="col-md-6">
                      <div class="form-group">
                        <label>Correo</label>
                        <input class="form-control" type="email" placeholder="Correo" id="correo" name="correo"
                            required>
                    </div>
                      </div>
                      </div>
                      </div>

                      <div class="col-md-12">
                          <div class="row">

                              <div class="col-md-6">
                                  <div class="form-group">
                              <label>Cedula</label>
                              <input class="form-control" type="text" placeholder="CC:" id="cedula" name="cedula" required>
                            </div>
                        </div>  
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Celular</label>
                                <input class="form-control" type="text" placeholder="Numero de celular" id="celular" name="celular" required>
                            </div>
                        </div> 
                        
                    </div>
                      </div>

                      <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                        <label>Contraseña</label>
                        <input class="form-control" type="password" placeholder="Contraseña" id="pass1" name="pass1"
                            required>
                    </div>

                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                        <label>Repita Contraseña</label>
                        <input class="form-control" type="password" placeholder="Repita contraseña" id="pass2"
                            name="pass2" required>
                    </div>
                            </div>
                        </div>
                      </div>
                    
                     <div class="col-md-12">
                         <div class="row">

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label>Rol</label>
                                     <select class="form-control" name="rol" id="rol">
                                         <option value="1">Administrador</option>
                                         <option value="2">Usuario</option>
                                         <option value="3">Digitador</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                
                        </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cerrar</button>
                        <button type="submit" id="btnguardar"
                            class="btn btn-info waves-effect waves-light">Guardar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<!-- MODAL  EDITAR-->
<div class="modal fade" id="modaleditarusuario" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar Usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form id="fmredit" method="POST" enctype="multipart/form-data">

                <div class="col-md-12">
                    <div class="row">
                    

                      <div class="col-md-6">
                      <div class="form-group">
                        <label>Nombre de usuario</label>
                        <input class="form-control" type="text" placeholder="Nombre de usuario" id="nombreup" name="nombreup" required>
                    </div>
                      </div>

                      <div class="col-md-6">
                      <div class="form-group">
                        <label>Correo</label>
                        <input class="form-control" type="email" placeholder="Correo" id="correoup" name="correoup"
                            required>
                    </div>
                      </div>
                      </div>
                      </div>

                      <div class="col-md-12">
                          <div class="row">

                              <div class="col-md-6">
                                  <div class="form-group">
                              <label>Cedula</label>
                              <input class="form-control" type="text" placeholder="CC:" id="cedulaup" name="cedulaup" required>
                            </div>
                        </div>  
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Celular</label>
                                <input class="form-control" type="text" placeholder="Numero de celular" id="celularup" name="celularup" required>
                            </div>
                        </div> 
                        
                    </div>
                      </div>
                    
                      <div class="col-md-12">
                         <div class="row">

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label>Rol</label>
                                     <select class="form-control" name="rolup" id="rolup">
                                         <option value="1">Administrador</option>
                                         <option value="2">Usuario</option>
                                         <option value="3">Digitador</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <select class="form-control" name="estadoup" id="estadoup">
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                
                        </div>
                        

                    <div>
                        <input type="hidden" id="idusuario" name="idusuario">
                        <input type="hidden" id="correoold" name="correoold">
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cerrar</button>
                        <button type="submit" id="btnsubmitup"
                            class="btn btn-info waves-effect waves-light">Guardar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>



<!-- /row modal cambiar password-->
<div class="row">
    <div id="cambiarpassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Cambiar Contraseña</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form id="frmDatospassword" method="POST">
                    <div class="modal-body">

                        <div id="contenedor">

                            <div class="row">
                                <div class="col-md-12 col-sm-12 mt-12">
                                    <h4>Nueva Contraseña:</h4>
                                    <input required type="password" class="form-control" name="passchange1"
                                        id="passchange1" placeholder="Contraseña">
                                </div>

                                <div class="col-md-12 col-sm-12 mt-12">
                                    <h4>Confirmar Contraseña:</h4>
                                    <input class="form-control" required type="password" name="passchange2"
                                        id="passchange2" placeholder="Repita contraseña">
                                </div>
                            </div>

                            <div>
                                <input type="hidden" name="iduserchangepassword" id="iduserchangepassword">
                                <input type="hidden" name="accion" value="cambiarpassword">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect btncerrar" id="btncerrar"
                                    data-dismiss="modal">Cancelar</button>
                                <button type="submit" id="btnchangepass"
                                    class="btn btn-info waves-effect waves-light">Confirmar</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /fin row modal -->