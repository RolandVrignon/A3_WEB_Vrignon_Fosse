<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/superfish.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <!-- Modernizr JS -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
</head>


<body>

<!-- Navigation -->
{{--<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="margin-bottom: 0px;">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Kelbar</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('home.index')}}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('bars.index')}}">Nos bars</a>
                </li>

            </ul>


            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>

                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{route('bars.index')}}">
                                    Mes Bars
                                </a>
                            </li>

                            <li>
                                <a href="{{route('bars.create')}}">
                                    Renseigner un bar
                                </a>
                            </li>


                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Se déconnecter
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>



                        </ul>
                    </li>
                    @endguest
            </ul>
        </div>
    </div>

</nav>--}}
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
            <div id="fh5co-header">
    <header id="fh5co-header-section">
        <div class="container">
            <div class="nav-header">
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                <h1 id="fh5co-logo"><a href="{{route('home.index')}}">Bier-<span>out</span></a></h1>
                <!-- START #fh5co-menu-wrap -->
                <nav id="fh5co-menu-wrap" role="navigation">
                    <ul class="sf-menu" id="fh5co-primary-menu">
                        <li class="active">
                            <a href="{{route('home.index')}}">Accueil</a>
                        </li>
                        <li>
                            <a href="{{route('bars.index')}}">Nos bars</a></a>
                            <ul class="fh5co-sub-menu">
                                <li><a  target="_blank">Build</a></li>
                                <li><a  target="_blank">Work</a></li>
                                <li><a  target="_blank">Light</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="services.html" class="fh5co-sub-ddown">Services</a>
                            <ul class="fh5co-sub-menu">
                                <li><a href="left-sidebar.html">Web Development</a></li>
                                <li><a href="right-sidebar.html">Branding &amp; Identity</a></li>
                                <li>
                                    <a href="#" class="fh5co-sub-ddown">Free HTML5</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
                                        <li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
                                        <li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
                                        <li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
                                        <li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
                                        <li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">UI Animation</a></li>
                                <li><a href="#">Copywriting</a></li>
                                <li><a href="#">Photography</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>

                        @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="fh5co-sub-menu" role="menu">
                                    <li>
                                        <a href="{{route('bars.index')}}">
                                            Mes Bars
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{route('bars.create')}}">
                                            Renseigner un bar
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Se déconnecter
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </ul>
                            </li>
                            @endguest
                    </ul>
                </nav>
            </div>
        </div>
    </header>

@yield('content')

<!-- Bootstrap core JavaScript -->
{{--<script src="{{asset('js/jquery/jquery.min.js')}}"></script>
<script src="{{asset('js/popper/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('js/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Contact Form JavaScript -->
<script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('js/contact_me.js')}}"></script>

<!-- Custom scripts for this template -->
<script src="{{asset('js/freelancer.min.js')}}"></script>--}}


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/hoverIntent.js')}}"></script>
    <script src="{{asset('js/superfish.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
