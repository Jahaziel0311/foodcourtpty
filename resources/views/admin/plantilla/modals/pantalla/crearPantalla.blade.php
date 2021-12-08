<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="crearPantalla" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header ppcolor text-white">
            <h5 class="modal-title" id="myLargeModalLabel">Crear Pantallas</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>

            </div>
            <div class="modal-body">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="form-wrap">
                        <form action="{{route('admin.pantalla.insert')}}" method="POST" role="form" autocomplete="off" name="formulario">
                    @csrf
                
                                         <!--muestro el error-->
                                         @include('admin.plantilla.modals.pantalla.errorPantalla')
                                        <!-- fin del error-->
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">Nombre</label>
                    <input type="text" class="form-control" name="txtNombrePantalla" placeholder="Pantalla Prueba" required>
                    </div>
 
                </div>
                <div class="form-group">
                    <label for="inputAddress">Url</label>
                    <input type="text" class="form-control" name="txtUrl" placeholder="/admin/..." required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputState">Padre</label>
                    <select name="txtPadre" id="selectPadre" class="form-control" onchange="hideElements();" required>
                        <option>Seleccione una Opcion...</option>
                        <option value="0"  >Raiz</option>
                        @foreach($padre as $fila)
                            <option value="{{$fila->id}}">{{$fila->nombre}}</option>
                        @endforeach
                    </select>
                    </div>
                    <!-- <div class="form-group col-md-4">
                    <label for="inputState">Orden</label>
                    <select name="txtOrden" class="form-control">
                    <option selected>0</option>
                    @for($i=1; $i<=10; $i++ )
                        <option >{{$i}}</option>
                    @endfor
                    </select>
                    </div> -->
                    <div class="form-group col-md-6">
                    <label for="inputState">Estado</label>
                    <select name="txtEstado" class="form-control" required>
                        <option value="1" selected>Activo</option>
                        <option value="0" >Inactivo</option>
                    </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 diplay_none" id="div__changes-raiz">
                    <label for="inputState">Icono</label> <br>
                    <input type="text" class="form-control" name="txtIcono" placeholder="Nombre de icono" >
                    </div>
                    <div class="form-group col-md-4 diplay_none" id="div__changes-raiz2">
                    <label for="inputState">Color</label>
                    <input type="text" class="form-control" name="txtColor" placeholder="Color" >
                    </div>
                    <div class="form-group col-md-2 diplay_none" id="div__changes-raiz3">
                    <label for="inputState">Request</label>
                    <input type="text" class="form-control" name="txtRequest" placeholder="Request" >
                    </div>
                </div>

                                <div class="modal-footer">                                        
                                    <button type="submit" id="btnCrearMedicoModal"  class="btn sscolor text-white text-left">Crear</button>
                                </div>
            </form>
                        </div>
                    </div>
                </div>              

            </div>

        </div>

    </div>

</div>
