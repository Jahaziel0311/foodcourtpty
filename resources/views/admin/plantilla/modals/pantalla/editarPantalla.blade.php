<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="updatePantalla{{$fila->id}}" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header ppcolor text-white">
            <h5 class="modal-title " id="myLargeModalLabel">Pantallas</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>

            </div>
            <div class="modal-body">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form action="{{route('admin.pantalla.update')}}" method="POST" role="form" autocomplete="off">
                                @csrf

                                <h1>Actualizar Pantalla</h1> <br>
                                         <!--muestro el error-->
                                         @include('admin.plantilla.modals.pantalla.errorPantalla')
                                        <!-- fin del error-->
                                <div class="row">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label for="inputEmail4">Nombre de la pantalla</label>
                                        <input type="text" class="form-control" value="{{$fila->nombre}}" id="inputEmail4" placeholder="Ejemplo:Juan" name="txtNombrePantalla""
                                            required>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12" id="registroDiv">
                                        <label for="">Url</label>
                                        <input type="text" value="{{$fila->url}}"
                                            class="form-control" name="txtUrl" id="txtRegistro2" aria-describedby="helpId" 
                                            onfocusout="validarRegistro2()" placeholder="Ingrese el numero de registro del Medico" required
                                            value="">
                                        <small id="AlertaRegistro2" class="form-text text-muted"></small>
                                        <small id="AlertaMedico2" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group col-md-8 col-sm-12 col-xs-12">
                                        <label for="inputState">Padre</label>
                                        <select name="txtPadre" id="selectPadre" class="form-control" onchange="hideElements();" required>
                                        @if($fila->padre == 0)
                                            <option value="0" selected >Raiz</option>
                                        @else
                                            <option value="0"  >Raiz</option>
                                        @endif
                                        @foreach($pantallas as $pantallas)
                                            @if($fila->padre == $pantallas->id)
                                             <option value="{{$pantallas->id}}" selected >{{$pantallas->nombre}}</option>
                                            @elseif($pantallas->padre == 0)
                                                <option value="{{$pantallas->id}}"  >{{$pantallas->nombre}}</option>
                                                
                                            @endif
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                        <label for="inputState">Estado</label>
                                        <select name="txtEstado" class="form-control" required>
                                            <option value="1" selected>Activo</option>
                                            <option value="0" >Inactivo</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4 col-sm-12 col-xs-12 " id="div__changes-raiz" >
                                         <label for="inputState">Icono</label> <br>
                                         <input type="text" class="form-control" name="txtIcono" placeholder="Nombre de icono" >
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12 " id="div__changes-raiz2">
                                         <label for="inputState">Color</label>
                                          <input type="text" class="form-control" name="txtColor" placeholder="Color" >
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12 " id="div__changes-raiz3">
                                         <label for="inputState">Request</label>
                                        <input type="text" class="form-control" name="txtRequest" placeholder="Request" >
                                    </div>
                                
                                    
                                </div>                                
                               

                                <input type="hidden" name="txtId" id="txtId" class="form-control form-control-sm" value="{{$fila->id}}">
                                

                                <div class="modal-footer">                                        
                                    <button type="submit" id="btnCrearMedicoModal"  class="btn sscolor text-white text-left">Actualizar</button>
                                </div>
                                
                
                            </form>
                        </div>
                    </div>
                </div>              

            </div>

        </div>

    </div>

</div>
