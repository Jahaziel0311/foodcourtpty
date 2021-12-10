<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Pagina en Contruccion">
    @if ($restaurante->carpeta->icono())
        <link href="{!!$restaurante->carpeta->icono()->url!!}" rel="icon">
    @else
        <link href="https://image.flaticon.com/icons/png/512/46/46420.png" rel="icon">
    @endif
    

    <!-- Fonts
    ============================================= -->
    <link href='http://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,700,900%7CRuthie%7CAbril+Fatface' rel='stylesheet' type='text/css'>

    <!-- Stylesheets
    ============================================= -->
    <link href="{{asset('assets/css/external.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/navigation.css')}}">
   

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="{{asset('assets/js/html5shiv.js')}}"></script>
      <script src="{{asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>{{$restaurante->nombre}}</title>
</head>

<body>
	<div class="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="wrapper clearfix">
<header id="navbar-spy" class="header header-1 header-transparent header-fixed">

                    

</header>
<!-- Hero Section
====================================== -->
<section id="slider" class="slider slide-overlay-dark">
	<!-- START REVOLUTION SLIDER 5.0 -->
	<div class="rev_slider_wrapper">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
                                
				<!-- slide 1 -->
				<li data-transition="slotfade-horizontal" 
					data-slotamount="default" 
					data-easein="Power4.easeInOut" 
					data-easeout="Power4.easeInOut" 
					data-masterspeed="2000">
					<!-- MAIN IMAGE -->
					<img src="{{asset('assets/images/banners/building.jpg')}}" alt="Slide Background Image"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-130" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--subheadline">Pagina en Construccion</div>
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-65" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1750,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--headline extend">{{$restaurante->nombre}}</div>
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="20" 
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--bio text-center">Pronto disponible</div>
					</div>
					
					<!-- LAYER NR. 4 -->
					{{-- <div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="100" 
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
                        data-frames='[{"delay":2250,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
						data-basealign="slide" 
						data-responsive_offset="on" 
						data-responsive="off">
						<div class="slide-action">
							<a class="btn btn--primary btn--inverse btn--rounded btn--lg" href="#shop">Menú</a>
						</div>
					</div> --}}
				</li>
                
			</ul>
		</div>
		<!-- END REVOLUTION SLIDER -->
	</div>
	<!-- END OF SLIDER WRAPPER -->
</section>



<!-- footer#1
============================================= -->
<footer id="footer" class="footer footer-1 text-center">
    {{-- <div class="divider--shape-dark"></div> --}}
    <!-- Widget Section
	============================================= -->
    {{-- <div class="footer--widget text--center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="footer--widget-content">
                        <h3>Nuestras Redes</h3>
                        <div class="footer--social-icons">
                            
                            {{-- @if ($restaurante->facebook_url!=null)
                                <a href="{{$restaurante->facebook_url}}"><i class="fa fa-facebook"></i></a>
                            @endif
                            @if ($restaurante->twitter_url!=null)
                                <a href="{{$restaurante->twitter_url}}"><i class="fa fa-twitter"></i></a>
                            @endif                          
                            
                            @if ($restaurante->instagram_url!=null)
                                <a href="{{$restaurante->instagram_url}}"><i class="fa fa-instagram"></i></a>
                            @endif

                            @if ($restaurante->whatsapp_url!=null)
                                <a href="{{$restaurante->whatsapp_url}}"><i class="fa fa-whatsapp"></i></a>
                            @endif                             

                            
                            <!-- <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-tripadvisor"></i></a> -->
                        </div>
                        <!-- .social-icons end -->
                    </div>
                </div>
                <!-- .col-md-4 end -->
                <div class="col-xs-12 col-sm-4 col-md-4">
                    {{-- <div class="footer--widget-content">
                        <img class="mb-20" src="{!!$restaurante->carpeta->logo_ligth()->url!!}" alt="logo">
                        <p>{{$restaurante->descripcion}}</p>
                    </div> 
                </div>
                <!-- .col-md-3 end -->

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="footer--widget-content">
                        <h3>Neswletter</h3>
                        <div class="widget--newsletter">
                            <form class="footer--social-newsletter mailchimp">
                                <input type="email" name="email" class="form-control" placeholder="Subscribe Our Newsletter">
                                <button type="submit">join</button>
                            </form>
                            <div class="subscribe-alert"></div>
                        </div>
                        <!-- .widget end -->
                    </div>
                </div>
                <!-- .col-md-3 end -->
            </div>
        </div>
        <!-- .container end -->
    </div> --}}
    <!-- .footer-widget end -->
    <!-- Copyrights
	============================================= -->
    <div class="footer--copyright text-center">
        <div class="divider--shape-dark2"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="contact-info">
                        <span>Calle 7ma Sur, BARRIO COLON, La Chorrera</span> -
                        <span>02 01065370701</span> -
                        <span>stylesolution.com</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <span>&copy; 2021 Style Solution, With Love by </span> <a href="http://www.stylesolutions.com">stylesolution.com</a>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </div>
    <!-- .footer-copyright end -->
</footer>
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>
<!-- RS5.0 Core JS Files -->
<script src="{{asset('assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0')}}"></script>
<script src="{{asset('assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<!-- RS Configration JS Files -->
<script src="{{asset('assets/js/rsconfig.js')}}"></script>


</body>

</html>