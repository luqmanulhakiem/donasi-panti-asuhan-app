<header>
    <!-- header inner -->
    <div class="header">
       <div class="head_top">
          <div class="container">
             <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="top-box">
                   <ul class="sociel_link">
                    <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                    <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
               </div>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="top-box">
                   <p>Jln. apa saja </p>
               </div>
             </div>
          </div>
       </div>
    </div>
    <div class="container">
       <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
             <div class="full">
                <div class="center-desk">
                    <div class="justify-content-start">
                        <h4 class="mt-3 pb-0" style="margin-bottom: -10px !important">Panti Asuhan</h4>
                        <h1 class="mt-0 p-0">AISYIYAH</h1>
                    </div>
                   {{-- <div class="logo"> <a href="index.html"><img src="{{asset('assets/images/logo.jpg')}}" alt="logo"/></a> </div> --}}
                </div>
             </div>
          </div>
          <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
             <div class="menu-area">
                <div class="limit-box">
                   <nav class="main-menu">
                      <ul class="menu-area-main">
                         <li class="active"> <a href="/">Home</a> </li>
                         <li> <a href="product.html">Donasi</a> </li>
                         <li class=""> <a href="{{route('kegiatan')}}">Kegiatan</a> </li>
                        <li class=" dropdown d-none d-md-inline-block">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tentang Kami
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="{{route('sejarah')}}">Sejarah Lembaga</a></li>
                                <li><a class="dropdown-item" href="{{route('visi-misi')}}">Visi dan Misi</a></li>
                                 <li> <a class="dropdown-item" href="{{route('anak-asuh')}}">Anak Asuh</a> </li>
                                <li><a class="dropdown-item" href="{{route('pengurus')}}">Kepengurusan</a></li>
                                <li><a class="dropdown-item" href="{{route('galeri')}}">Galeri</a></li>
                            </ul>
                        </li>
                        {{-- <li class=" dropdown d-none d-sm-none d-md-block"> <!-- Hide on small devices -->
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tentang Kami
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="{{route('sejarah')}}">Sejarah Lembaga</a></li>
                                <li><a class="dropdown-item" href="{{route('visi-misi')}}">Visi dan Misi</a></li>
                                <li><a class="dropdown-item" href="{{route('pengurus')}}">Kepengurusan</a></li>
                                <li><a class="dropdown-item" href="{{route('galeri')}}">Galeri</a></li>
                            </ul>
                        </li> --}}
                        <!-- Display dropdown items as regular list items on small devices -->

                        <li><a class="d-md-none d-lg-none" href="{{route('sejarah')}}">Sejarah Lembaga</a></li>
                        <li><a class="d-md-none d-lg-none" href="{{route('visi-misi')}}">Visi dan Misi</a></li>
                        <li><a class="d-md-none d-lg-none" href="{{route('anak-asuh')}}">Anak Asuh</a></li>
                        <li><a class="d-md-none d-lg-none" href="{{route('pengurus')}}">Kepengurusan</a></li>
                        <li><a class="d-md-none d-lg-none" href="{{route('galeri')}}">Galeri</a></li>
                      </ul>
                   </nav>
                </div>
             </div>
          </div>
          {{-- <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
             <li><a class="buy" href="#">Login</a></li>
          </div> --}}
       </div>
    </div>
    <!-- end header inner --> 
 </header>