@extends('index')

@section('content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Kegiatan</h2>
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
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
                        <div class="news-box p-2">
                            <figure><img src="{{asset('storage/postingan/' . $item->foto)}}" alt="img" /></figure>
                            <h3>{{$item->judul}}</h3>
                            <span> {{$item->tanggal}}</span>
                            @if ($item->kategori != null)
                            <span>{{$item->kategori->name != null ? $item->kategori->name : 'unkown'}}</span>
                            @else
                            <span>uknown</span>
                            @endif
                            <p style="
                            overflow: hidden;
                            max-height: 200px; /* Adjust the maximum height to your desired value */
                            transition: max-height 0.3s ease;
                            ">{{$item->desk}}</p>
                            <a href="" class="btn btn-sm btn-warning">Baca Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            @else
                <h3>Belum ada kegiatan</h3>
            @endif
           
        </div>
    </div>
</div>
<!-- end Lastestnews -->
@endsection