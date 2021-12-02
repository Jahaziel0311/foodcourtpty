<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="addNewRestauranteModal"  aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Crear Restaurante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="text-white">×</span></button>
                
            </div>
            <div class="modal-body">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form action="{{route('admin.restautante.insert')}}" method="POST" role="form" autocomplete="off">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label mb-10">Nombre del Restaurante</label>
                                        <input type="text" class="form-control"  placeholder="ej. Delicias de Mar" name="txtNombre"
                                             required>
                                    </div>
                                   <div class="form-group col-md-6">
                                        <label class="control-label mb-10">Usuario del Dueño</label>
                                        <input type="text" class="form-control"  placeholder="no debe contener espacios" 
                                             name="txtNombreDueño" required>                            
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label mb-10">Telefono del Dueño</label>
                                        <input type="text" class="form-control"  placeholder="ej. 6666-6666" 
                                             name="txtTelefono" required>                            
                                    </div> 
                                    <div class="form-group col-md-12">
                                        <label class="control-label mb-10">Email del Dueño</label>
                                        <input type="email" class="form-control"  placeholder="ej. dueño@restaurante.com" 
                                             name="txtEmail" required>                            
                                    </div>
                                                                        
                                    
                                </div>                               
                                
                                
                                <div class="modal-footer">                                        
                                    <button type="submit" id="btnCrearMedicoModal"  class="btn btn-primary text-left">Guardar</button>
                                </div>
                                
                
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
