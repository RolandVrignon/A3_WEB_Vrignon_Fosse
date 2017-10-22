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

    <div class="container">
        <div class="form-group">
            <a href="{{route('bars.index')}}" class="btn btn-block btn-primary" placeholder="Tout nos bars">Tout nos bars
            </a>
        </div>
        <div class="form-group">
            <a href="{{route('bars.create')}}" class="btn btn-block btn-primary" placeholder="Renseignez un bar">Renseignez un bar</a>
        </div>
    </div>


@endsection