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
    <meta name="description" content="Elegant Restaurant & Cafe Html5 Template by zytheme">
    <link href="{{asset('assets/images/favicon/favicon.png')}}" rel="icon">

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
    <nav id="primary-menu" class="navbar navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
                <a class="logo" href="index.html">
					<img class="logo-light" src="{{asset('assets/images/logo/logo-light.png')}}" alt="Steakin Logo" draggable="false">
					<img class="logo-dark" src="{{asset('assets/images/logo/logo-dark.png')}}" alt="Steakin Logo" draggable="false">
				</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                <ul class="nav navbar-nav nav-pos-right navbar-left">
                    <!-- Home Menu -->
<li class="has-dropdown mega-dropdown active">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">home</a>
    <ul class="dropdown-menu mega-dropdown-menu">
        <li>
            <div class="container">
                <div class="row">
                    <!-- Column #1 -->
                    <div class="col-md-3">
                        <ul>
                            <li>
                                <a href="index.html">home main</a>
                            </li>
                            <li>
                                <a href="homepage-2.html">homeoage 2</a>
                            </li>
                            <li>
                                <a href="homepage-3.html">homeoage 3</a>
                            </li>
                            <li>
                                <a href="homepage-4.html">homeoage 4</a>
                            </li>
                        </ul>
                    </div>
                    <!-- .col-md-3 end -->

                    <!-- Column #2 -->
                    <div class="col-md-3">
                        <ul>
                            <li>
                                <a href="homepage-5.html">homepage 5</a>
                            </li>
                            <li>
                                <a href="homepage-6.html">homepage 6</a>
                            </li>
                            <li>
                                <a href="homepage-7.html">homepage 7</a>
                            </li>
                            <li>
                                <a href="homepage-8.html">homepage 8</a>
                            </li>
                        </ul>
                    </div>
                    <!-- .col-md-2 end -->

                    <!-- Column #3 -->
                    <div class="col-md-3">
                        <ul>
                            <li>
                                <a href="homepage-9-boxed.html">homepage 9 (boxed)</a>
                            </li>
                            <li>
                                <a href="homepage-10-wide.html">homepage 10 (wide)</a>
                            </li>
                            <li>
                                <a href="homepage-11-dark.html">homepage 11 (dark)</a>
                            </li>
                            <li>
                                <a href="homepage-12-shop.html">homepage 12 (shop)</a>
                            </li>
                        </ul>
                    </div>
                    <!-- .col-md-3 end -->

                    <!-- Column #3 -->
                    <div class="col-md-3">
                        <ul>
                            <li>
                                <a href="homepage-rtl.html">homepage RTL</a>
                            </li>
                            <li>
                                <a href="homepage-arabic.html">homepage Arabic</a>
                            </li>
                        </ul>
                    </div>
                    <!-- .col-md-3 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- container end -->
        </li>
    </ul>
    <!-- .mega-dropdown-menu end -->
</li>
<!-- li end -->

<!-- About Menu -->
<li class="has-dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">About</a>
    <ul class="dropdown-menu">
        <li>
            <a href="page-about.html">our story</a>
        </li>
        <li>
            <a href="page-chefs.html">our chefs</a>
        </li>
        <li>
            <a href="page-contacts.html">contact us</a>
        </li>
        <li>
            <a href="page-faqs.html">FAQs</a>
        </li>
        <li>
            <a href="page-testimonials.html">guestbook</a>
        </li>
        <li>
            <a href="page-gallery.html">gallery</a>
        </li>

    </ul>
</li>
<!-- li end -->

<!-- About Menu -->
<li class="has-dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle  menu-item" data-hover="pages">Menu</a>
    <ul class="dropdown-menu">
        <li>
            <a href="menu-board.html">menu board</a>
        </li>
        <li>
            <a href="menu-classic.html">menu classic</a>
        </li>
        <li>
            <a href="menu-gallery.html">menu gallery</a>
        </li>
        <li>
            <a href="menu-grid.html">menu grid</a>
        </li>
        <li>
            <a href="menu-simple.html">menu simple</a>
        </li>
    </ul>
</li>
<!-- li end -->

<li>
    <a class="menu-item" href="page-book-table.html">book a table</a>
