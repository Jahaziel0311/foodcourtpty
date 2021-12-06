@extends('admin.plantilla.principal')

@section('titulo')Admin-Configuracion @endsection
@section('titulo_pagina') Asignar Permisos a Roles @endsection

@section('contenido')

@include('admin.plantilla.errores')
<div class="container-fluid col-lg-8 offset-lg-2">
    

        <form action="{{route('admin.pantalla.asignar.save')}}" method="POST" role="form" autocomplete="off">
                @csrf
                <div class="form-row">
                       
                        
                        <div class="form-group col-lg-8 offset-lg-2">
                                <label for="">Seleccione un Rol</label>
                                <select class="form-control" name="selectRol" id="" onchange="top.location.href = this.options[this.selectedIndex].value">
                                        <option value="asignar/">Seleccione un Rol</option>
                                        @foreach($roles as $fila_rol)
                                        
                                                @if(isset($rol))
                                                        @if($fila_rol->id == $rol->id)
                                                                <option value="{{$fila_rol->id}}" selected>{{$fila_rol->nombre}}</option>
                                                        @else  
                                                                <option value="{{$fila_rol->id}}">{{$fila_rol->nombre}}</option>
                                                        @endif  
                                                @else    
                                                        <option value="{{$fila_rol->id}}">{{$fila_rol->nombre}}</option>
                                                @endif                                      
                                                

                                                
                                        @endforeach
                                
                                </select>
                        </div> 

                        <table class="table table-striped table-inverse table-responsive">
                                <tbody>
                                  @foreach($pantallas as $pantalla)
                                    @if ($pantalla->padre ==0)
                                      <tr>  
                                        <td scope="row"> 
                                          <div class="row ">               
                                            
                                            @if(in_array($pantalla->id, $lista_pantallas))                    
                                              <div class="col-md-4">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="pantallas_id[]" id="" value="{{$pantalla->id}}" checked>
                                                    <h5>{{$pantalla->nombre}}</h5>
                                                  </label>
                                                </div>
                                              </div>
                                            @else
                      
                                              <div class="col-md-4">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="pantallas_id[]" id="" value="{{$pantalla->id}}">
                                                    <h5>{{$pantalla->nombre}}</h5>
                                                  </label>
                                                </div>
                                              </div>
                      
                                            @endif
                                            @foreach ($pantallas as $sub_pantalla)
                                              @if ($sub_pantalla->padre == $pantalla->id)
                                                
                                                @if(in_array($sub_pantalla->id, $lista_pantallas))                    
                                                  <div class="col-md-4">
                                                    <div class="form-check">
                                                      <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="pantallas_id[]" id="" value="{{$sub_pantalla->id}}" checked>
                                                        <h5>{{$sub_pantalla->nombre}}</h5>
                                                      </label>
                                                    </div>
                                                  </div>
                                                @else
                      
                                                  <div class="col-md-4">
                                                    <div class="form-check">
                                                      <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="pantallas_id[]" id="" value="{{$sub_pantalla->id}}">
                                                        <h5>{{$sub_pantalla->nombre}}</h5>
                                                      </label>
                                                    </div>
                                                  </div>
                      
                                                @endif
                                                  
                                              @endif
                                              
                                                
                                            @endforeach
                                          </div> 
                                        </td>
                                      </tr>
                                    @endif
                                        
                                  @endforeach
                                </tbody>
                        </table>

                        
                                
                   
                                                        
                    
                </div>                               
                
                
                <div class="modal-footer">                                        
                    <button type="submit" id="btnCrearMedicoModal"  class="btn btn-primary text-left">Guardar</button>
                </div>
                

            </form>
    
</div>
@endsection
@section('script')

   
    
@endsection