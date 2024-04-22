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
         <a href="" class="btn btn-sm btn-primary">Lihat Semua Kegiatan</a>
      </div>
       <div class="row">
           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 margin">
               <div class="news-box">
                   <figure><img src="{{asset('assets/images/1.jpg')}}" alt="img" /></figure>
                   <h3>Live With Music</h3>
                   <span> March 20</span><span>Kategori</span>
                   <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
               </div>
           </div>
           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 margin">
               <div class="news-box">
                   <figure><img src="{{asset('assets/images/2.jpg')}}" alt="img" /></figure>
                   <h3>Best Music</h3>
                   <span> March 20</span><span>Kategori</span>
                   <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
               </div>
           </div>
           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 margin">
               <div class="news-box">
                   <figure><img src="{{asset('assets/images/3.jpg')}}" alt="img" /></figure>
                   <h3>Live With Music</h3>
                   <span> March 20</span><span>Kategori</span>
                   <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
               </div>
           </div>
           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
               <div class="news-box">
                   <figure><img src="{{asset('assets/images/3.jpg')}}" alt="img" /></figure>
                   <h3>Live With Music</h3>
                   <span> March 20</span><span>Kategori</span>
                   <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection