@extends('layouts.bar')
@section('content')


    <h1 class="text-center">Voici notre séléction</h1>


    <div class="container">
        <div class="row">
                    @forelse($bars as $bar)
                    <div class="col-sm-4 portfolio-item">
                        <h3>{{$bar->title}}</h3>
                        {{$bar->description}}
                    </div>
                    @empty
                        <li>Aucune tâche</li>
                    @endforelse
        </div>
    </div>



@endsection