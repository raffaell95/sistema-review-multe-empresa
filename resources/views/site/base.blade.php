<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Orogold - review</title>
  
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
					<a class="navbar-brand" href="index.html">
						<img src="images/logo.png" alt="">
					</a>
					
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="{{ route('home') }}">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#l">About</a>
							</li>
							
							
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
                @guest
                <li class="nav-item dropdown dropdown-slide">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown dropdown-slide">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->first_name }} <span class="caret"></span>
                    </a>

                   <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('logout') }}"
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
                    <a class="nav-link" href="{{ route('register') }}">Reclamar</a>
                </li>

            @endguest
							
						</ul>
					</div>
        </nav>
	</div>
</section>



@yield('content')



<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="images/logo.png" alt="">
          <!-- description -->
          <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Site Pages</h4>
          <ul>
            <li><a href="#">Boston</a></li>
            <li><a href="#">How It works</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="#">Terms of Services</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block">
          <h4>Admin Pages</h4>
          <ul>
            <li><a href="#">Boston</a></li>
            <li><a href="#">How It works</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="#">Terms of Services</a></li>
          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <a href="">
            <!-- Icon -->
            <img src="images/footer/phone-icon.png" alt="mobile-icon">
          </a>
          <p>Get the Dealsy Mobile App and Save more</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright © 2016. All Rights Reserved</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href=""></a></li>
              <li><a class="fa fa-twitter" href=""></a></li>
              <li><a class="fa fa-pinterest-p" href=""></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
</footer>

  <!-- JAVASCRIPTS -->
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



