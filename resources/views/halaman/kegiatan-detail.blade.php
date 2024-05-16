@extends('index')

@section('content')
<div class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    {{-- <h2>Sejarah</h2> --}}
                </div>
            </div>
        </div>
    </div>

</div>

<div class="about mb-5">
    <div class="container">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
             <div class="about_box text-center">
                <figure><img src="{{asset('storage/postingan/' . $item->foto)}}"/></figure>
             </div>
          </div>
           <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
             <div class="about_box">
                <h3>{{$item->judul}}</h3>
                <span> {{$item->tanggal}}</span>
                  @if ($item->kategori != null)
                  <span>{{$item->kategori->name != null ? $item->kategori->name : 'unkown'}}</span>
                  @else
                  <span>uknown</span>
                  @endif
                  <p>{{$item->desk}}</p>
             </div>
       </div>
    </div>
 </div>
@endsection