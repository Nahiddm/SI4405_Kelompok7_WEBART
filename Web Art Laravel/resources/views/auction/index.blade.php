@extends('layout.base')

@section('body')
    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section style-2">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <span>Auction</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg" data-background="{{asset('assets/images/banner/baige4.jpeg')}}"></div>
        <div class="banner-shape d-none d-lg-block">
            <img src="{{ asset('assets/css/img/banner-shape.png') }}" alt="css">
        </div>
    </div>
    <!--============= Hero Section Ends Here =============-->

        <!--============= Featured Auction Section Starts Here =============-->
        <section class="featured-auction-section padding-bottom mt--240 mt-lg--440 pos-rel">
            <div class="container">
                <div class="section-header cl-white mw-100 left-style">
                    <h3 class="title">List Products</h3>
                </div>
                <div class="row justify-content-center mb-30-none">
                    @forelse ($products as $product)
                    @php 
                        $bid = DB::table('bids')
                            ->select(DB::raw('MAX(price) as total_bid'))
                            ->where('product_id', $product->id)
                            ->first();
                    @endphp
                    <div class="col-sm-10 col-md-6 col-lg-4">
                        <div class="auction-item-2">
                            <div class="auction-thumb">
                                <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset('storage') . '/' . $product->product_image }}" alt="statue" width="100" height="300"></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title text-center">
                                    <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                                </h6>
                                <div class="bid-area">
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">Rp{{number_format($bid->total_bid,0,',','.')}}</div>
                                        </div>
                                    </div>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-money"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Buy Now</div>
                                            <div class="amount">Rp{{ number_format($product->open_price,0,',','.') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countdown-area">
                                    <div class="countdown">
                                        <div>Expires: {{ date('d-m-Y', strtotime($product->end_date)) }}</div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    @if($product->status == 'done')
                                    <a href="#" class="custom-button">Closed</a>
                                    @else
                                    <a href="{{ route('products.show', $product->id) }}" class="custom-button">Submit a bid</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <h3>Product is Empty</h3>
                    @endforelse
                </div>
            </div>
        </section>
        <!--============= Featured Auction Section Ends Here =============-->
@endsection
