<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="deletePantalla{{$fila->id}}" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
            <h5 class="modal-title" id="myLargeModalLabel">Pantallas | Eliminar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

            </div>
            <div class="modal-body">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form action="" method="POST" role="form" autocomplete="off">
                                @csrf
                                <div class="modal-body">
                                <h4 >{{$fila->nombre}}</h4>
                                    <p>Desea eliminar esta pantalla </p>
                                </div>

                                                            <div class="modal-footer">
                                    <a href="{{route('admin.pantalla.delete', ['id' => $fila->id])}}">
                                    <button type="button" class="btn btn-danger">Elimiar</button>
                                    </a>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                                
                
                            </form>
                        </div>
                    </div>
                </div>              

            </div>

        </div>

    </div>

</div>
