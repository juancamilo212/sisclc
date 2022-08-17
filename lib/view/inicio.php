<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="login-logo">
                    <a href="inicio">
                        <img class="align-content" src="assets/img/logo4.png" alt="">
                    </a>
                </div>
                        </div>
                        <div class="col-md-6">
                        <div class="login-logo">
                    <a href="inicio">
                        <img class="align-content" src="assets/img/mininterior.png" alt="">
                    </a>
                </div>
                        </div>
                    </div>
                </div>
<hr color="red">              
</br>

                <div class="login-form">
                        <div class="col-md-12">
                            <label>Numero De Cedula</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" value=<?=$_SESSION['us_cedula']?> disabled class="form-control" name="cedulaid" id="cedulaid" required placeholder="CC">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" onclick="Vercertificado();"  class="btn btn-danger btn-flat m-b-30 m-t-30">Generar Certificado</button>
                                </div>
                            </div>
                            </div>
                    </div>
</br>
</br>
                      <!-- Tab panes -->
                      <div class="tab-content" id="contenedortabla1">
                                        <div class="table-responsive m-t-40">
                                            <table id="inicio"
                                                class="display nowrap table table-hover table-striped table-bordered"
                                                cellspacing="0" width="100%">
                                                <thead>
                                                    <tr >
                                                  <th># Contrato</th>
                                                  <th>Valor del contrato</th>
                                                  <th>Fecha Inicio</th>
                                                  <th>Departamento</th>
                                                  <th>Cedula</th>
                              
                                                    </tr>
                                                </thead>

                                            </table>
                                        </div>
                                    </div>
                         
            </div>
        </div>
    </div>

   