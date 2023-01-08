@extends('layout.base')

@section('body')
    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section style-2 pb-lg-400">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="#0">My Account</a>
                </li>
                <li>
                    <span>Dashboard</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg" data-background="assets/images/banner/baige4.jpeg"></div>
        <div class="banner-shape d-none d-lg-block">
            <img src="{{ asset('assets/css/img/banner-shape.png') }}" alt="css">
        </div>
    </div>
    <!--============= Hero Section Ends Here =============-->
    <!--============= Dashboard Section Starts Here =============-->
    <section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-7 col-lg-4">
                    <div class="dashboard-widget mb-30 mb-lg-0">
                        <div class="user">
                            <div class="thumb-area">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/photo-team/nahid.jpg') }}" alt="user">
                                </div>
                                <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                                <input type="file" id="profile-pic" class="d-none">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#0">{{ auth()->user()->name }}</a></h5>
                                <span class="username"><a href="http://pixner.net/cdn-cgi/l/email-protection">{{ auth()->user()->email }}</a></span>
                            </div>
                        </div>
                        <ul class="dashboard-menu">
                            <li>
                                <a href="{{ route('dashboard') }}"><i class="flaticon-dashboard"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="{{ route('profile.show') }}"><i class="flaticon-settings"></i>Personal Profile </a>
                            </li>
                            @if (auth()->user()->isAdmin())
                            <li>
                                <a href="{{ route('products.index') }}"><i class="flaticon-auction"></i>Products</a>
                            </li>
                            @endif
                            <li>
                                <a href="{{ route('products.index') }}"><i class="flaticon-best-seller"></i>History</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="dashboard-widget">
                        <h5 class="title mb-20">Products</h5>
                        @if(auth()->user()->isAdmin())
                        <div class="my-3">
                            <a href="{{ route('products.create') }}" class="btn btn-sm btn-outline-primary">Create New Products</a>
                        </div>
                        @endif 
                        <div class="dashboard-purchasing-tabs">
                            <div class="tab-content">
                                <div class="tab-pane show active fade" id="current">
                                    <table class="purchasing-table">
                                        <thead>
                                            <th>Name</th>
                                            <th>Open Price</th>
                                            <th>Expires</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                        @forelse ($products as $product)
                                            <tr>
                                                <td>{{ $product->name }}</td>
                                                <td>Rp{{ number_format($product->open_price,0,',','.') }}</td>
                                                <td>{{ date('d-m-Y', strtotime($product->end_date)) }}</td>
                                                <td><span class="{{ ($product->status == 'onprocess' ? 'badge bg-primary text-white' : 'badge bg-success text-white') }}">{{ $product->status }}</span></td>
                                                <td>
                                                    <a href="{{ route('products.show', $product->id) }}">Detail</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <h3>Product is empty</h3>
                                        @endforelse
                                    </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane show fade" id="pending">
                                    <table class="purchasing-table">
                                        <thead>
                                            <th>Item</th>
                                            <th>Bid Price</th>
                                            <th>Highest Bid</th>
                                            <th>Lowest Bid</th>
                                            <th>Expires</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">5/12/2022</td>
                                            </tr>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/12/2022</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane show fade" id="history">
                                    <table class="purchasing-table">
                                        <thead>
                                            <th>Item</th>
                                            <th>Bid Price</th>
                                            <th>Highest Bid</th>
                                            <th>Lowest Bid</th>
                                            <th>Expires</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-purchase="item">2018 Hyundai Sonata</td>
                                                <td data-purchase="bid price">$1,775.00</td>
                                                <td data-purchase="highest bid">$1,775.00</td>
                                                <td data-purchase="lowest bid">$1,400.00</td>
                                                <td data-purchase="expires">7/12/2022</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Dashboard Section Ends Here =============-->
@endsection
