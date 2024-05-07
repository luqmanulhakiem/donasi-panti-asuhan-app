@extends('index')

@section('content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Donasi</h2>
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
                {{-- <form action="{{route('donasi.post')}}" method="POST"> --}}
                <form action="{{route('donasi.payment')}}" method="GET">
                    
                    @csrf
                    @if ($errors->any())
                <div class="pt-4 pb-2">
                    @foreach ($errors->all() as $error)
                    <p class="text-center small">{{ $error }}</p>
                    @endforeach
                </div>
                @endif
                    <div class="form-group">
                        <label for="">Nominal</label>
                        <input type="number" name="nominal" class="form-control" placeholder="Cth: 10000" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Cth: Bima" required>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Cth: Jalan Raya ABCEFG No.1">
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="">No Whatsapp/Telepon</label>
                            <input type="number" name="hp" class="form-control" placeholder="Cth: 08XXYYYYZZZZ" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Cth: Anda@gmail.com" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="ket" placeholder="keterangan (tidak wajib)" class="form-control">
                    </div>
                    <button class="btn btn-primary">Donasi</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- end Lastestnews -->
@endsection