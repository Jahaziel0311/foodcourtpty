@extends('admin.plantilla.principalDT')

@section('titulo')Admin-Restaurante @endsection
@section('titulo_pagina') Restaurantes @endsection

@section('contenido')
<br>
<br>
<div class="row">
    <div class="col-lg-10 offset-lg-1">
        
        
        <div class="col-sm-2 offset-sm-10">
            <button class="btn btn-primary "  data-toggle="modal" data-target="#addNewClienteModal">
                 <span class="btn-label"><i class="fas fa-plus"></i> </span><span class="btn-text">
                      Agrega Cliente
                </span>
            </button>
            {{-- @include('modals.ClienteModals') --}}
        </div>
           
        <div class="table-responsive ">
            <table id="zero_config" class="table ">
                <thead>
                    <tr class="bg-success text-white">
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
                            <td><span class="badge badge-pill badge-success">Activo</span></td>
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
                <tr class="bg-success text-white">
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
@endsection