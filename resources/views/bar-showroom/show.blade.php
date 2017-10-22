@extends('layouts.bar')
@section('content')


    <h1 class="text-center">{{ $bar->title }} </h1>

    <div class="container">
        <div class="row">
            <div class="col-sm-3 portfolio-item">
                    <div class="caption">
                        <div class="caption-content">
                            <p>{{ $bar->description }}</p>
                            <img src="{{ asset('uploads/bars_pictures/' . $bar->picture) }}" alt="">
                        </div>
                    </div>
            </div>
        </div>
    </div>



@endsection



