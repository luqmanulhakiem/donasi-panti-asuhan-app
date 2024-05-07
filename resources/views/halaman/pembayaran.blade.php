@extends('index')

@section('content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Pembayaran</h2>
                </div>
            </div>
        </div>
    </div>

</div>
 <!-- Lastestnews -->
<div class="Lastestnews blog">
    <div class="container text-center">
       <h1>Pindai QR Code untuk pembayaran</h1>
       <img src="{{$qrCodeUrl}}" alt="Qr Code Pembayaran">
    </div>
</div>
<!-- end Lastestnews -->
@endsection