<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CelestialUI Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{asset('dassets/vendors/typicons.font/font/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('dassets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject --> 
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('dassets/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('dassets/images/favicon.png')}}">
  </head>
  <body>
    
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      @include('layout-dashboard.header')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        {{-- pengaturan tema --}}
        {{-- <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close typcn typcn-delete-outline"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options" id="sidebar-light-theme">
              <div class="img-ss rounded-circle bg-light border mr-3"></div>
              Light
            </div>
            <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
              <div class="img-ss rounded-circle bg-dark border mr-3"></div>
              Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles primary"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default border"></div>
            </div>
          </div>
        </div> --}}
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
      @include('layout-dashboard.sidebar')
        <!-- partial -->
        <div class="main-panel">
          @yield('content-db')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('layout-dashboard.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="{{asset('dassets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('dassets/js/off-canvas.js')}}"></script>
    <script src="{{asset('dassets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('dassets/js/template.js')}}"></script>
    <script src="{{asset('dassets/js/settings.js')}}"></script>
    <script src="{{asset('dassets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{asset('dassets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('dassets/vendors/chart.js/Chart.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{asset('dassets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page-->
  </body>
</html>