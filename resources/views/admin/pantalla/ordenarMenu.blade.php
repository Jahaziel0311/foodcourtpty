@extends('admin.plantilla.principal')

@section('titulo')Admin-Configuracion @endsection
@section('titulo_pagina') Ordenar Menú @endsection

@section('contenido')

@include('admin.plantilla.errores')
<div class="container-fluid col-lg-8 offset-lg-2">
    

        <form action="{{route('admin.pantallas.ordenar.save')}}" method="POST" role="form" autocomplete="off">
                @csrf
                <div class="row">
                  <div class="col-lg-8 col-md-12 offset-lg-2">
                      <div class="card">
                          <div class="card-body">
                              
                              <div class="myadmin-dd dd" id="nestable">
                                  <ol class="dd-list"> 
                                    @foreach ($pantallas as $pantalla_menu)
                                                  
                                      <li class="dd-item" data-id="{{$pantalla_menu->id}}">
                                        <div class="dd-handle"> {{$pantalla_menu->nombre}}</div>
                                        <ol class="dd-list">
                                          @foreach ($pantalla_menu->sub_menu() as $sub_menu)
                                            <li class="dd-item" data-id="{{$sub_menu->id}}">
                                              <div class="dd-handle"> {{$sub_menu->nombre}} </div>
                                            </li>
                                          @endforeach
                                                                                          
                                        </ol>
                                      </li>
                                      
                                      
                                    @endforeach                                    
                                     
                                  </ol>
                              </div>
                          </div>
                      </div>
                  </div>                             
                </div>
                
                <div class="modal-footer"> 
                    <input type="hidden" name="inputOrden" id="inputOrden" class="form-control" value="">                                       
                    <button type="submit" id="btnCrearMedicoModal"  class="btn btn-primary text-left">Guardar</button>
                </div>
                

            </form>
    
</div>
@endsection
@section('script2')

<script src="{{asset('admin/dist/js/custom.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/nestable/jquery.nestable.js')}}"></script>
<script>$(document).ready(function()
  {
  
      var updateOutput = function(e)
      {
          var list   = e.length ? e : $(e.target),
              output = list.data('output');
          if (window.JSON) {
              output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
          } else {
              output.val('JSON browser support required for this demo.');
          }
      };
  
      // activate Nestable for list 1
      $('#nestable').nestable({
          group: 1
      })
      .on('change', updateOutput);
  
      
      updateOutput($('#nestable').data('output', $('#inputOrden')));  
  
      $('#nestable-menu').on('click', function(e)
      {
          var target = $(e.target),
              action = target.data('action');
          if (action === 'expand-all') {
              $('.dd').nestable('expandAll');
          }
          if (action === 'collapse-all') {
              $('.dd').nestable('collapseAll');
          }
      });
  
      $('#nestable3').nestable();
  
  });
</script>
    
@endsection