</li>

<!-- Features Menu-->
<li class="has-dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">features</a>
    <ul class="dropdown-menu">
        <li class="dropdown-submenu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">revolution sliders</a>
            <ul class="dropdown-menu">
                <li class="has-dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Sliders 1</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="slider-1.html">slider 1</a>
                        </li>
                        <li>
                            <a href="slider-2.html">slider 2</a>
                        </li>
                        <li>
                            <a href="slider-3.html">slider 3</a>
                        </li>
                        <li>
                            <a href="slider-4.html">slider 4</a>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Sliders 2</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="slider-5.html">slider 5</a>
                        </li>
                        <li>
                            <a href="slider-6.html">slider 6</a>
                        </li>
                        <li>
                            <a href="slider-9.html">slider 7</a>
                        </li>
                        <li>
                            <a href="slider-9.html">slider 8</a>
                        </li>
                        <li>
                            <a href="slider-9.html">slider 9</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Headers</a>
            <ul class="dropdown-menu">
                <li class="has-dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">transparent</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="header-2.html">transparent 2</a>
                        </li>
                        <li>
                            <a href="header-3.html">transparent 3</a>
                        </li>
                        <li>
                            <a href="header-5.html">transparent 5</a>
                        </li>
                        <li>
                            <a href="header-6.html">transparent 6</a>
                        </li>
                        <li>
                            <a href="header-10.html">transparent 7</a>
                        </li>
                        <li>
                            <a href="header-11.html">transparent 8</a>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">centered</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="header-10.html">centered 1</a>
                        </li>
                        <li>
                            <a href="header-4.html">centered 2</a>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">with topbar</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="header-7.html">topbar 1</a>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">fixed top</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="header-1.html">fixed 1</a>
                        </li>
                        <li>
                            <a href="header-2.html">fixed 2</a>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">bordered</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="header-8.html">bordered 8</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Footers</a>
            <ul class="dropdown-menu">
                <li>
                    <a href="footer-1.html#footer">Footer 1</a>
                </li>
                <li>
                    <a href="footer-2.html#footer">Footer 2</a>
                </li>
                <li>
                    <a href="footer-3.html#footer">Footer 3</a>
                </li>
                <li>
                    <a href="footer-4.html#footer">Footer 4</a>
                </li>
                <li>
                    <a href="footer-5.html#footer">Footer 5</a>
                </li>
                <li>
                    <a href="footer-6.html#footer">Footer 6</a>
                </li>
                <li>
                    <a href="footer-7.html#footer">Footer 7</a>
                </li>
                <li>
                    <a href="footer-8.html#footer">Footer 8</a>
                </li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">page titels</a>
            <ul class="dropdown-menu">
                <li>
                    <a href="page-title-1.html">page title 1</a>
                </li>
                <li>
                    <a href="page-title-2.html">page title 2</a>
                </li>
                <li>
                    <a href="page-title-3.html">page title 3</a>
                </li>
                <li>
                    <a href="page-title-4.html">page title 4</a>
                </li>
                <li>
                    <a href="page-title-5.html">page title 5</a>
                </li>
                <li>
                    <a href="page-title-6.html">page title 6</a>
                </li>
                <li>
                    <a href="page-title-7.html">page title 7</a>
                </li>
                <li>
                    <a href="page-title-8.html">page title 8</a>
                </li>
                <li>
                    <a href="page-title-9.html">page title 9</a>
                </li>
                <li>
                    <a href="page-title-10.html">page title 10</a>
                </li>
                <li>
                    <a href="page-title-11.html">page title 11</a>
                </li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">widgets</a>
            <ul class="mega-menu">
                <li>
                    <ul>
                        <li>
                            <a href="elements-widgets.html">flickr stream</a>
                        </li>
                        <li>
                            <a href="elements-widgets.html">search</a>
                        </li>
                        <li>
                            <a href="elements-widgets.html">last tweets</a>
                        </li>
                        <li>
                            <a href="elements-widgets.html">Filter</a>
                        </li>
                        <li>
                            <a href="elements-widgets.html">recent posts</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li>
                            <a href="elements-widgets.html">Advertisement</a>
                        </li>
                        <li>
                            <a href="elements-widgets.html">Recent Items</a>
                        </li>
                        <li>
                            <a href="elements-widgets.html">tag clouds</a>
                        </li>
                        <li>
                            <a href="elements-widgets.html">categories</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">untility pages</a>
            <ul class="dropdown-menu">
                <li>
                    <a href="page-404.html">page 404</a>
                </li>
                <li>
                    <a href="page-soon.html">coming soon</a>
                </li>
                <li>
                    <a href="page-maintenance.html">maintenance</a>
                </li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">page tempalates</a>
            <ul class="dropdown-menu">
                <li>
                    <a href="page-layout-fullwidth.html">fullwidth</a>
                </li>
                <li>
                    <a href="page-layout-fullwidth-wide.html">fullwidth wide</a>
                </li>
                <li>
                    <a href="page-layout-sidebar-right.html">right sidebar</a>
                </li>
                <li>
                    <a href="page-layout-sidebar-left.html">left sidebar</a>
                </li>

                <li>
                    <a href="page-layout-blank.html">blank page</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="landing.html">landing page</a>
        </li>
    </ul>
