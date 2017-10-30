@extends('layouts.bar')
@section('content')


    <div class="container selection">



        <div class="intro-text text-center">
            <span class="name title">Voici notre séléction</span><br>

            <span class="skills subtitle ">Où boire un verre? Notre guide est parfait pour vous</span>
        </div>

        <div class="row">
                    @forelse($bars as $bar)
                    <div class="col-sm-4 portfolio-item">
                            <div class="caption">
                                <a class="caption-content thumbnail" href="{{route('bars.show', ['id' => $bar->id])}}">
                                    <img class="picture" src="{{ asset('uploads/bars_pictures/' . $bar->picture) }}" alt="">
                                    <div class="underpicture">
                                        <span class="skills title ">{{  $bar->title }} </span>
                                        <p class="bar-description">{{ str_limit($bar->description, 200) }}
                                        </p>
                                        <div class="game">
                                            @if ( $bar->flechettes == 1)
                                                <img class="game_picture" src="img/target.png" style="height: 20px;">
                                            @endif

                                            @if ( $bar->billard == 1)
                                                <img class="game_picture" src="img/pool.png" style="height: 20px;">
                                            @else
                                            @endif

                                            @if ( $bar->flipper == 1)
                                                <img class="game_picture" src="img/pinball.png" style="height: 20px;">
                                            @else
                                            @endif

                                            @if ( $bar->baby_foot == 1)
                                                <img class="game_picture" src="img/foosball.png" style="height: 20px;">
                                            @else
                                            @endif
                                        </div>
                                    </div>



                                </a>
                            </div>

                    </div>


                    @empty
                        <li>Pas de bars</li>
                    @endforelse


        </div>
    </div>



@endsection

