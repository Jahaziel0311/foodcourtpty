@extends('admin.plantilla.principalDT')

@section('titulo')Admin-Pantallas @endsection
@section('titulo_pagina') Pantallas @endsection

@section('contenido')
<br>
<br>

<!--muestro el error-->
@include('admin.plantilla.error')
<!-- fin del error-->
<div class="row">
    <div class="col-lg-10 offset-lg-1">
        
        
        <div class="col-sm-2 offset-sm-10">
            <button class="btn btn-primary " id="btnAgregar"  data-toggle="modal" data-target="#crearPantalla">
                 <span class="btn-label"><i class="fas fa-plus"></i> </span><span class="btn-text">
                      Crear Pantalla
                </span>
            </button>
            @include('admin.plantilla.modals.pantalla.crearPantalla')
            {{-- @include('modals.ClienteModals') --}}
        </div>
           
        <div class="table-responsive ">
            <table id="zero_config" class="table ">
                <thead>
                    <tr class="bg-success text-white">
                        <th>id</th>
                        <th>Nombre</th>          
                        <th>Url</th>

                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pantallas as $fila)
                        <tr>
                            <td>{{$fila->id}}</td>
                            <td>{{$fila->nombre}}</td>

                            <td>{{$fila->url}}</td>


                            <td>
                            <button type="button" class="btn btn-success btn-sm" id="previewPantalla"                
                                        data-toggle="modal" data-target="#mostrarPantalla{{$fila->id}}" title="Ver">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    @include('admin.plantilla.modals.pantalla.mostrarPantalla')

                                    <a href="#" data-toggle="modal" data-target="#updatePantalla{{$fila->id}}">
                                    <button type="button" class="btn btn-primary btn-sm" id="editPantalla"                
                                         title="Editar">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    </a>
                                    @include('admin.plantilla.modals.pantalla.editarPantalla')

                                    
                                        <!-- <a href="{{route('admin.pantalla.delete', ['id' => $fila->id])}}" onclick="confirm('Desea eliminaresta pantalla?')"> -->
                                    <button type="button" data-target="#deletePantalla{{$fila->id}}" class="btn btn-danger btn-sm" id="deletePantalla"                
                                        data-toggle="modal"  title="Eliminar" >
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    @include('admin.plantilla.modals.pantalla.deletePantalla')
                                    

                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
                <tfoot>
                <tr >
                <tr class="bg-success text-white">
                    <th>id</th>
                    <th>Nombre</th>

                    <th>Url</th>


                    <th>Acciones</th>
                </tr>
                </tfoot>
            </table>
        </div>
            
        
    </div>
</div>
@endsection