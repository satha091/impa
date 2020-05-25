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
        <link rel = "icon" href =
"{{ url('img/logo.png') }}"
        type = "image/x-icon">
        <style>
.img{
    max-width: 100%;
    height: 100px;
}


            </style>
<!--
Newline Template
https://templatemo.com/tm-503-newline
-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        @yield('bootstrap')

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
       <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap.min.css">
        <script src="{{ url('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
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
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header ">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                   <!-- <a href="#"> <img src="{{ url('img/logo.png') }}"></a>-->
                    <!--<h3 class="navbar-brand" style="margin-top: 3px;">IMPA Events</h3>-->
                   <!-- <a class="navbar-brand offset-11" href="#">IMPA Events</a>-->
                  </div>
                  <div class="collapse navbar-collapse " id="myNavbar">
                    <ul class="nav navbar-nav col-md-4">
                        <li class="selected p-5"><a href="{{ url('/') }}"><div class=""></div><h5>Home</h5></a></li>
                       <!-- <li class=""><a href="{{ url('about') }}"><div class=""></div><h5>About Us</h5></a></li>
                        <li><a href="#0"><div class=""></div><h6>Featured</h6></a></li>
                        <li><a href="{{ url('project') }}"><div class=""></div><h5>Projects</h5></a></li>
                        <li ><a href="{{ url('contact') }}"><div class=""></div><h5>Contact Us</h5></a></li>-->
                    </ul>

                    <ul class="nav navbar-nav col-md-4">
                        <li class="selected p-5"> <a  href="#"> <img class="img" src="{{ url('img/logo.png') }}" ></a></li>
                        <a href="{{ url('/') }}"><h5 style="color: white;margin-top:30px">WELCOME TO IMPA</h5></a>
                       <li><a href="{{ url('events') }}"><span class="glyphicon glyphicon-user"></span> Events</a></li>
                       
                       <!-- <li class=""><a href="{{ url('about') }}"><div class=""></div><h5>About Us</h5></a></li>
                        <li><a href="#0"><div class=""></div><h6>Featured</h6></a></li>
                        <li><a href="{{ url('project') }}"><div class=""></div><h5>Projects</h5></a></li>
                        <li ><a href="{{ url('contact') }}"><div class=""></div><h5>Contact Us</h5></a></li>-->
                    </ul>

                    @if (Route::has('login'))
                    <ul class="nav navbar-nav navbar-right " style="margin-right:50px;">
                      @auth

                     <!-- <li><a href="{{ url('events') }}"><span class="glyphicon glyphicon-user"></span> Events</a></li>-->
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
                     <!-- <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>-->
                      @if (Route::has('register'))
                      <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                      @endif
                      @endauth
                      @endif
                    </ul>
                  </div>
                </div>
              </nav>

<!--old codes 2020-05-12-->

        <!--  <div class="cd-slider-nav">
            <nav class="navbar navbar-inverse" style="height:300px;">
                <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <h3 style="color: white;margin-top:40px;">IMPA Events</h3>oldend-->
                   <!-- <a class="navbar-brand" href="#"><img class="img-fluid img-responsive" src="{{ url('img/IMPA_Logo.png') }}" style="text-align:center; max-width:100%;height:auto!important; padding-top:5px; text-align:center;"></a>-->
                  <!-- old</div>-->
                  {{-- <ul class="nav navbar-nav"> --}}
                <!--old start    <span class="cd-marker item-1"></span>
              <ul nav navbar-nav>
                <li class="selected"><a href="#0"><div class=""></div><h6>Welcome</h6></a></li>
                <li><a href="#0"><div class=""></div><h6>About Us</h6></a></li>
                <li><a href="#0"><div class=""></div><h6>Featured</h6></a></li>
                <li><a href="#0"><div class=""></div><h6>Projects</h6></a></li>
                <li><a href="#0"><div class=""></div><h6>Contact Us</h6></a></li> old end-->
              {{-- </ul> --}}

                    {{-- <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>--}}
               <!--old start   </ul>
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
                    @else old end-->
                   <!-- <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>-->
                  <!--  start @if (Route::has('register'))
                    <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    @endif
                    @endauth
                    @endif
                  </ul>
                </div>
              </nav> ends-->


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


        <footer style=" position: fixed;
        height: 50px;

        bottom: 0px;
        left: 0px;
        right: 0px;
        margin-bottom: 0px;">
          <p style=" padding: 15px 0px;">Copyright &copy; 2020

        	| Powered by <a href="http://hridhamtech.com">Hridham Technology</a></p>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>');</script>

        <script src="{{ url('js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ url('js/plugins.js') }}"></script>


        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>

        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>


        <script type="text/javascript">
  var table = $('#example').DataTable( {
        lengthChange: false,


        "scrollX": true,

        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );

    table.buttons().container()
        .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
            </script>

       <!-- <script type="text/javascript" src=https://code.jquery.com/jquery-3.5.1.js"></script>

        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>


        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>

        <script type="text/javascript">
$('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
        </script>-->

        {{-- <script src="js/main.js"></script> --}}

    </body>
</html>
