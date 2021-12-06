<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="mostrarPantalla{{$fila->id}}" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="myLargeModalLabel">Pantallas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

            </div>
            <div class="modal-body">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form action="" method="POST" role="form" autocomplete="off">
                                @csrf
                                <h1>Datos de Pantalla</h1> <br>
                                <div class="row">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label for="inputEmail4">Nombre de la pantalla</label>
                                            <p>{{$fila->nombre}}</p>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12" id="registroDiv">
                                        <label for="">Url</label>
                                        <p>{{$fila->url}}</p>
                                    </div>
                                    <div class="form-group col-md-8 col-sm-12 col-xs-12">
                                        <label for="inputState">Padre</label>
                                        @if($fila->padre == 0)
                                            <p>Raiz</p>
                                        @else
                                        @foreach($pantallas as $pantalla)
                                            @if($fila->padre == $pantalla->id)
                                            <p>{{$pantalla->nombre}}</p>
                                            @endif
                                        @endforeach
                                        @endif
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                        <label for="inputState">Estado</label>
                                        @if($fila->estado == 1)
                                        <p>Activo</p>
                                        @else
                                        <p>Inctivo</p>
                                        @endif
                                    </div>
                                    @if($fila->padre == 0)
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12 " id="div__changes-raiz" >
                                         <label for="inputState">Icono</label> <br>
                                         <p>{{$fila->icono}}</p>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12 " id="div__changes-raiz2">
                                         <label for="inputState">Color</label>
                                          <p>{{$fila->color}}</p>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12 " id="div__changes-raiz3">
                                         <label for="inputState">Request</label>
                                        <p>{{$fila->request}}</p>
                                    </div>
                                
                                    @endif

                                    
                                </div>                                
                               
                                @if(Request::url() === env('APP_URL').'/orden_laboratorio/create')
                                
                                    <input type="hidden" name="esModal" id="esModal" class="form-control form-control-sm" value="2">

                                @else
                                    <input type="hidden" name="esModal" id="esModal" class="form-control form-control-sm" value="1">
                                @endif
                                <input type="hidden" name="txtCedula2" id="txtCedula2" class="form-control form-control-sm" value="">
                                

                                <div class="modal-footer">                                        
                                    <button type="submit" id="btnCrearMedicoModal"  class="btn btn-primary text-left">Actualizar Pantalla</button>
                                </div>
                                
                
                            </form>
                        </div>
                    </div>
                </div>              

            </div>

        </div>

    </div>

</div>
