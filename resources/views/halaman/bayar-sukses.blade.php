@extends('index')

@section('content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Bayar</h2>
                </div>
            </div>
        </div>
    </div>

</div>
 <!-- Lastestnews -->
<div class="Lastestnews blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>anda berhasil donasi sebesar {{$transaksi->nominal}}</p>
                <button class="btn btn-primary" id="pay-button">Cetak Pembayaran</button>
            </div>
        </div>
    </div>
</div>
<!-- end Lastestnews -->
@endsection