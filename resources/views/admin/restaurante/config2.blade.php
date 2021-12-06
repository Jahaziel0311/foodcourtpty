@extends('admin.plantilla.principal')

@section('titulo')Admin-Configuracion @endsection
@section('titulo_pagina') Sigue con la Configuracion @endsection

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/libs/dropzone/dist/min/dropzone.min.css')}}">
@endsection

@section('contenido')

@include('admin.plantilla.errores')
<div class="container-fluid col-lg-8 offset-lg-2">
    

        <form action="{{route('admin.restautante.config.save2')}}" method="POST" role="form" autocomplete="off">
                @csrf
                <div class="form-row">
                       
                        
                        <div class="form-group col-md-12">
                                <label class="control-label mb-10">Ingrese la imagen de su logo</label>
                                <div class="fallback">
                                        <input name="logo" required type="file" accept=".png, .ico" />
                                </div>
                        </div>
                        
                   
                                                        
                    
                </div>                               
                
                
                <div class="modal-footer"> 
                        <a href="{{route('admin.index')}}" id="btnCrearModal"  class="btn btn-danger text-rigth">Cancelar</a>
                        <a href="{{ route('admin.restautante.config') }}" class="btn btn-default " role="button" aria-pressed="true">Atras</a>                                       
                        <button type="submit" id="btnCrearMedicoModal"  class="btn btn-primary text-left">Guardar</button>
                </div>
                

            </form>
    
</div>
@endsection
@section('script2')
        <script src="{{asset('admin/assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
  
        
@endsection