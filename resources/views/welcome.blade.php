@extends('layouts.bar')

@section('content')

    {{--<header class="masthead" style="">
        <div class="container">
            <img class="img-fluid" src="img/profile1.png" alt="" style="height: 180px;">
            <div class="intro-text">
                <span class="name">Envie d'une bière ?</span>
                <hr class="star-light">
                <span class="skills">Nous vous trouvons les meilleurs bars de Paris</span>
            </div>
            <a href="bars">
                <button class="btn btn-primary btn-lg">Cliquez ici</button>
            </a>
        </div>
    </header>

    <section class="second">
        <div class="container ">

        </div>
    </section>--}}

    <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/Toranomon.jpg);">
            <div class="desc animate-box">
                <h2>Vous voulez boire une bière</h2>
                <span>On s'occupe de tout</span>
                <span><a class="btn btn-primary" href="{{route('bars.index')}}">Commencer</a></span>
            </div>
        </div>

    </div>
    <!-- end:header-top -->

    <!-- fh5co-work-section -->
    <div id="fh5co-services-section" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Notre méthode de travail</h3>
                    <p> Nous prenons le soin de vous séléctionner le meilleur des bars parisien.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-browser"></i></span>
                        <h3>Séléction</h3>
                        <p>De tous les bars renseignés par les utilisateurs, nous prendrons le soin de séléctionner seulement les plus intéressants pour vous.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-mobile"></i></span>
                        <h3>Recherche d'informations</h3>
                        <p>Une fois le bar séléctionné, nous allons contacter le propriétaire pour en extraire le plus d'informations possibles qui sont intéressantes pour vous. </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-tools"></i></span>
                        <h3>Présentation</h3>
                        <p>Seulement une fois que cest deux étapes sont finies, nous mettons en ligne le bar, et attendons vos retours qui généralement sont positifs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fh5co-services-section -->
    <div id="fh5co-content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Ce que nous pensons</h3>
                    <p>Le pain est l'énergie de la vie, mais la bière est la vie même.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="fh5co-testimonial text-center animate-box">
                        <figure>
                            <img src="images/user-1.jpg" alt="user">
                        </figure>
                        <blockquote>
                            <p>“La philosophie et la bière c'est la même chose, Consommées, elles modifient toutes les perceptions que nous avons du monde.”</p>
                        </blockquote>
                        <span>José, Belgique</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fh5co-content-section -->
    <div id="fh5co-blog-section" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                @forelse($bars as $bar)
                    <div class="col-lg-4 col-md-4" >
                        <div class="fh5co-blog animate-box" style="margin-top: 50px">
                            <a href="{{route('bars.show', ['id' => $bar->id])}}"><img class="img-responsive" src="{{ asset('uploads/bars_pictures/' . $bar->picture) }}" alt=""></a>
                            <div class="image-popup" href="#">
                                <div class="prod-title">
                                    <h3><a href="{{route('bars.show', ['id' => $bar->id])}}">{{  $bar->title }} </a></h3>
                                    <span class="posted_by">Posted by: Admin</span>

                                    <span class="comment">
                                      <a href="">21<i class="icon-bubble22"></i></a>
                                  </span>
                                    <p>{{ str_limit($bar->description, 100) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="bottom">
                            <a href="{{route('bars.show', ['id' => $bar->id])}}" class="btn btn-primary read_more" style="bottom: 0px;position: absolute;">Read More</a>
                            <div class="game" style="position: absolute; bottom: 0px; right: 0px">
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
                    </div>
                @empty
                    <li>Pas de bars</li>
                @endforelse
            </div>
        </div>
    </div>




@endsection