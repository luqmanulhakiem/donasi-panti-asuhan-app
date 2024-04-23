<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        {{-- PROFILE  --}}
        {{-- <div class="d-flex sidebar-profile">
          <div class="sidebar-profile-image">
            <img src="images/faces/face29.png" alt="image">
            <span class="sidebar-status-indicator"></span>
          </div>
          <div class="sidebar-profile-name">
            <p class="sidebar-name">
              Kenneth Osborne
            </p>
            <p class="sidebar-designation">
              Welcome
            </p>
          </div>
        </div> --}}
        {{-- Search --}}
        {{-- <div class="nav-search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
            <div class="input-group-append">
              <span class="input-group-text" id="search">
                <i class="typcn typcn-zoom"></i>
              </span>
            </div>
          </div>
        </div> --}}
        <p class="sidebar-menu-title">Dash menu</p>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="typcn typcn-device-desktop menu-icon"></i>
          <span class="menu-title">Dashboard <span class="badge badge-primary ml-3">New</span></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="typcn typcn-briefcase menu-icon"></i>
          <span class="menu-title">Postingan</span>
          <i class="typcn typcn-chevron-right menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('db.postingan')}}">Postingan</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('db.kategori')}}">Kategori</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('db.galeri')}}">
          <i class="typcn typcn-image menu-icon"></i>
          <span class="menu-title">Galeri</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('db.donatur')}}">
          <i class="typcn typcn-user-outline menu-icon"></i>
          <span class="menu-title">Donatur</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('db.anak-asuh')}}">
          <i class="typcn typcn-group menu-icon"></i>
          <span class="menu-title">Anak Asuh</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('db.pengurus')}}">
          <i class="typcn typcn-user menu-icon"></i>
          <span class="menu-title">Pengurus</span>
        </a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="{{route('konfigurasi')}}">
          <i class="typcn typcn-spanner menu-icon"></i>
          <span class="menu-title">Konfigurasi</span>
        </a>
      </li>
     

    </ul>
  </nav>