</li>
<!-- li end -->

<!-- Blog Menu-->
<li class="has-dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Blog</a>
    <ul class="dropdown-menu">
        <li>
            <a href="blog-carousel.html">blog carousel</a>
        </li>
        <li>
            <a href="blog-grid.html">blog grid</a>
        </li>
        <li>
            <a href="blog-standard.html">blog standard</a>
        </li>
        <li>
            <a href="blog-single.html">blog single</a>
        </li>
    </ul>
</li>
<!-- li end -->

<!-- shop Menu -->
<li class="has-dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item" data-hover="shop">shop</a>
    <ul class="dropdown-menu">
        <li>
            <a href="shop-4cols.html">shop 4 columns</a>
        </li>
        <li>
            <a href="shop-products.html">shop products</a>
        </li>
        <li>
            <a href="shop-single.html">shop single</a>
        </li>
        <li>
            <a href="shop-cart.html">shop cart</a>
        </li>
    </ul>
</li>
<!-- li end -->

<!-- Elements Menu -->
<li class="has-dropdown mega-dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">elements</a>
    <ul class="dropdown-menu mega-dropdown-menu">
        <li>
            <div class="container">
                <div class="row">
                    <!-- Column #1 -->
                    <div class="col-md-3">
                        <a href="#">interactive elements</a>
                        <ul>
                            <li>
                                <a href="elements-testimonials.html"><i class="fa fa-quote-right"></i>testimonials</a>
                            </li>
                            <li>
                                <a href="elements-blockquotes.html"><i class="fa fa-quote-left"></i>blockquotes</a>
                            </li>
                            <li>
                                <a href="elements-video-buttons.html"><i class="fa fa-toggle-right"></i>video buttons</a>
                            </li>
                            <li>
                                <a href="elements-clients.html"><i class="fa fa-user"></i>clients</a>
                            </li>
                            <li>
                                <a href="elements-clients-carousel.html"><i class="fa fa-users"></i>clients carousel</a>
                            </li>
                            <li>
                                <a href="elements-daily-specials.html"><i class="fa fa-newspaper-o"></i>Daily Specials</a>
                            </li>
                        </ul>
                    </div>
                    <!-- .col-md-3 end -->

                    <!-- Column #2 -->
                    <div class="col-md-3">
                        <a href="#">standard elements</a>
                        <ul>
                            <li>
                                <a href="elements-accordion.html"><i class="fa fa-server"></i>accordion</a>
                            </li>
                            <li>
                                <a href="elements-cta.html"><i class="fa fa-child"></i>call to action</a>
                            </li>
                            <li>
                                <a href="elements-contact-form.html"><i class="fa fa-desktop"></i>contact form</a>
                            </li>
                            <li>
                                <a href="elements-team.html"><i class="fa fa-group"></i>team variations</a>
                            </li>
                            <li>
                                <a href="elements-tabs.html"><i class="fa fa-ellipsis-h"></i>tabs</a>
                            </li>
                            <li>
                                <a href="elements-reservation.html"><i class="fa fa-laptop"></i>reservation</a>
                            </li>
                        </ul>
                    </div>
                    <!-- .col-md-3 end -->

                    <!-- Column #3 -->
                    <div class="col-md-3">
                        <a href="#">infographics elements</a>
                        <ul>
                            <li>
                                <a href="elements-counters.html"><i class="fa fa-dashboard"></i>counters</a>
                            </li>
                            <li>
                                <a href="elements-dividers.html"><i class="fa fa-dot-circle-o"></i>dividers</a>
                            </li>
                            <li>
                                <a href="elements-pricing.html"><i class="fa fa-exchange"></i>pricing</a>
                            </li>
                            <li>
                                <a href="elements-list.html"><i class="fa fa-list"></i>list</a>
                            </li>
                            <li>
                                <a href="elements-progress-bars.html"><i class="fa fa-hourglass-half"></i>progress bars</a>
                            </li>
                            <li>
                                <a href="elements-interactive-banners.html"><i class="fa fa-laptop"></i>interactive banners</a>
                            </li>
                        </ul>
                    </div>
                    <!-- .col-md-3 end -->

                    <!-- Column #4 -->
                    <div class="col-md-3">
                        <a href="#">typography</a>
                        <ul>
                           <li>
                                <a href="elements-buttons.html"><i class="fa fa-suitcase"></i>buttons</a>
                            </li>
                            <li>
                                <a href="elements-heading.html"><i class="fa fa-sort-alpha-asc"></i>heading</a>
                            </li>
                            <li>
                                <a href="elements-columns-grids.html"><i class="fa fa-th"></i>columns grids</a>
                            </li>
                            <li>
                                <a href="elements-icon-text.html"><i class="fa fa-sliders"></i>icon text</a>
                            </li>

                            <li>
                                <a href="elements-typography.html"><i class="fa fa-text-height"></i>typography</a>
                            </li>
                        </ul>
                    </div>
                    <!-- .col-md-3 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- container end -->
        </li>
    </ul>
    <!-- .mega-dropdown-menu end -->
