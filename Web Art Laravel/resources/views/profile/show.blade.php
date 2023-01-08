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
                <div class="row">
                    <div class="col-12">
                        <div class="dash-pro-item mb-30 dashboard-widget">
                            <div class="header">
                                <h4 class="title">Personal Details</h4>
                            </div>
                            <ul class="dash-pro-body">
                                <li>
                                    <div class="info-name">Name</div>
                                    <div class="info-value">{{ auth()->user()->name }}</div>
                                </li>
                                <li>
                                    <div class="info-name">Email</div>
                                    <div class="info-value">{{ auth()->user()->email }}</div>
                                </li>
                                <li>
                                    <div class="info-name">No Telp</div>
                                    <div class="info-value">{{ auth()->user()->no_telp }}</div>
                                </li>
                                <ul class="dash-pro-body mt-3">
                                    <a class="btn btn-sm btn-outline-primary" href="{{ route('profile.edit') }}">Update Profile</a>
                                </ul>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="dash-pro-item dashboard-widget">
                            <div class="header">
                                <h4 class="title">Security</h4>
                            </div>
                            <ul class="dash-pro-body">
                                <a class="btn btn-sm btn-outline-primary" href="{{ route('profile.edit.password') }}">Update Password</a>
                            </ul>
                            <ul class="dash-pro-body mt-2">
                                <a href="{{ route('logout') }}"><button type="submit" class="btn btn-sm btn-outline-primary">Logout</button></a>
                                {{-- <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-primary">Logout</button>
                                </form> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
