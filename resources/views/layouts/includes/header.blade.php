<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<title>Site Mãe</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!-- Styles HOME --> 

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/bootstrap.min.css')}}"/>
    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/slick.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/slick-theme.css')}}"/>
    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/nouislider.min.css')}}"/>
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('app-assets/css/font-awesome.min.css')}}">
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/style.css')}}"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Layout BLANK --> 

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/bootstrap.min.css')}}"/>
    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/slick.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/slick-theme.css')}}"/>
    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/nouislider.min.css')}}"/>
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('app-assets/css/font-awesome.min.css')}}">
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/style.css')}}"/>

    <!-- Layout CHECKOUT --> 

    <!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/bootstrap.min.css')}}"/>
 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/slick.css')}}"/>
 		<link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/slick-theme.css')}}"/>
 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/nouislider.min.css')}}"/>
 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="{{asset('app-assets/css/font-awesome.min.css')}}">
 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/style.css')}}"/>
         
    <!-- Layout STORE --> 

    <!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/bootstrap.min.css')}}"/>
 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/slick.css')}}"/>
 		<link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/slick-theme.css')}}"/>
 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/nouislider.min.css')}}"/>
 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="{{asset('app-assets/css/font-awesome.min.css')}}">
 		<!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/style.css')}}"/>
         
    <!-- Layout PRODUCTS --> 
    
        <!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/bootstrap.min.css')}}"/>
 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/slick.css')}}"/>
 		<link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/slick-theme.css')}}"/>
 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/nouislider.min.css')}}"/>
 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="{{asset('app-assets/css/font-awesome.min.css')}}">
 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="{{asset('app-assets/css/style.css')}}"/>
    
    

        

</head>
<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +55 (62) 99146-3257</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> souzadelucas06@gmail.com </a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> Goiânia- GO</a></li>
                </ul>
                <ul class="header-links pull-right">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
                        </li>
                    @endif
                @else
                <li></li>
                    <li class="nav-item dropdown">
                        
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="{{route('admin.dashboard')}}" class="dropdown-item text-dark">Entrar no painel</a>
                            <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Sair') }}
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    
                @endguest
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-2">
                        <div class="header-logo">
                            <a href="#" class="logo">
                                <img src="{{asset('app-assets/img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-7">
                        <div class="header-search">
                            <form>
                                <select class="input-select">
                                    <option value="0">Categorias</option>
                                    <option value="1">Enxovais</option>
                                    <option value="1">Comesticos</option>
                                    <option value="1">Vestuario</option>
                                </select>
                                <input class="input" placeholder="Pesquise aqui">
                                <button class="search-btn">Pesquisar</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            <div>
                                <a href="#">
                                    <i class="fa fa-heart-o"></i>
                                    <span>Sua lista de desejos</span>
                                    <div class="qty">2</div>
                                </a>
                            </div>
                            <!-- /Wishlist -->

                            <!-- Cart -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Carrinho</span>
                                    <div class="qty">3</div>
                                </a>
                                <div class="cart-dropdown">
                                    <div class="cart-list">
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="{{asset('app-assets/img/product01.png')}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                                            </div>
                                            <button class="delete"><i class="fa fa-close"></i></button>
                                        </div>

                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="{{asset('app-assets/img/product02.png')}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                                            </div>
                                            <button class="delete"><i class="fa fa-close"></i></button>
                                        </div>
                                    </div>
                                    <div class="cart-summary">
                                        <small>3 Item(s) selecionados</small>
                                        <h5>SUBTOTAL: $2940.00</h5>
                                    </div>
                                    <div class="cart-btns">
                                        <a href="#">Ver carrinho</a>
                                        <a href="#">Comprar<i class="fa fa-arrow-circle-right" style="margin-left: 10px;"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    	<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav" >
					<!-- NAV -->
					<ul class="main-nav nav">
                        <li class="nav-item"><a href="{{route('site.index')}}" class="nav-link">Inicio</a></li>
                        <li class="nav-item"><a href="{{route('site.enxovais')}}" class="nav-link">Enxovais</a></li>
                        <li class="nav-item"><a href="{{route('site.cosmeticos')}}" class="nav-link">Cosmeticos</a></li>
                        <li class="nav-item"><a href="{{route('site.roupas')}}" class="nav-link">Vestuario</a></li>
                        <li class="nav-item"><a href="{{route('site.contato')}}" class="nav-link">Contato</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
        <!-- /NAVIGATION -->
        <main class="py-4">
            @yield('content')
        </main>