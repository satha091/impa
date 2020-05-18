<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
    <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>IMPA</title>
<!--
Newline Template
https://templatemo.com/tm-503-newline
-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        @yield('bootstrap')

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>

        <div class="overlay"></div>
        <section class="top-part">
          {{-- <video controls autoplay loop>
            <source src="videos/video.mp4" type="video/mp4">
            <source src="videos/video.ogg" type="video/ogg">
          Your browser does not support the video tag.
          </video> --}}

        </section>

        <section class="cd-hero">

          <div class="cd-slider-nav">
            <nav class="navbar navbar-inverse" style="height:300px;">
                <div class="container">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img class="img-fluid img-responsive" src="{{ url('img/IMPA_Logo.png') }}" style="text-align:center; max-width:100%;height:auto!important; padding-top:5px; text-align:center;"></a>
                  </div>
                  {{-- <ul class="nav navbar-nav"> --}}
                    <span class="cd-marker item-1"></span>
              <ul nav navbar-nav>
                <li class="selected"><a href="#0"><div class="image-icon"><img src="img/home-icon.png"></div><h6>Welcome</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/about-icon.png"></div><h6>About Us</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/featured-icon.png"></div><h6>Featured</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/projects-icon.png"></div><h6>Projects</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/contact-icon.png"></div><h6>Contact Us</h6></a></li>
              {{-- </ul> --}}

                    {{-- <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>--}}
                  </ul>
                  @if (Route::has('login'))
                  <ul class="nav navbar-nav navbar-right" style="margin-right:50px;">
                    @auth

                    <li><a href="{{ url('/home') }}"><span class="glyphicon glyphicon-user"></span> Home</a></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                    @else
                    <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                    @if (Route::has('register'))
                    <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    @endif
                    @endauth
                    @endif
                  </ul>
                </div>
              </nav>


            {{-- <nav>
              <span class="cd-marker item-1"></span>
              <ul>
                <li class="selected"><a href="#0"><div class="image-icon"><img src="img/home-icon.png"></div><h6>Welcome</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/about-icon.png"></div><h6>About Us</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/featured-icon.png"></div><h6>Featured</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/projects-icon.png"></div><h6>Projects</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/contact-icon.png"></div><h6>Contact Us</h6></a></li>
              </ul>
            </nav> --}}
          </div> <!-- .cd-slider-nav -->



          @yield('page-content')









        </section> <!-- .cd-hero -->


        <footer>
          <p>Copyright &copy; 2020

        	| Powered by <a href="http://hridhamtech.com">Hridham Technology</a></p>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>');</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        {{-- <script src="js/main.js"></script> --}}

    </body>
</html>