</li>
                </ul>
                <!-- Module Reservation  -->
<div class="module module-reservation pull-left">
    <a class="btn-popup btn-popup-theme" data-toggle="modal" data-target="#reservationModule">Book A Table</a>
    <div class="modal fade reservation-popup" tabindex="-1" role="dialog" id="reservationModule">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <div class="row reservation reservation-1">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="reservation-form mb-30 text-center">
                                <div class="reservation-bordered">
                                    <div class="heading heading-1 text-center">
                                        <p class="heading--subtitle">Reservation</p>
                                        <h2 class="heading--title">Book Your Table</h2>
                                        <div class="divider--shape-4"></div>
                                    </div>
                                    <div class="reservation--dec">
                                        You can Book a table online easily in just a couple of minutes. We take reservations for lunch and dinner, just check the availability of your table & book it now!
                                    </div>
                                    <form method="post" action="assets/php/reservationpopup.php" class="reservationPopupForm mb-0">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <div class="form-select">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select class="form-control" name="people" id="numPopup" required>
														<option value="">Number of people</option>
<option value="2">2 People</option>
														<option value="3">3 People</option>
														<option value="4">4 People</option>
														<option value="5">5 People</option>
														<option value="6">6 People</option>
														<option value="8">8 People</option>
														<option value="10">10 People</option>
													</select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <div class="form-select">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select class="form-control" name="day" id="dayPopup" required>
														<option value="">Date</option>
<option value="november 23">November 23, 2018</option>
														<option value="november 24">November 24, 2018</option>
														<option value="november 25">November 25, 2018</option>
														<option value="november 26">November 26, 2018</option>
														<option value="november 27">November 27, 2018</option>
													</select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <div class="form-select">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select class="form-control" name="time" id="timePopup" required>
														<option value="">Time</option>
