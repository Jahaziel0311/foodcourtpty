@extends('admin.plantilla.principalDT')

@section('titulo')Admin-Pantallas @endsection
@section('titulo_pagina') Crear Pantallas @endsection

@section('contenido')
<br>
<br>

<!--muestro el error-->
@include('admin.plantilla.error')
<!-- fin del error-->


    <div class="container-fluid col-lg-8 offset-lg-2">
        <form action="" method="POST" role="form" autocomplete="off" name="formulario">
                    @csrf
                
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
                    <option value="0"  >Raiz</option>
                    @foreach($pantallas as $fila)
                        <option value="{{$fila->id}}" selected>{{$fila->nombre}}</option>
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
                    <button type="submit"   class="btn btn-primary text-left">Guardar</button>
                </div>
            </form>
        </div>
            
        
    </div>

@endsection