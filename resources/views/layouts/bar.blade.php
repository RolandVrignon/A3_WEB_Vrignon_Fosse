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
</head>


<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="margin-bottom: 0px;">
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
                                <a href="{{route('bars.create')}}">
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

</nav>

@yield('content')

<!-- Bootstrap core JavaScript -->
<script src="{{asset('js/jquery/jquery.min.js')}}"></script>
<script src="{{asset('js/popper/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('js/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Contact Form JavaScript -->
<script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('js/contact_me.js')}}"></script>

<!-- Custom scripts for this template -->
<script src="{{asset('js/freelancer.min.js')}}"></script>

</body>

</html>
