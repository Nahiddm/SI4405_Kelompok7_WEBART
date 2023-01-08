@extends('layout.base')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Webart - Bid and auction</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <link rel="shortcut icon" href="{{asset('assets/images/logowebart2.png')}}" type="image/x-icon">
</head>

@section('body')
  
    <!--============= Cart Section Starts Here =============-->
    <div class="cart-sidebar-area">
        <div class="top-content">
            <a href="index.html" class="logo">
                <img src="assets/images/logowebart1.png" alt="logo">
            </a>
            <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products">
                <h4 class="title">Shopping cart</h4>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="{{asset('assets/images/auction/art/auction-1.jpg')}}" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Art Canvas</a></h4>
                        <div class="price"><span class="pprice">$876.00</span> <del class="dprice">$5,00.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="btn-wrapper text-center">
                    <a href="product-details.html" class="custom-button"><span>Checkout</span></a>
                </div>
            </div>
        </div>
    </div>
    <!--============= Cart Section Ends Here =============-->


    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#0">Pages</a>
                </li>
                <li>
                    <span>About Us</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg" data-background="{{asset('assets/images/banner/baige4.jpeg')}}"></div>
        <div class="banner-shape d-none d-lg-block">
            <img src="{{asset('assets/css/img/banner-shape.png')}}" alt="css">
        </div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= About Section Starts Here =============-->
    <section class="about-section">
        <div class="container">
            <div class="about-wrapper mt--100 mt-lg--440 padding-top">
                <div class="row">
                    <div class="col-lg-7 col-xl-6">
                        <div class="about-content">
                            <h4 class="subtitle">About Us</h4>
                            <h2 class="title"><span class="d-block">OVER 60</span> YEARS EXPERIENCE</h2>
                            <p>Innovation have made us leaders in auctions platform</p>
                            <div class="item-area">
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{asset('assets/images/about/01.png')}}" alt="about">
                                    </div>
                                    <p>award-winning team</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-thumb">
                    <img src="{{asset('assets/images/about/about.png')}}" alt="about">
                </div>
            </div>
        </div>
    </section>
    <!--============= About Section Ends Here =============-->


    <!--============= Counter Section Starts Here =============-->
    <div class="counter-section padding-top mt--10">
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <h3 class="counter-header">
                            <span class="title counter">62</span><span class="title">M</span>
                        </h3>
                        <p>ITEMS AUCTIONED</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <h3 class="counter-header">
                            <span>$</span><span class="title counter">887</span><span class="title">M</span>
                        </h3>
                        <p>IN SECURE BIDS</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <h3 class="counter-header">
                            <span class="title counter">63</span><span class="title">M</span>
                        </h3>
                        <p>ITEMS AUCTIONED</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <h3 class="counter-header">
                            <span>0</span><span class="title counter">50</span><span class="title">K</span>
                        </h3>
                        <p>AUCTION EXPERTS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============= Counter Section Ends Here =============-->


    <!--============= Overview Section Starts Here =============-->
    <section class="overview-section padding-top">
        <div class="container mw-lg-100 p-lg-0">
            <div class="row m-0">
                <div class="col-lg-6 p-0">
                    <div class="overview-content">
                        <div class="section-header text-lg-left">
                            <h2 class="title">What can you expect?</h2>
                            <p>Voluptate aut blanditiis accusantium officiis expedita dolorem inventore odio reiciendis obcaecati quod nisi quae</p>
                        </div>
                        <div class="row mb--50">
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="{{asset('assets/images/overview/01.png')}}" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Real-time Auction</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="assets/images/overview/02.png" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Supports Multiple Currency</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="assets/images/overview/03.png" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Winner Announcement</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="assets/images/overview/04.png" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Supports Multiple Currency</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="assets/images/overview/05.png" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Show all bidders history</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="assets/images/overview/06.png" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Add to watchlist</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-30 pr-0">
                    <div class="w-75 h-100 bg_img" data-background="assets/images/overview/overview-bg.png"></div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Overview Section Ends Here =============-->

    <br><br><br>

    <!--============= Team Section Starts Here =============-->
    <section class="team-section section-bg padding-top padding-bottom">
        <div class="container">
            <div class="section-header">
                <h2 class="title">The Management Team</h2>
                <p>Our team consists of passionate and talented individuals invested in your success.</p>
            </div>
            <div class="team-wrapper row justify-content-between">
                <div class="team-item">
                    <div class="team-inner">
                        <div class="team-thumb">
                            <a href="#0">
                                <img src="assets/images/photo-team/nahid.jpg" alt="team">
                            </a>
                        </div>
                        <div class="team-content">
                            <h6 class="title"><a href="#0">Ahmad Nahid</a></h6>
                            <ul class="social">
                                <li>
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/nahiddm_?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="team-inner">
                        <div class="team-thumb">
                            <a href="#0">
                                <img src="assets/images/photo-team/rejak.jpg" alt="team">
                            </a>
                        </div>
                        <div class="team-content">
                            <h6 class="title"><a href="#0">Fahreza A</a></h6>
                            <ul class="social">
                                <li>
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/re.jaa24?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="team-inner">
                        <div class="team-thumb">
                            <a href="#0">
                                <img src="assets/images/photo-team/ariq.jpg" alt="team">
                            </a>
                        </div>
                        <div class="team-content">
                            <h6 class="title"><a href="#0">Ariq Aqillah</a></h6>
                            <ul class="social">
                                <li>
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/ariq.aqilah?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="team-inner">
                        <div class="team-thumb">
                            <a href="#0">
                                <img src="assets/images/photo-team/taresa.jpg" alt="team">
                            </a>
                        </div>
                        <div class="team-content">
                            <h6 class="title"><a href="#0">Taresa Vindy</a></h6>
                            <ul class="social">
                                <li>
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/taresavndy?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="team-inner">
                        <div class="team-thumb">
                            <a href="#0">
                                <img src="assets/images/photo-team/zahra.jpg" alt="team">
                            </a>
                        </div>
                        <div class="team-content">
                            <h6 class="title"><a href="#0">Hilzahra Putri</a></h6>
                            <ul class="social">
                                <li>
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/hilzhraa_?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Team Section Ends Here =============-->

    <br><br><br><br>

 

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/owl.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/yscountdown.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>