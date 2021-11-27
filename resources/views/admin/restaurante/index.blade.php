@extends('admin.plantilla.principalDT')

@section('titulo')Admin-Restaurante @endsection
@section('titulo_pagina') Restaurantes @endsection

@section('contenido')
<br>
<br>
<div class="row">
    <div class="col-lg-10 offset-lg-1">
        
           
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
                            <td>botones</td>
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