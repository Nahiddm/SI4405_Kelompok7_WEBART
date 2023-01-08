@extends('layout.base')

@section('body')
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
          <span>Sign In</span>
        </li>
      </ul>
    </div>
    <div class="bg_img hero-bg" data-background="{{asset('assets/images/banner/baige4.jpeg')}}"></div>
    <div class="banner-shape d-none d-lg-block">
      <img src="{{ asset('assets/css/img/banner-shape.png') }}" alt="css">
  </div>
  </div>
  <!--============= Hero Section Ends Here =============-->

  <!--============= Account Section Starts Here =============-->
  <section class="account-section padding-bottom">
    <div class="container">
      <div class="account-wrapper mt--100 mt-lg--440">
        <div class="left-side">
          <div class="section-header">
            <h2 class="title">Update Your Profile</h2>
          </div>
          @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="login-form" action="{{ route('profile.update.password') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-pass" placeholder="Old Password" name="old_password" />
                            <span class="pass-type"><i class="fas fa-eye"></i></span>
                          </div>
                          <div class="form-group">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-pass" placeholder="New Password" name="password" />
                            <span class="pass-type"><i class="fas fa-eye"></i></span>
                          </div>
                          <div class="form-group">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-pass" placeholder="Confirmation New Password" name="password_confirmation" />
                            <span class="pass-type"><i class="fas fa-eye"></i></span>
                          </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="custom-button">Update</button>
                        </div>
                    </form>
        </div>
        <div class="right-side cl-white">
          <div class="section-header mb-0">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--============= Account Section Ends Here =============-->
@endsection
