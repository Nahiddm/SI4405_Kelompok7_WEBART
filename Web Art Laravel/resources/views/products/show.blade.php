@extends('layout.base')

@section('body')
        <!--============= Hero Section Starts Here =============-->
        <div class="hero-section style-2">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                </ul>
            </div>
            <div class="bg_img hero-bg" data-background="assets/images/banner/baige4.jpeg"></div>
            {{-- <div class="banner-shape d-none d-lg-block">
                <img src="{{ asset('assets/css/img/banner-shape.png') }}" alt="css">
            </div> --}}
        </div>
        <!--============= Hero Section Ends Here =============-->


        <!--============= Product Details Section Starts Here =============-->
        <section class="product-details padding-bottom mt--240 mt-lg--440">
            <div class="container">
                <div class="product-details-slider-top-wrapper">
                    <div class="product-details-slider owl-theme owl-carousel">
                        <img src="{{ asset('storage') . '/' . $product->product_image }}" alt="product" width="15" height="500">
                    </div>
                </div>
                <div class="row mt-40-60-80">
                    <div class="col-lg-8">
                        <div class="product-details-content">
                            <div class="product-details-header">
                                <h2 class="title">{{ $product->name }}</h2>
                                <ul>
                                    <li>Listing ID: {{ $product->id }}</li>
                                </ul>
                            </div>
                            <ul class="price-table mb-30">
                                <li class="header">
                                    <h5 class="current">Current Price</h5>
                                    <h3 class="price">Rp{{ number_format($product->open_price,0,',','.') }}</h3>
                                </li>
                            </ul>
                            @if(!auth()->user()->isAdmin())
                            @if($product->status == 'done')
                            @else 
                            <div class="product-bid-area">
                                <form class="product-bid-form" action="{{ route('bid', $product->id) }}" method="POST">
                                    @csrf
                                    <input type="text" name="price" placeholder="Enter your bid amount">
                                    <button type="submit" class="custom-button">Submit a bid</button>
                                </form>
                            </div>
                            @endif
                            @endif
                            <div class="buy-now-area">
                                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="custom-button">Delete</button>
                                </form>
                                <a href="{{ route('products.edit', $product->id) }}" class="custom-button">Edit</a>
                                <a href="{{ route('listBid', $product->id) }}" class="custom-button">List Bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-sidebar-area">
                            <div class="product-single-sidebar mb-3">
                                <h6 class="title">This Auction Ends in:</h6>
                                <div class="countdown">
                                    <div>{{ date('d-m-Y', strtotime($product->end_date)) }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--============= Product Details Section Ends Here =============-->
@endsection