<option value="8:00">8:00 PM</option>
														<option value="9:00">9:00 PM</option>
														<option value="10:00">10:00 PM</option>
														<option value="11:00">11:00 PM</option>
														<option value="12:00">12:00 AM</option>
													</select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <button type="submit" id="submit-message" class="btn btn--secondary btn--block">Find Table</button>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <!--Alert Message-->
                                                <div class="reservation-result"></div>
                                            </div>
                                        </div>
                                        <!-- .row end -->

                                    </form>
                                    <!-- form end -->
                                </div>
                            </div>
                            <!-- .contact-form end -->
                        </div>
                        <!-- .col-md-8 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="text-uppercase text-center">
                                <strong><span class="text-white">Reservation Powered by</span> <a href="#">Opentable</a></strong>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
                <!-- Module Cart -->
<div class="module module-cart pull-left">
    <div class="module-icon cart-icon">
        <i class="fa fa-shopping-cart"></i>
        <span class="title">shop cart</span>
        <label class="module-label">2</label>
    </div>
    <div class="module-content module-box cart-box">
        <div class="cart-overview">
            <ul class="list-unstyled">
                <li>
                    <img class="img-responsive" src="{{asset('assets/images/shop/thumb/6.jpg')}}" alt="product" />
                    <div class="product-meta">
                        <h5 class="product-title">Red Tape Shoes</h5>
                        <p class="product-price">1 x $ 34.00</p>
                    </div>
                    <a class="cart-cancel" href="#">cancel</a>
                </li>
                <li>
                    <img class="img-responsive" src="{{asset('assets/images/shop/thumb/7.jpg')}}" alt="product" />
                    <div class="product-meta">
                        <h5 class="product-title">Brave Sweater</h5>
                        <p class="product-price">1 x $ 32.00</p>
                    </div>
                    <a class="cart-cancel" href="#">cancel</a>
                </li>
            </ul>
        </div>
        <div class="cart-total">
            <div class="total-desc">
                Subtotal:
            </div>
            <div class="total-price">
                $73.00
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="cart--control">
            <a class="btn btn--primary btn--block btn--rounded mb-10" href="#">view cart</a>
            <a class="btn btn--white btn--bordered btn--rounded btn--block" href="#">Checkout</a>
        </div>
    </div>
</div>
<!-- .module-cart end -->
                <!-- Module Search -->
<div class="module module-search pull-left">
    <div class="module-icon search-icon">
        <i class="fa fa-search"></i>
        <span class="title">search</span>
    </div>
    <div class="module-content module-fullscreen module--search-box">
        <div class="pos-vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <form class="form-search">
                            <input type="text" class="form-control" placeholder="Type Search Words Then Enter">
                            <button class="btn" type="button"><i class="fa fa-search"></i></button>
                        </form>
                        <!-- .form-search end -->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <a class="module-cancel" href="#"><i class="fa fa-times"></i></a>
    </div>
</div>
<!-- .module-search end -->
                <!-- Module Side NAV -->
                <div class="module module-side-nav pull-left">
                    <div class="module-icon side-nav-icon">
                        <i class="fa fa-bars"></i>
                        <span class="title">Side Navigation</span>
                    </div>
                    <div class="module-content module-hamburger">
                        <div class="hamburger-panel module-widgets">

    <!-- Recent Posts
============================================= -->
    <div class="widget widget-recent-posts">
        <div class="widget--title">
            <h5>recent posts</h5>
        </div>
        <div class="widget--content">
            <div class="entry">
                <img src="{{asset('assets/images/blog/thumb/1.jpg')}}" alt="title" />
                <div class="entry-desc">
                    <div class="entry-meta">
                        <a href="#">Oct 15, 2017</a>
                    </div>
                    <div class="entry-title">
                        <a href="#">The Best Side Dishes for Next Dinner</a>
                    </div>
                </div>
            </div>
            <!-- .recent-entry end -->

            <div class="entry">
                <img src="{{asset('assets/images/blog/thumb/2.jpg')}}" alt="title" />
                <div class="entry-desc">
                    <div class="entry-meta">
                        <a href="#">sep 15, 2017</a>
                    </div>
                    <div class="entry-title">
                        <a href="#">Cornbread Stuffing Apples and Sausage</a>
                    </div>
                </div>
            </div>
            <!-- .recent-entry end -->

        </div>
    </div>
    <!-- .widget-recent end -->

    <!-- Instagram Feed
