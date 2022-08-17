
<div class=" breadcrumbs">
<h4 class="text-center">Contratos</h4>
    <div class="row">
        <div class="pl-4">
            <div class="text-center">
            <!-- Button trigger modal -->
            <button id="btncrearreunion" type="button" data-toggle='modal' data-target='#modalagregar'
                    data-toggle='tooltip' data-placement='top' class="btn btn-danger"><i class="ti-plus"></i>
                    Crear Contrato</button>
            </div>
        </div>
    </div>
        <br />


    <!-- Tab panes -->
                                        <div class="tab-content" id="contenedortabla1">
                                        <div class="table-responsive m-t-40">
                                            <table id="certificacion"
                                                class="display nowrap table table-hover table-striped table-bordered"
                                                cellspacing="0" width="100%">
                                                <thead>
                                                    <tr >
                                                  <th>Contrato</th>
                                                  <th>Valor del contrato</th>
                                                  <th>Fecha Inicio</th>
                                                  <th>Cédula</th>
                                                  <th>Acciones</th>
                                                
                                                


                                                        
                                                    </tr>
                                                </thead>

                                            </table>
                                        </div>
                                    </div>



<!-- Modal addd-->
<div class="modal fade" id="modalagregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Crear Contrato</h5>
</div>

<form method="POST" autocomplete="off" id="formcertificado" enctype="multipart/form-data">
    <div class="modal-content">
        <div class="modal-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md 6">
                        <label for="nombre">Numero de contrato:</label>
                        <input type="text" name="numeroc" id="numeroc" placeholder="ej: 01/2000" class="form-control">
                    </div>
                    <div class="col-md 6">
                        <label for="nombre">Prestar el servicio de:</label>
                        <textarea type="text" name="tipoc" id="tipoc" placeholder="ej: Operador de maquinaria"  class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <br />

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md 6">
                        <label for="nombre">Sector Propietario:</label>
                        <textarea type="text" name="sector" placeholder="ej: Secretaria de obras publicas"  id="sector" class="form-control"></textarea>
                        <!-- <input type="text" name="sector" placeholder="ej: Secretaria de obras publicas"  id="sector" class="form-control"> -->
                    </div>
                    <div class="col-md 6">
                        <label for="nombre">Objetivo:</label>
                        <textarea type="text" name="empleo" id="empleo" placeholder="ej: Trabajo de explanacion..."  class="form-control"></textarea>
                        <!-- <input type="text" name="empleo" id="empleo" placeholder="Objetivo"  class="form-control"> -->
                    </div>
                </div>
            </div>
            <br />
            
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md 6">
                        <label for="nombre">Valor del contrato:</label>
                        <input type="num" name="valor" id="valor" placeholder="ej: 1000000"  class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="nombre">Cedula del empleado: </label>
                        <input type="text" name="identificacion" id="identificacion" placeholder="ej: 123456789" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Fecha de inicio:</label>
                                <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy" id="fechareunion"
                                    name="fechainicial">
                    </div>
        
                    <div class="col-md 6">
                        <label for="nombre">Duracion del contrato: </label>
                        <input type="text" name="duracion" id="duracion" placeholder="ej: 5 meses y 10 dias" class="form-control">
                    </div>

                </div>
            </div>


            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <label for="nombre">Departamento:</label>
                        <input type="text" name="departamento" placeholder="ej: Cauca" id="departamento" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="nombre">Municipio:</label>
                        <input type="text" name="municipio" id="municipio"  placeholder="ej: Popayán" class="form-control">
                    </div>
                </div>
            </div>

          
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-danger waves-effect"
                                data-dismiss="modal">Cerrar</button>           
            <input type="submit" name="action" id="action" class="btn btn-info" value="Crear">
        </div>
    </div>
</form>
</div>     
</div>
</div>


<!-- Modal editar-->
<div class="modal fade" id="modaleditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabeleditar">Editar Contrato</h5>
</div>

<form autocomplete="off" method="POST" id="editar" enctype="multipart/form-data">
    <div class="modal-content">
        <div class="modal-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md 6">
                        <label for="nombre">Numero de contrato:</label>
                        <input type="text" name="numerocup" id="numerocup" class="form-control">
                    </div>
                    <div class="col-md 6">
                        <label for="nombre">Prestar el servicio de:</label>
                        <textarea type="text" name="tipocup" id="tipocup"  class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <br />
            
            <div class="col-md-12">
                <div class="row">
                <div class="col-md-6">
                        <label for="nombre">Sector Propietario:</label>
                        <textarea type="text" name="sectorup" id="sectorup"  class="form-control"></textarea>
                    </div>
                    <div class="col-md 6">
                        <label for="nombre">Objetivo:</label>
                        <textarea type="text" name="empleoup" id="empleoup" class="form-control"></textarea>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Fecha de inicio:</label>
                                <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy" id="fechainicialup"
                                    name="fechainicialup">
                    </div>
                    
                    <div class="col-md 6">
                        <label for="nombre">Duracion del contrato:</label>
                        <input type="text" name="duracionup" id="duracionup" class="form-control">
                    </div>

                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <label for="nombre">Cedula del empleado:</label>
                        <input type="text" name="identificacionup" id="identificacionup" class="form-control">
                    </div>
                    <div class="col-md 6">
                        <label for="nombre">Valor del contrato:</label>
                        <input type="num" name="valorup"  id="valorup"  class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <label for="nombre">Departamento </label>
                        <input type="text" name="departamentoup" id="departamentoup" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="nombre">Municipio</label>
                        <input type="text" name="municipioup" id="municipioup"  class="form-control">
                    </div>
                </div>
            </div>

          
        </div>

        <div class="modal-footer">
            <input type="hidden" name="id" id="id">
            <button type="button" class="btn btn-danger waves-effect"
                                data-dismiss="modal">Cerrar</button>           
            <input type="submit" name="btnguardarup" id="btnguardarup" class="btn btn-info" value="Actualizar">
        </div>
    </div>
</form>
</div>     
</div>
</div>

