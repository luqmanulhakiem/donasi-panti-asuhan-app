@extends('index')

@section('content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Pengurus</h2>
                </div>
            </div>
        </div>
    </div>

</div>
 <!-- Lastestnews -->
<div class="Lastestnews blog">
    <div class="container">
        <div class="row">
            @if (count($data) > 0)
            @foreach ($data as $item)
                <div class="mt-3 col-xl-6 col-lg-6 col-md-4 col-sm-12 margin">
                    <div class="card">
                        <div class="row">
                            <div class="col-5 d-flex justify-content-center align-items-center">
                                <figure class="text-center rounded-circle">
                                    <img style="width: 150px !important; height: 200px !important;" src="{{asset('storage/pengurus/' . $item->foto)}}" alt="img" />
                                </figure>
                            </div>
                            <div class="col-7 d-flex justify-content-start align-items-center">
                                <div>
                                    <h2>{{$item->nama}}</h2>
                                    <p>{{$item->jabatan}}</p>
                                    <hr>
                                    <p>{{$item->hp}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
            <h3>Belum ada data</h3>
                
            @endif

        </div>
    </div>
</div>
<!-- end Lastestnews -->
@endsection