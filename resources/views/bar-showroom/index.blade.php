@extends('layouts.bar')
@section('content')


    <h1 class="text-center">Voici notre séléction</h1>


    <div class="container">
        <div class="row">
                    @forelse($bars as $bar)
                    <div class="col-sm-3 portfolio-item">
                        <a class="portfolio-link" href="#portfolioModal1" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                   <h1>{{  $bar->title }} </h1>
                                    <p>{{ $bar->description }}</p>
                                    <img src="{{ asset('uploads/bars_pictures/' . $bar->picture) }}" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    @empty
                        <li>Pas de bars</li>
                    @endforelse
        </div>
    </div>



@endsection

