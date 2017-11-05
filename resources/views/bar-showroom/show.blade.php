@extends('layouts.bar')
@section('content')


    <div class="fh5co-hero fh5co-hero-2">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('uploads/bars_pictures/' . $bar->picture) }});">
            <div class="desc animate-box">
                <h2>{{ $bar->title }}</h2>
                <span>{{ $bar->adresse }}</span>
            </div>
        </div>
    </div>
    <!-- end:header-top -->
    <div id="fh5co-work-section">
        <div class="container">
            <div class="row">


    <div class="container show">
        <h1 class="text-center"> </h1>
        <div class="row">
            <h2 class="text-center">Description</h2><br>
                    <div class="caption">
                        <p>{{ $bar->description }}  </p><br>
                        <div class="info">
                            <h2>Infos pratiques: </h2>
                            <div class="horaires">
                                {{$bar->horaires}}
                            </div><br><br>
                            <h2>Jeux :</h2>
                            @if ( $bar->flechettes == 1)
                                <img class="game_picture" src="../img/target.png" style="height: 70px;">
                            @endif

                            @if ( $bar->billard == 1)
                                <img class="game_picture" src="../img/pool.png" style="height: 70px; margin-left: 20px;">
                            @else
                            @endif

                            @if ( $bar->flipper == 1)
                                <img class="game_picture" src="../img/pinball.png" style="height: 70px;margin-left: 20px;">
                            @else
                            @endif

                            @if ( $bar->baby_foot == 1)
                                <img class="game_picture" src="../img/foosball.png" style="height: 70px;margin-left: 20px;">
                            @else
                            @endif
                        </div>

                    </div>
            </div>

        </div>
    </div>



@endsection



