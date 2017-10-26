@extends('layouts.bar')
@section('content')


    <h1 class="text-center">{{ $bar->title }} </h1>

    <div class="container show">
        <div class="row">
            <div class="col-sm-6 portfolio-item">
                    <div class="caption">
                        <div class="caption-content">
                            <img src="{{ asset('uploads/bars_pictures/' . $bar->picture) }}" alt="">
                        </div>
                    </div>
            </div>
            <div class="col-sm-6">
                <p>{{ $bar->description }}</p>

                <div class="game">
                    @if ( $bar->flechettes == 1)
                        <img class="game_picture" src="img/target.png" style="height: 20px;">
                        ntdsuytdiqsdtyiqudyuiqydsiusdiqsuysiuydsq
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

                <div class="save">
                    <button>Save</button>
                </div>
            </div>
        </div>
    </div>



@endsection



