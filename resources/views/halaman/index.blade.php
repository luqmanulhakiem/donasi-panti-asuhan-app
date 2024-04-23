@extends('index')

@section('content')
<section class="slider_section">
    <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">

       <div class="carousel-inner">
          <div class="carousel-item active">
             <img class="first-slide" src="{{asset('assets/images/banner2.jpeg')}}" alt="First slide">
             {{-- <div class="container">
                <div class="carousel-caption relative">
                  <div class="card col-5">
                     <h1>Visi</h1>
                     <p class="mb-2">It is a long established fact that a r <br>
                       eader will be distracted by the readable content of a page </p>
                  </div> --}}
                   {{-- <a  href="#">see more Products</a> --}}
                {{-- </div>
             </div> --}}
          </div>
          {{-- <div class="carousel-item">
             <img class="second-slide" src="{{asset('assets/images/banner2.jpeg')}}" alt="Second slide">
             <div class="container">
                <div class="carousel-caption relative">
                   <h1>Our <br> <strong class="black_bold">Latest </strong><br>
                      <strong class="yellow_bold">Product </strong></h1>
                   <p>It is a long established fact that a r <br>
                     eader will be distracted by the readable content of a page </p>
                   <a  href="#">see more Products</a>
                {{-- </div> --}}
             </div>
          </div>
          <div class="carousel-item">
             <img class="third-slide" src="{{asset('assets/images/banner2.jpeg')}}" alt="Third slide">
             <div class="container">
                <div class="carousel-caption relative">
                   <h1>Our <br> <strong class="black_bold">Latest </strong><br>
                      <strong class="yellow_bold">Product </strong></h1>
                   <p>It is a long established fact that a r <br>
                     eader will be distracted by the readable content of a page </p>
                   <a  href="#">see more Products</a>
                {{-- </div> --}}
             </div>
          </div> --}}

       </div>
       {{-- <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
       <i class='fa fa-angle-right'></i>
       </a>
       <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
       <i class='fa fa-angle-left'></i>
       </a> --}}
       
    </div>
 </section>

 <div class="Lastestnews blog">
   <div class="container">
      <div class="p-4 row text-start justify-content-between mb-5">
         <h3>Kegiatan Terbaru</h3>
         <a href="{{route('kegiatan')}}" class="btn btn-sm btn-primary">Lihat Semua Kegiatan</a>
      </div>
       <div class="row">
         @if (count($data) > 0)
            @foreach ($data as $item)
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 margin">
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
                     max-height: 100px; /* Adjust the maximum height to your desired value */
                     transition: max-height 0.3s ease;
                     ">{{$item->desk}}</p>
                     <a href="" class="btn btn-sm btn-warning">Baca Selengkapnya</a>
                  </div>
               </div>
            @endforeach
         @else
            <h3 class="text-center">Belum ada kegiatan</h3>
         @endif
       </div>
   </div>
</div>
@endsection