============================================= -->
    <div class="widget widget-instagram">
        <div class="widget--title">
            <h5>Instagram</h5>
        </div>
        <div class="widget--content">
            <div id="instafeedModule" class="instafeed" data-insta-number="8"></div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- .widget-instagram end -->

    <!-- Tag Clouds
============================================= -->
    <div class="widget widget-tags">
        <div class="widget--title">
            <h5>tag clouds</h5>
        </div>
        <div class="widget--content">
            <a href="#">responsive</a>
            <a href="#">modern</a>
            <a href="#">corporate</a>
            <a href="#">business</a>
            <a href="#">awesome</a>
            <a href="#">fresh</a>

        </div>
    </div>
    <!-- .widget-tags end -->
    <a class="module-cancel" href="#"><i class="fa fa-times"></i></a>
</div>
                    </div>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

</header>
<!-- Hero Section
====================================== -->
<section id="slider" class="slider slide-overlay-dark">
	<!-- START REVOLUTION SLIDER 5.0 -->
	<div class="rev_slider_wrapper">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
                @foreach($restaurante->carpeta->imagenes_por_tipo_imagen(1) as $imagenes)
                
				<!-- slide 1 -->
				<li data-transition="slotfade-horizontal" 
					data-slotamount="default" 
					data-easein="Power4.easeInOut" 
					data-easeout="Power4.easeInOut" 
					data-masterspeed="2000">
					<!-- MAIN IMAGE -->
					<img src="{{$imagenes->url}}" alt="Slide Background Image"  width="1920" height="1280">
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
						<div class="slide--subheadline">{{$restaurante->saludo}}</div>
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
						<div class="slide--bio text-center">{{$restaurante->slogan}}</div>
					</div>
					
					<!-- LAYER NR. 4 -->
					<div class="tp-caption" 
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
							<a class="btn btn--primary btn--inverse btn--rounded btn--lg" href="#">Menú</a>
						</div>
					</div>
				</li>
                @endforeach
			</ul>
		</div>
		<!-- END REVOLUTION SLIDER -->
	</div>
	<!-- END OF SLIDER WRAPPER -->
</section>

