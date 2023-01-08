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
            <h2 class="title">Edit Product</h2>
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
                    <form class="login-form" action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="form-group mb-30">
                            <label for="name"><i class="fas fa-pen"></i></label>
                            <input type="text" id="name" name="name" placeholder="Product Name" value="{{ $product->name ?? old('name') }}">
                        </div>
                        <div class="form-group mb-30">
                            <label for="description"><i class="far fa-comments"></i></label>
                            <input type="text" id="description" name="description" placeholder="Description" value="{{ $product->description ?? old('description') }}">
                        </div>
                        <div class="mb-30">
                            <input class="pt-10" type="file" placeholder="tes" name="product_image">
                        </div>
                        <div class="form-group mb-30">
                            <label for="open_price"><i class="fas fa-tags"></i></label>
                            <input type="text" id="open_price" name="open_price" placeholder="Open Price" value="{{ $product->open_price ?? old('open_price') }}">
                        </div>
                        <div class="form-group mb-30">
                            <label for="start_date"><i class="far fa-clock"></i></label>
                            <input type="date" id="start_date" name="start_date" placeholder="Start Date" value="{{ $product->start_date ?? old('start_date') }}">
                        </div>
                        <div class="form-group mb-30">
                            <label for="end_date"><i class="far fa-clock"></i></label>
                            <input type="date" id="end_date" name="end_date" placeholder="End Date" value="{{ $product->end_date ?? old('end_date') }}">
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
