@extends('layout.base')

@section('body')
<!--============= Hero Section Starts Here =============-->
<div class="hero-section">
    <div class="container">
      <ul class="breadcrumb">
        <li>
          <a href="{{ route('home') }}">Home</a>
        </li>
        <li>
          <a href="#0">Pages</a>
        </li>
        <li>
          <span>Sign In</span>
        </li>
      </ul>
    </div>
    <div
      class="bg_img hero-bg"
      data-background="assets/images/banner/baige4.jpeg"
    ></div>
    <div class="banner-shape d-none d-lg-block">
      <img src="assets/css/img/banner-shape.png" alt="css" />
    </div>
  </div>
  <!--============= Hero Section Ends Here =============-->

  <!--============= Account Section Starts Here =============-->
  <section class="account-section padding-bottom">
    <div class="container">
      <div class="account-wrapper mt--100 mt-lg--440">
        <div class="left-side">
          <div class="section-header">
            <h2 class="title">HI, THERE</h2>
            <p>You can log in to your WebArt account here.</p>
          </div>
          @error('email')
          <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
          @enderror
          <form class="login-form" action="{{ route('login.action') }}" method="POST">
            @csrf
            <div class="form-group mb-30">
              <label for="login-email"><i class="far fa-envelope"></i></label>
              <input
                type="text"
                id="login-email"
                placeholder="Email Address"
                name="email"
              />
            </div>
            <div class="form-group">
              <label for="login-pass"><i class="fas fa-lock"></i></label>
              <input type="password" id="login-pass" placeholder="Password" name="password" />
              <span class="pass-type"><i class="fas fa-eye"></i></span>
            </div>
            <div class="form-group">
              <a href="#0">Forgot Password?</a>
            </div>
            <div class="form-group mb-0">
              <button type="submit" class="custom-button">LOG IN</button>
            </div>
          </form>
        </div>
        <div class="right-side cl-white">
          <div class="section-header mb-0">
            <h3 class="title mt-0">NEW HERE?</h3>
            <p>Sign up and create your Account</p>
            <a href="{{ route('register.view') }}" class="custom-button transparent"
              >Sign Up</a
            >
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--============= Account Section Ends Here =============-->
@endsection
