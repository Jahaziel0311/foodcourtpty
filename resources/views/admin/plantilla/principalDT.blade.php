<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/images/icono.ico')}}">
    <title>@yield('titulo')</title>
    <!-- Custom CSS -->
    <link href="{{asset('admin/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/libs/morris.js/morris.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('admin/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('admin.plantilla.topBar')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('admin.plantilla.sideBar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">@yield('titulo_pagina')</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>                    
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
			<div class="container-fluid">
				<!-- ============================================================== -->
				<!-- Info box -->
				<!-- ============================================================== -->
				<div class="card-group">
           			@yield('contenido')
				</div>
			</div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('admin.plantilla.footer')
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    @include('admin.plantilla.configuracion')
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    
    @yield('script')
	<script>
		$('#zero_config').DataTable( {
			 
			"language": {
				
				"processing": "Procesando...",
				"lengthMenu": "Mostrar _MENU_ Registros",
				"zeroRecords": "No se encontraron resultados",
				"emptyTable": "Ningún dato disponible en esta tabla",
				"info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
				"infoFiltered": "(filtrado de un total de _MAX_ registros)",
				"search": "Buscar:",
				"infoThousands": ",",
				"loadingRecords": "Cargando...",
				"paginate": {
					"first": "Primero",
					"last": "Último",
					"next": ">>",
					"previous": "<<"
				},
				"aria": {
					"sortAscending": ": Activar para ordenar la columna de manera ascendente",
					"sortDescending": ": Activar para ordenar la columna de manera descendente"
				},
				"buttons": {
					"copy": "Copiar",
					"colvis": "Visibilidad",
					"collection": "Colección",
					"colvisRestore": "Restaurar visibilidad",
					"copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
					"copySuccess": {
						"1": "Copiada 1 fila al portapapeles",
						"_": "Copiadas %d fila al portapapeles"
					},
					"copyTitle": "Copiar al portapapeles",
					"csv": "CSV",
					"excel": "Excel",
					"pageLength": {
						"-1": "Mostrar todas las filas",
						"1": "Mostrar 1 fila",
						"_": "Mostrar %d filas"
					},
					"pdf": "PDF",
					"print": "Imprimir"
				},
				"autoFill": {
					"cancel": "Cancelar",
					"fill": "Rellene todas las celdas con <i>%d<\/i>",
					"fillHorizontal": "Rellenar celdas horizontalmente",
					"fillVertical": "Rellenar celdas verticalmentemente"
				},
				"decimal": ",",
				"searchBuilder": {
					"add": "Añadir condición",
					"button": {
						"0": "Constructor de búsqueda",
						"_": "Constructor de búsqueda (%d)"
					},
					"clearAll": "Borrar todo",
					"condition": "Condición",
					"conditions": {
						"date": {
							"after": "Despues",
							"before": "Antes",
							"between": "Entre",
							"empty": "Vacío",
							"equals": "Igual a",
							"not": "No",
							"notBetween": "No entre",
							"notEmpty": "No Vacio"
						},
						"moment": {
							"after": "Despues",
							"before": "Antes",
							"between": "Entre",
							"empty": "Vacío",
							"equals": "Igual a",
							"not": "No",
							"notBetween": "No entre",
							"notEmpty": "No vacio"
						},
						"number": {
							"between": "Entre",
							"empty": "Vacio",
							"equals": "Igual a",
							"gt": "Mayor a",
							"gte": "Mayor o igual a",
							"lt": "Menor que",
							"lte": "Menor o igual que",
							"not": "No",
							"notBetween": "No entre",
							"notEmpty": "No vacío"
						},
						"string": {
							"contains": "Contiene",
							"empty": "Vacío",
							"endsWith": "Termina en",
							"equals": "Igual a",
							"not": "No",
							"notEmpty": "No Vacio",
							"startsWith": "Empieza con"
						}
					},
					"data": "Data",
					"deleteTitle": "Eliminar regla de filtrado",
					"leftTitle": "Criterios anulados",
					"logicAnd": "Y",
					"logicOr": "O",
					"rightTitle": "Criterios de sangría",
					"title": {
						"0": "Constructor de búsqueda",
						"_": "Constructor de búsqueda (%d)"
					},
					"value": "Valor"
				},
				"searchPanes": {
					"clearMessage": "Borrar todo",
					"collapse": {
						"0": "Paneles de búsqueda",
						"_": "Paneles de búsqueda (%d)"
					},
					"count": "{total}",
					"countFiltered": "{shown} ({total})",
					"emptyPanes": "Sin paneles de búsqueda",
					"loadMessage": "Cargando paneles de búsqueda",
					"title": "Filtros Activos - %d"
				},
				"select": {
					"1": "%d fila seleccionada",
					"_": "%d filas seleccionadas",
					"cells": {
						"1": "1 celda seleccionada",
						"_": "$d celdas seleccionadas"
					},
					"columns": {
						"1": "1 columna seleccionada",
						"_": "%d columnas seleccionadas"
					}
				},
				"thousands": "."
			
			}
			@yield('ordenarTabla')
		} );
	</script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin//assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- apps -->
    <script src="{{asset('admin/dist/js/app.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/app.init.js')}}"></script>
    <script src="{{asset('admin/dist/js/app-style-switcher.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('admin/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('admin/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admin/dist/js/custom.min.js')}}"></script>
    <!--This page plugins -->
    <script src="{{asset('admin/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/pages/datatable/datatable-basic.init.js')}}"></script>
</body>

</html>