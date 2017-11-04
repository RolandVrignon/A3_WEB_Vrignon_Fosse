@extends('layouts.bar')
@section('content')



  {{--  <div class="banniere">
        <div class="intro-text text-center">
            <span class="name title">Notre séléction</span><br>
        </div>
    </div>


    <div class="container selection">
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
    </div>--}}

  <div class="fh5co-hero fh5co-hero-2">
      <div class="fh5co-overlay"></div>
      <div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/blog-2.jpg);">
          <div class="desc animate-box">
              <h2>Notre séléction</h2>
              <span>La crème de la crème</span>
          </div>
      </div>
  </div>
  <!-- end:header-top -->
  <div id="fh5co-work-section">
      <div class="container">
          <div class="row">


              @forelse($bars as $bar)
                  <div class="col-lg-4 col-md-4" >
                      <div class="fh5co-blog animate-box">
                          <a href="#"><img class="img-responsive" src="{{ asset('uploads/bars_pictures/' . $bar->picture) }}" alt=""></a>
                          <div class="image-popup" href="#">
                              <div class="prod-title">
                                  <h3><a href="{{route('bars.show', ['id' => $bar->id])}}">{{  $bar->title }} </a></h3>
                                  <span class="posted_by">Posted by: Admin</span>
                                  <span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
                                  <p>{{ str_limit($bar->description, 100) }}</p>
                                  <a href="{{route('bars.show', ['id' => $bar->id])}}" class="btn btn-primary">Read More</a>

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
                          </div>
                      </div>
                  </div>


              @empty
                  <li>Pas de bars</li>
              @endforelse




@endsection

