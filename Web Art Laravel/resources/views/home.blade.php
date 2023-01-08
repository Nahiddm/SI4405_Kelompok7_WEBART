@extends('layout.base')

@section('body')
    <!--============= Banner Section Starts Here =============-->
    <section class="banner-section bg_img" data-background="{{ asset('assets/images/banner/baige4.jpeg') }}">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner-content cl-dark">
                        <h1 class="title"><span class="d-xl-block">Welcome to WebArt</h1>
                        <p>
                            With more than 100,000+ fine art prints, we're here to help you find that perfect piece for your wall. Shop our Art-on-Demand collection today and have your art personalized with our exclusive frames, gallery-wrap canvas, and triptych sets.
                        </p>
                        <a href="#0" class="custom-button yellow btn-large">Get Started</a>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-5">
                    <div class="banner-thumb-2">
                        <img src="{{ asset('assets/images/banner/asd2.png') }}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape d-none d-lg-block">
            <img src="{{ asset('assets/css/img/banner-shape.png') }}" alt="css">
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->


        <!--============= Hightlight Slider Section Starts Here =============-->
        <div class="browse-slider-section mt--140">
            <div class="container">
                <div class="section-header-2 cl-white mb-4">
                    <div class="left">
                        <h6 class="title pl-0 w-100">Our Auction Product</h6>
                    </div>
                    <div class="slider-nav">
                        <a href="#0" class="bro-prev"><i class="flaticon-left-arrow"></i></a>
                        <a href="#0" class="bro-next"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="m--15">
                    <div class="browse-slider owl-theme owl-carousel">
                        <a href="#1" class="browse-item">
                            <img src="{{ asset('assets/images/auction/01.png') }}" alt="auction">
                            <span class="info">Rings</span>
                        </a>
                        <a href="#2" class="browse-item">
                            <img src="{{ asset('assets/images/auction/02.png') }}" alt="auction">
                            <span class="info">Statue</span>
                        </a>
                        <a href="#3" class="browse-item">
                            <img src="{{ asset('assets/images/auction/03.png') }}" alt="auction">
                            <span class="info">Art Canvas</span>
                        </a>
                        <a href="#4" class="browse-item">
                            <img src="{{ asset('assets/images/auction/04.png') }}" alt="auction">
                            <span class="info">Coins</span>
                        </a>
                        <a href="#5" class="browse-item">
                            <img src="{{ asset('assets/images/auction/05.png') }}" alt="auction">
                            <span class="info">Batik</span>
                        </a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--============= Hightlight Slider Section Ends Here =============-->


     

    <!--============= How Section Starts Here =============-->
    <section class="how-section padding-top">
        <div class="container">
            <div class="how-wrapper section-bg">
                <div class="section-header text-lg-left">
                    <h2 class="title">How it works</h2>
                    <p>Easy 3 steps to win</p>
                </div>
                <div class="row justify-content-center mb--40">
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="{{ asset('assets/images/how/how1.png') }}" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Sign Up</h4>
                                <p>No Credit Card Required</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="{{ asset('assets/images/how/how2.png') }}" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Bid</h4>
                                <p>Bidding is free Only pay if you win</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="{{ asset('assets/images/how/how3.png') }}" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Win</h4>
                                <p>Fun - Excitement - Great deals</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <!--============= How Section Ends Here =============-->
    @endsection
