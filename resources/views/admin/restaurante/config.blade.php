@extends('admin.plantilla.principal')

@section('titulo')Admin-Configuracion @endsection
@section('titulo_pagina') Configura tu Restaurante @endsection

@section('contenido')

@include('admin.plantilla.errores')
<div class="container-fluid col-lg-8 offset-lg-2">
    

        <form action="{{route('admin.restautante.config.save')}}" method="POST" role="form" autocomplete="off">
                @csrf
                <div class="form-row">
                       
                        <div class="form-group col-md-12">
                                <label class="control-label mb-10">Nombre del Restaurante <span class="text-danger">*</span></label>
                                <input type="text" class="form-control"  placeholder="ej. Delicias de Mar" value="{{$restaurante->nombre}}" name="txtNombre"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                                <label class="control-label mb-10">Saludo <span class="text-danger">*</span></label>
                                <input type="text" class="form-control"  placeholder="ej. Bienvenidos"  name="txtSaludo" 
                                @if ($restaurante->saludo != null)
                                        value= "{{$restaurante->saludo}}"
                                @endif
                                required>
                        </div>
                        <div class="form-group col-md-6">
                                <label class="control-label mb-10">Slogan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control"  placeholder="ej. Somos los Mejores"  name="txtSlogan"
                                @if ($restaurante->slogan != null)
                                        value= "{{$restaurante->slogan}}"
                                @endif
                                required>
                        </div>
                        <div class="form-group col-md-12">                        
                                <label class="control-label mb-10">Descripcion del Restaurante <span class="text-danger">*</span></label>     
                                <textarea cols="80" id="testedit" name="txtTextoPrincipal" rows="10" data-sample="1"
                                        data-sample-short required>
                                @if ($restaurante->texto_principal != null)
                                        {!!$restaurante->texto_principal!!}
                                @endif
                                </textarea>                            
                        </div>
                        <div class="form-group col-md-6">
                                <label class="control-label mb-10"><i class="fab fa-facebook"></i> Facebook</label>
                                <input type="text" class="form-control"  placeholder="www.facebook.com/su_restaurante"  name="txtFacebook"
                                @if ($restaurante->facebook_url != null)
                                        value= "{{$restaurante->facebook_url}}"
                                @endif
                                >
                        </div>
                        <div class="form-group col-md-6">
                                <label class="control-label mb-10"><i class="fab fa-instagram"></i> Instagram</label>
                                <input type="text" class="form-control"  placeholder="www.instagram.com/su_restaurante"  name="txtInstagram"
                                @if ($restaurante->instagram_url != null)
                                        value= "{{$restaurante->instagram_url}}"
                                @endif
                                >
                        </div>
                        <div class="form-group col-md-6">
                                <label class="control-label mb-10"><i class=" fab fa-twitter"></i> Twitter</label>
                                <input type="text" class="form-control"  placeholder="www.twitter.com/su_restaurante"  name="txtTwitter"
                                @if ($restaurante->twitter_url != null)
                                        value= "{{$restaurante->twitter_url}}"
                                @endif
                                >
                        </div>
                        <div class="form-group col-md-6">
                                <label class="control-label mb-10"><i class="fab fa-whatsapp"></i> Whatsapp</label>
                                <input type="text" class="form-control"  placeholder="www.whatsapp.com/su_restaurante"  name="txtWhatsapp"
                                @if ($restaurante->whatsapp_url != null)
                                        value= "{{$restaurante->whatsapp_url}}"
                                @endif
                                >
                        </div>

                        <div class="form-group col-md-12">                        
                                <label class="control-label mb-10">Informacion General <span class="text-danger">*</span></label>     
                                <textarea cols="80" id="testedit1" name="txtDescripcion" rows="10" data-sample="1"
                                        data-sample-short required>
                                        @if ($restaurante->descripcion != null)
                                        {!!$restaurante->descripcion!!}
                                        @endif
                                </textarea>                            
                        </div>
                        <div class="form-group col-md-4">
                                <label class="control-label mb-10">El codigo Qr de tu Menú es:</label>
                        </div>
                        <div class="form-group col-md-8">
                                {{QrCode::generate(env('APP_URL').$restaurante->slug)}}
                        </div>
                   
                                                        
                    
                </div>                               
                
                
                <div class="modal-footer">                                        
                    <button type="submit" id="btnCrearMedicoModal"  class="btn btn-primary text-left">Siguiente</button>
                </div>
                

            </form>
    
</div>
@endsection
@section('script')
<script src="{{asset('admin/assets/libs/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('admin/assets/libs/ckeditor/samples/js/sample.js')}}"></script>
    <script>
        //default
        initSample();

        //inline editor
        // We need to turn off the automatic editor creation first.
        CKEDITOR.disableAutoInline = true;

        CKEDITOR.inline('editor2', {
            extraPlugins: 'sourcedialog',
            removePlugins: 'sourcearea'
        });

        var editor1 = CKEDITOR.replace('editor1', {
            extraAllowedContent: 'div',
            height: 460
        });
        editor1.on('instanceReady', function () {
            // Output self-closing tags the HTML4 way, like <br>.
            this.dataProcessor.writer.selfClosingEnd = '>';

            // Use line breaks for block elements, tables, and lists.
            var dtd = CKEDITOR.dtd;
            for (var e in CKEDITOR.tools.extend({}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent)) {
                this.dataProcessor.writer.setRules(e, {
                    indent: true,
                    breakBeforeOpen: true,
                    breakAfterOpen: true,
                    breakBeforeClose: true,
                    breakAfterClose: true
                });
            }
            // Start in source mode.
            this.setMode('source');
        });
    </script>
    <script data-sample="1">
        CKEDITOR.replace('testedit', {
            height: 150
        });
    </script>
    <script data-sample="2">
        CKEDITOR.replace('testedit1', {
            height: 150
        });
    </script>
    <script data-sample="3">
        CKEDITOR.replace('testedit2', {
            height: 400
        });
    </script>
    <script data-sample="4">
        CKEDITOR.replace('tool-location', {
            toolbarLocation: 'bottom',
            // Remove some plugins that would conflict with the bottom
            // toolbar position.
            removePlugins: 'elementspath,resize'
        });
    </script>
    
@endsection