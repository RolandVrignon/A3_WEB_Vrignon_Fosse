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
            </div>
        </div>
    </div>



@endsection



