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
                <p>anda akan melakukan donasi silahkan lanjutkan ke pembayaran</p>
                <p>NOMINAL: {{$transaksi->nominal}}</p>
                <button class="btn btn-primary" id="pay-button">Bayar Sekarang</button>
            </div>
        </div>
    </div>
</div>
<!-- end Lastestnews -->
@endsection

@section('scripts-midtrans')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{env('MIDTRANS_CLIENT_KEY')}}"></script>
    <script type="text/javascript">
    document.getElementById('pay-button').onclick = function(){
        // SnapToken acquired from previous step
        snap.pay('{{$transaksi->snap_token}}', {
        // Optional
        onSuccess: function(result){
            ///donasi-sukses/{id}
            window.location.href = "{{route('donasi.sukses', ['id' => $transaksi->id])}}"
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        },
        // Optional
        onPending: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        },
        // Optional
        onError: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        }
        });
    };
    </script>
@endsection