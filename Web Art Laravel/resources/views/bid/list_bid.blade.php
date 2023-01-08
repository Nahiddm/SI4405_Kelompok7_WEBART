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
          <span>List Bid</span>
        </li>
      </ul>
    </div>
    <div
      class="bg_img hero-bg"
      data-background="{{asset('assets/images/banner/baige4.jpeg')}}"
    ></div>
    <div class="banner-shape d-none d-lg-block">
      <img src="{{asset('assets/css/img/banner-shape.png')}}" alt="css" />
    </div>
  </div>
  <!--============= Hero Section Ends Here =============-->

  <!--============= Account Section Starts Here =============-->
  <section class="account-section padding-bottom">
    <div class="container">
      <div class="account-wrapper mt--100 mt-lg--440">
          <div class="section-header mt-3">
            <h2 class="title">List Bid</h2>
            <p>Product Name : {{ $product->name }}</p>
            <p>Open Price : Rp{{number_format($product->open_price,0,',','.')}}</p>
            <p>Expires : {{date('d-m-Y', strtotime($product->end_date))}}</p>
          </div>
          <div class="container">
            <table class="table table-striped">
              <thead>
                  <th>#</th>
                  <th>User</th>
                  <th>Bid Price</th>
                  <th>Date</th>
                  <th>Status</th>
                  @if(auth()->user()->isAdmin())
                  <th>Action</th>
                  @endif
              </thead>
              <tbody>
                @php $i=1; @endphp
                @forelse ($listBid as $row)
                  <tr>
                      <td>{{$i++}}</td>
                      <td>{{ $row->user }}</td>
                      <td>Rp{{number_format($row->price,0,',','.')}}</td>
                      <td>{{date('d-m-Y', strtotime($row->tgl_bid))}}</td>
                      <td><span class="{{ ($row->status == 'waiting-list' ? 'badge bg-secondary text-white p-1' : 'badge bg-success text-white p-1') }}">{{ $row->status }}</span></td>
                      @if(auth()->user()->isAdmin())
                      @if($row->status_auction == 'done')
                        <td>Auction has been closed</td>
                      @else
                      <td>
                          <form id="form-id" action="{{url('save_winner/'.$row->id)}}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type="button" id="btnSimpan" class="badge bg-primary text-white p-1" onclick="konfirmasiSimpan()" style="cursor:pointer">Pilih Sebagai Pemenang</button type="button">
                          </form>                      
                      </td>
                      @endif
                      @endif
                  </tr>
                @empty
                <tr>
                  <td class="text-center" colspan="6">No Data Available</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
      </div>
    </div>
  </section>
  <!--============= Account Section Ends Here =============-->
@section('js')
<script>
function konfirmasiSimpan()
{
    event.preventDefault();
    var form = event.target.form;
    Swal.fire({
        icon: "question",
        title: "Konfirmasi",
        text: "Apakah anda yakin ingin menyimpan data?",
        showCancelButton: true,
        confirmButtonText: "Simpan",
        cancelButtonText: "Batal"
    }).then((result) => {
        if(result.value) {
            form.submit();
        } else {
            Swal.fire("Informasi","Data batal disimpan","error");
        }
    });
}
</script>
@endsection
@endsection
