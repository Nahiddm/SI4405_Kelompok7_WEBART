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
                                    <img src="{{ asset('assets/images/photo-team/profil.jpeg') }}" alt="user">
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
                                <a href="{{ route('dashboard') }}" class="active"><i class="flaticon-dashboard"></i>Dashboard</a>
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
                    <div class="dashboard-widget mb-40">
                        <div class="dashboard-title mb-30">
                            <h5 class="title">My Activity</h5>
                        </div>
                        <div class="row justify-content-center mb-30-none">
                            @if(auth()->user()->isAdmin())
                            <div class="col-md-4 col-sm-6">
                                <div class="dashboard-item">
                                    <div class="thumb">
                                        <img src="assets/images/dashboard/01.png" alt="dashboard">
                                    </div>
                                    <div class="content">
                                        <h2 class="title">
                                            <span class="counter">
                                            @if($active_bid_banner != null)
                                            {{$active_bid_banner->total_product}}
                                            @else 
                                            0
                                            @endif
                                            </span>
                                        </h2>
                                        <h6 class="info">Active Bids</h6>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="col-md-4 col-sm-6">
                                <div class="dashboard-item">
                                    <div class="thumb">
                                        <img src="assets/images/dashboard/02.png" alt="dashboard">
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><span class="counter">{{$winner_banner->total_win}}</span></h2>
                                        <h6 class="info">Items Won</h6>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    @if (!auth()->user()->isAdmin())
                    <div class="dashboard-widget">
                        <h5 class="title mb-10">Winning Bid</h5>
                        <div class="dashboard-purchasing-tabs">
                            <ul class="nav-tabs nav">
                                <li>
                                    <a href="#current" class="active" data-toggle="tab">Current</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active fade" id="current">
                                    <table class="purchasing-table">
                                        <thead>
                                            <th>Item</th>
                                            <th>Bid Price</th>
                                            <th>Highest Bid</th>
                                            <th>Lowest Bid</th>
                                            <th>Expires</th>
                                            <th>Pay</th>
                                        </thead>
                                        <tbody>
                                            @forelse($winner as $row)
                                            <tr>
                                                <td data-purchase="item">{{$row->product_name}}</td>
                                                <td data-purchase="bid price">Rp{{number_format($row->open_price,0,',','.')}}</td>
                                                <td data-purchase="highest bid">Rp{{number_format($row->highest_bid,0,',','.')}}</td>
                                                <td data-purchase="lowest bid">Rp{{number_format($row->lowest_bid,0,',','.')}}</td>
                                                <td data-purchase="expires">{{date('d-m-Y', strtotime($row->end_date))}}</td>
                                                <td href="#" class="btn btn-success btn-x"  onclick="konfirmasiSimpan()" width='60' height='50'>Pay</td>
                                     

                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No Data Available</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else 
                    <div class="dashboard-widget">
                        <h5 class="title mb-10">Active Bid</h5>
                        <div class="dashboard-purchasing-tabs">
                            <ul class="nav-tabs nav">
                                <li>
                                    <a href="#current" class="active" data-toggle="tab">Current</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active fade" id="current">
                                    <table class="purchasing-table">
                                        <thead>
                                            <th>Item</th>
                                            <th>Total User Bid</th>
                                            <th>Expires</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @forelse($active_bid as $row)
                                            <tr>
                                                <td>{{$row->name}}</td>
                                                <td>{{$row->total_bid}}</td>
                                                <td>{{date('d-m-Y', strtotime($row->end_date))}}</td>
                                                <td><a href="{{url('bid', $row->product_id)}}">Detail</a></td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No Data Available</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        

<!--Modal: modalCoupon-->
  
@section('js')
<script>
function konfirmasiSimpan()
{
    event.preventDefault();
    var form = event.target.form;
    Swal.fire({
        icon: "question",
        title: "Konfirmasi",
        text: "Apakah anda yakin?",
        showCancelButton: true,
        confirmButtonText: "Bayar",
        cancelButtonText: "Batal"
    }).then((result) => {
        if(result.value) {
            window.location = ('home');
        } else {
            Swal.fire("Informasi","Pembayaran Batal","error");
        }
    });
}
</script>
@endsection
    <!--============= Dashboard Section Ends Here =============-->

@endsection
