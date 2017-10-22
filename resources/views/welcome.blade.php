@extends('layouts.bar')

@section('content')

    <header class="masthead">
        <div class="container">
            <img class="img-fluid" src="img/profile1.png" alt="">
            <div class="intro-text">
                <span class="name">Envie d'une bière ?</span>
                <hr class="star-light">
                <span class="skills">Nous vous trouvons les meilleurs bars de Paris</span>
            </div>
        </div>
    </header>

    <a href="{{route('bars.index')}}">Tout nos bars </a>
    <a href="{{route('bars.create')}}"> Renseignez un bar </a>

@endsection