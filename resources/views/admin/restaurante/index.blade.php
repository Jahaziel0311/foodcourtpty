@extends('admin.plantilla.principalDT')

@section('titulo')Admin-Restaurante @endsection
@section('titulo_pagina') Restaurantes @endsection

@section('contenido')
<div class="container-fluid">
    
    <div class="row col-lg-10 offset-lg-1">
        <div class="col-lg-12">
            
            @include('admin.plantilla.errores')
            
            <div class="col-sm-2 offset-sm-10">
                <button class="btn btn-primary "  data-toggle="modal" data-target="#addNewRestauranteModal">
                        <span class="btn-label"><i class="fas fa-plus"></i> </span><span class="btn-text">
                            Crear Restaurante
                    </span>
                </button>
                @include('admin.modal.restauranteModals')
            </div>
                
            <div class="table-responsive ">
                <table id="zero_config" class="table ">
                    <thead>
                        <tr class="ppcolor text-white">
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Dueño</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($resultado as $fila)
                            <tr>
                                <td>{{$fila->id}}</td>
                                <td>{{$fila->nombre}}</td>
                                <td>{{$fila->dueño()->nombre}}</td>
                                <td>{{$fila->dueño()->email}}</td>
                                <td>{{$fila->dueño()->telefono}}</td>
                                <td>
                                    @if ($fila->estado == 2)
                                        <span class="badge badge-pill badge-warning text-white">Sin Configurar</span></td>
                                    @elseif($fila->estado == 1)
                                        <span class="badge badge-pill badge-success">Activo</span></td>
                                    @else
                                        <span class="badge badge-pill badge-danger ">Desactivado</span></td>
                                    @endif
                                    
                                <td>
                                    <button type="button" class="btn btn-success btn-sm" id="editMedico"                
                                            data-toggle="modal" data-target="#editarClienteModal{{$fila->id}}" title="Ver">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    @if($permisos['update']==1)
                                        <button type="button" class="btn btn-primary btn-sm" id="editMedico"                
                                            data-toggle="modal" data-target="#editarClienteModal{{$fila->id}}" title="Editar">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        {{-- @include('modals.editarClienteModals') --}}
                                    @endif
                                    @if($permisos['delete']==1)
                                        <button type="button" class="btn btn-danger btn-sm" id="editMedico"                
                                            data-toggle="modal" data-target="#editarClienteModal{{$fila->id}}" title="Eliminar">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        {{-- @include('modals.editarClienteModals') --}}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                    <tfoot>
                    <tr >
                    <tr class="ppcolor text-white">
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Dueño</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
                
            
        </div>
    </div>
    
</div>

@endsection

@section('script')

@endsection