<!-- Shop #4
============================================= -->
<section id="shop" class="shop shop-4 bg-white pb-70">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-3 mb-30 text--center">
                    <p class="heading--subtitle">Discover</p>
                    <h2 class="heading--title mb-0">Latest Dishes</h2>
                    <div class="divider--shape-4"></div>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <!-- Projects Filter
			============================================= -->
            <div class="col-xs-12 col-sm-12  col-md-12 shop-filter">
                <ul class="list-inline">
                    <li><a class="active-filter" href="#" data-filter="*">All</a></li>

                    
                    @foreach($restaurante->categoria as $categoria)

                        @if (!$categoria->productos->isEmpty())

                            <li><a href="#" data-filter=".{{$categoria->nombre}}">{{$categoria->nombre}}</a></li>
                            
                        @endif
                    
                    @endforeach

                    @if (!$restaurante->combos->isEmpty())
                        <li><a href="#" data-filter=".combo">Combos</a></li>
                    @endif

                </ul>
            </div>
            <!-- .projects-filter end -->
        </div>
        <!-- .row end -->
        <div id="shop-all" class="row">
            <!-- Product #1 -->
            @foreach($restaurante->categoria as $categoria)

                @foreach ($categoria->productos as $producto)
                   
                    <div class="col-xs-12 col-sm-6 col-md-3 productFilter {{$categoria->nombre}} ">
                        
                        <div class="product-item">
                            <div class="product--img">
                                <img src="{{$producto->carpeta->imagen_principal()->url}}" alt="Product" />
                                <div class="product--hover">
                                    <div class="product--action">
                                        <a class="dish-popup button" data-toggle="modal" data-target="#{{$producto->slug}}">Ver</a>
                                    </div>
                                </div>
                                <!-- .product-overlay end -->
                            </div>
                            <!-- .product-img end -->
                            <div class="product--content">
                                <div class="product--title">
                                    <h3><a href="#">{{$producto->nombre}}</a></h3>
                                </div>
                                <!-- .product-title end -->
                                <div class="product--price">
                                    <span>$ {{$producto->precio}}</span>
                                </div>
                                <!-- .product-price end -->
                            </div>
                            <!-- .product-bio end -->
                        </div>
                        <div class="modal fade" tabindex="-1" role="dialog" id="{{$producto->slug}}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                                        <div class="row reservation">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="popup--img">
                                                    <img src="{{$producto->carpeta->imagen_principal()->url}}" alt="dish img">
                                                    <div class="img-popup-overlay">
                                                        <div class="product--price">
                                                            <span>$ {{$producto->precio}}</span>
                                                        </div>
                                                        <div class="product--title">
                                                            <h3><a href="#">{{$producto->nombre}}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .col-md-12 end -->
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="content-popup">
                                                    <p>{{$producto->descripcion}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .row end -->
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                    <!-- .productFilter end -->                     
                              
                @endforeach
                
            @endforeach

            

            @foreach ($restaurante->combos as $producto)
                
                <div class="col-xs-12 col-sm-6 col-md-3 productFilter combo ">
                    
                    <div class="product-item">
                        <div class="product--img">
                            <img src="{{$producto->carpeta->imagen_principal()->url}}" alt="Product" />
                            <div class="product--hover">
                                <div class="product--action">
                                    <a class="dish-popup button" data-toggle="modal" data-target="#{{$producto->slug}}">Ver</a>
                                </div>
                            </div>
                            <!-- .product-overlay end -->
                        </div>
                        <!-- .product-img end -->
                        <div class="product--content">
                            <div class="product--title">
                                <h3><a href="#">{{$producto->nombre}}</a></h3>
                            </div>
                            <!-- .product-title end -->
                            <div class="product--price">
                                <span>$ {{$producto->precio}}</span>
                            </div>
                            <!-- .product-price end -->
                        </div>
                        <!-- .product-bio end -->
                    </div>
                    <div class="modal fade" tabindex="-1" role="dialog" id="{{$producto->slug}}">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                                    <div class="row reservation">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="popup--img">
                                                <img src="{{$producto->carpeta->imagen_principal()->url}}" alt="dish img">
                                                <div class="img-popup-overlay">
                                                    <div class="product--price">
                                                        <span>$ {{$producto->precio}}</span>
                                                    </div>
                                                    <div class="product--title">
                                                        <h3><a href="#">{{$producto->nombre}}</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-12 end -->
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="content-popup">
                                                <p>{{$producto->descripcion}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .row end -->
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                </div>
                <!-- .productFilter end -->                     
                            
            @endforeach
                
            

        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #shop end -->

<!-- Testimonial #4
============================================= -->
<section id="testimonial4" class="testimonial testimonial-4 bg-overlay bg-parallax bg-overlay-dark text-center">
    <div class="bg-section">
        <img src="{{asset('assets/images/background/1.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div id="testimonial-wide" class="carousel carousel-dots carousel-white" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                    <!-- Testimonial #1 -->
                    <div class="testimonial-panel">
                        <div class="testimonial--rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <!-- .testimonial-rating end -->
                        <div class="testimonial--body">
                            <p class="color-white">We're all moving at such a high rate that we have to grab the frozen dinners, we can't make it a way of life. We have to get back to real, simple, clean good foods.</p>
                        </div>
                        <!-- .testimonial-body end -->
                        <div class="testimonial--meta">
                            <div class="testimonial--img">
                                <img src="{{asset('assets/images/testimonial/1.png')}}" alt="Testimonial Author">
                            </div>
                            <div class="testimonial--author">
                                <h4>Michael Luke</h4>
                            </div>
                        </div>
                        <!-- .testimonial-meta end -->
                    </div>
                    <!-- .testimonial-panel end -->

                    <!-- Testimonial #2 -->
                    <div class="testimonial-panel">
                        <div class="testimonial--rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <!-- .testimonial-rating end -->
                        <div class="testimonial--body">
                            <p class="color-white">We're all moving at such a high rate that we have to grab the frozen dinners, we can't make it a way of life. We have to get back to real, simple, clean good foods.</p>
                        </div>
                        <!-- .testimonial-body end -->
                        <div class="testimonial--meta">
                            <div class="testimonial--img">
                                <img src="{{asset('assets/images/testimonial/2.png')}}" alt="Testimonial Author">
                            </div>
                            <div class="testimonial--author">
                                <h4>Henry Gabriel</h4>
                            </div>
                        </div>
                        <!-- .testimonial-meta end -->
                    </div>
                    <!-- .testimonial-panel end -->

                    <!-- Testimonial #3 -->
                    <div class="testimonial-panel">
                        <div class="testimonial--rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <!-- .testimonial-rating end -->
                        <div class="testimonial--body">
                            <p class="color-white">We're all moving at such a high rate that we have to grab the frozen dinners, we can't make it a way of life. We have to get back to real, simple, clean good foods.</p>
                        </div>
                        <!-- .testimonial-body end -->
                        <div class="testimonial--meta">
                            <div class="testimonial--img">
                                <img src="{{asset('assets/images/testimonial/3.png')}}" alt="Testimonial Author">
                            </div>
                            <div class="testimonial--author">
                                <h4>Leo Jaxon</h4>
                            </div>
                        </div>
                        <!-- .testimonial-meta end -->
                    </div>
                    <!-- .testimonial-panel end -->

                    <!-- Testimonial #4 -->
                    <div class="testimonial-panel">
                        <div class="testimonial--rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <!-- .testimonial-rating end -->
                        <div class="testimonial--body">
                            <p class="color-white">We're all moving at such a high rate that we have to grab the frozen dinners, we can't make it a way of life. We have to get back to real, simple, clean good foods.</p>
                        </div>
                        <!-- .testimonial-body end -->
                        <div class="testimonial--meta">
                            <div class="testimonial--img">
                                <img src="{{asset('assets/images/testimonial/4.png')}}" alt="Testimonial Author">
                            </div>
                            <div class="testimonial--author">
                                <h4>Anthony Hunter</h4>
                            </div>
                        </div>
                        <!-- .testimonial-meta end -->
                    </div>
                    <!-- .testimonial-panel end -->
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="divider--shape-1down"></div>
    </div>
    <!-- .container end -->
</section>
<!-- .testimonial4 end -->
<!-- Shop #4
============================================= -->
<section id="shop2" class="shop shop-4 pb-60">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-3 mb-50 text--center">
                    <p class="heading--subtitle">Enjoy</p>
                    <h2 class="heading--title mb-0">Popular Dishes</h2>
                    <div class="divider--shape-4"></div>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="row">
        @foreach($products as $product)
            <div class="col-xs-12 col-sm-6 col-md-3 productFilter filter-desserts filter-soup">
                <div class="product-item">
                    <div class="product--img">
                        <img src="{{$images_routes[0]}}" alt="Product" />
                        <div class="product--hover">
                            <div class="product--action">
                                <a href="#">Add To Cart</a>
                            </div>
                        </div>
                        <!-- .product-overlay end -->
                    </div>
                    <!-- .product-img end -->
                    <div class="product--content">
                        <div class="product--title">
                            <h3><a href="#">{{$product}}</a></h3>
                        </div>
                        <!-- .product-title end -->
                        <div class="product--price">
                            <span>{{$price}}</span>
                        </div>
                        <!-- .product-price end -->
                    </div>
                    <!-- .product-bio end -->
                </div>
            </div>
            <!-- .productFilter end -->
            @endforeach

            
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #shop end -->

<!-- footer#1
============================================= -->
<footer id="footer" class="footer footer-1 text-center">
    <div class="divider--shape-dark"></div>
    <!-- Widget Section
	============================================= -->
    <div class="footer--widget text--center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="footer--widget-content">
                        <h3>Follow Us</h3>
                        <div class="footer--social-icons">
                            <a href="{{$social_media[0]}}"><i class="fa fa-facebook"></i></a>
                            <a href="{{$social_media[1]}}"><i class="fa fa-twitter"></i></a>
                            <a href="{{$social_media[2]}}"><i class="fa fa-instagram"></i></a>
                            <!-- <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-tripadvisor"></i></a> -->
                        </div>
                        <!-- .social-icons end -->
                    </div>
                </div>
                <!-- .col-md-4 end -->
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="footer--widget-content">
                        <img class="mb-20" src="{{$logo}}" alt="logo">
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
    </div>
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