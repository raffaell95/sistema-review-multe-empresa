<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de Pedidos</title>
  
  <!-- PLUGINS CSS STYLE -->
  <link href="{{ url('plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="{{ url('plugins/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ url('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="{{ url('plugins/slick-carousel/slick/slick.css') }}" rel="stylesheet">
  <link href="{{ url('plugins/slick-carousel/slick/slick-theme.css') }}" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="{{ url('plugins/fancybox/jquery.fancybox.pack.css') }}" rel="stylesheet">
  <link href="{{ url('plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
  <link href="{{ url('plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css') }}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{ url('css/style.css') }}" rel="stylesheet">

  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">

</head>

<body class="body-wrapper">


<section class="menu-top">
	<div class="container">
			
        
				<nav class="navbar navbar-expand-lg  navigation">

          <h3 class="navbar-brand"><a href="{{route('home')}}">Sistema de pedido</a></h3>
					
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
	
						<ul class="navbar-nav ml-auto mt-10">
                @guest

               
                <li class="nav-item dropdown dropdown-slide">
                    <a href="{{route('home')}}" class="nav-link">Home</a>
                  </li>

                <li class="nav-item dropdown dropdown-slide">
                    <a href="" class="nav-link">{{ __('Login') }}</a>

                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="nav-link logout" href="{{ route('login') }}">{{ __('Cliente') }}</a>
                      <a class="nav-link logout" href="{{ route('login.painel') }}">{{ __('Administrador') }}</a>
                    </div>
                            
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
                    </li>
                @endif
            @else

              @if(Auth::user()->first_name == null)

                <li class="nav-item dropdown dropdown-slide">
                  <a href="{{url('/admin')}}" class="nav-link">Home</a>
                </li>

              @else
                <li class="nav-item dropdown dropdown-slide">
                  <a href="{{route('home')}}" class="nav-link">Home</a>
                </li>
              @endif
             

                <li class="nav-item dropdown dropdown-slide">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->first_name == null? 'Admin': Auth::user()->first_name }} <span class="caret"></span>
                    </a>

                   <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item logout" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

                <li class="nav-item">
                  @if (Auth::user()->first_name == null)
                  <a class="nav-link" href="{{ route('admin.pedidos') }}">Lista geral de pedidos</a>

                  @else
                  <a class="nav-link" href="{{ route('pedido.cliente.lista', Auth::user()->id) }}">Meus Pedidos</a>
                  @endif
                    
                </li>

            @endguest
							
						</ul>
					</div>
        </nav>
	</div>
</section>



@yield('content')

<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
</footer>

  <!-- JAVASCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <script src="{{ url('plugins/tether/js/tether.min.js') }}"></script>
  <script src="{{ url('plugins/raty/jquery.raty-fa.js') }}"></script>
  <script src="{{ url('plugins/bootstrap/dist/js/popper.min.js') }}"></script>
  <script src="{{ url('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js') }}"></script>
  <script src="{{ url('plugins/slick-carousel/slick/slick.min.js') }}"></script>
  <script src="{{ url('plugins/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ url('plugins/fancybox/jquery.fancybox.pack.js') }}"></script>
  <script src="{{ url('plugins/smoothscroll/SmoothScroll.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="{{ url('js/scripts.js') }}"></script>


</body>

</html>



