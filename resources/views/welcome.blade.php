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
    <div id="fh5co-work-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Selected Work</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="fh5co-grid animate-box" style="background-image: url(images/work-1.jpg);">
                        <a class="image-popup text-center" href="#">
                            <div class="prod-title">
                                <h3>Don’t Just Stand There</h3>
                                <span>Illustration, Print</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="fh5co-grid animate-box" style="background-image: url(images/work-2.jpg);">
                        <a class="image-popup text-center" href="#">
                            <div class="prod-title">
                                <h3>Don’t Just Stand There</h3>
                                <span>Illustration, Print</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="fh5co-grid animate-box" style="background-image: url(images/work-3.jpg);">
                        <a class="image-popup text-center" href="#">
                            <div class="prod-title">
                                <h3>Don’t Just Stand There</h3>
                                <span>Illustration, Print</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="fh5co-grid animate-box" style="background-image: url(images/work-4.jpg);">
                        <a class="image-popup text-center" href="#">
                            <div class="prod-title">
                                <h3>Don’t Just Stand There</h3>
                                <span>Illustration, Print</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fh5co-work-section -->
    <div id="fh5co-services-section" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>What We Do</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-browser"></i></span>
                        <h3>Web Development</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-mobile"></i></span>
                        <h3>Mobile Apps</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-tools"></i></span>
                        <h3>UX Design</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-video"></i></span>
                        <h3>Video Editing</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-search"></i></span>
                        <h3>SEO Ranking</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-cloud"></i></span>
                        <h3>Cloud Based Apps</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
                    <h3>What Others Say</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
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
                            <p>“Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.”</p>
                        </blockquote>
                        <span>Steve Jobs, Apple Inc.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fh5co-content-section -->
    <div id="fh5co-blog-section" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Recent From Blog</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="images/blog-1.jpg" alt=""></a>
                        <div class="image-popup" href="#">
                            <div class="prod-title">
                                <h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
                                <span class="posted_by">Posted by: Admin</span>
                                <span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="images/blog-2.jpg" alt=""></a>
                        <div class="image-popup" href="#">
                            <div class="prod-title">
                                <h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
                                <span class="posted_by">Posted by: Admin</span>
                                <span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="images/blog-3.jpg" alt=""></a>
                        <div class="image-popup" href="#">
                            <div class="prod-title">
                                <h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
                                <span class="posted_by">Posted by: Admin</span>
                                <span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection