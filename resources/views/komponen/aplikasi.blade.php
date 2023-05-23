<!DOCTYPE html>
<html lang="en">

<head>
  {{-- Accordion --}}
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
      .accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
      }
      
      .active, .accordion:hover {
        background-color: #ccc; 
        
      }
      
      .panel {
        padding: 0 18px;
        display: none;
        background-color: white;
        overflow: hidden;
        margin: 10px;
      }
      </style>
  {{-- Accordion ends --}}
            
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>DigiLine</title>
  <link rel="shortcut icon" href="{{ URL::asset('/images/favicon.png')}}">
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ URL::asset('vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ URL::asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-expand-lg fixed-top align-items-top flex-row" id="navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center " type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="/dashboard">
            <img src="{{ URL::asset('images/logo.svg') }}" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="/dashboard">
            <img src="{{ URL::asset('images/logo-mini.svg') }}" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-lg-block ms-0">
              <h1 class="welcome-text">Welcome, <span class="text-black fw-bold">{{Auth::user()->name}} !</span></h1>
              <h3 class="welcome-sub-text">Saldo kamu, Rp. {{number_format(Auth::user()->saldo)}}</h3>           
            </li>
          </ul>
          <ul class="navbar-nav ms-auto nav-item dropdown">
            <li class="nav-item dropdown d-lg-block user-dropdown">
              <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-user"></i></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <p class="mb-1 mt-3 font-weight-semibold">{{Auth::user()->name}}</p>
                  <p class="fw-light text-muted mb-0">{{Auth::user()->no_telp}}</p>
                </div>
                
                <a class="dropdown-item" href='{{ route('profile.index') }}'><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Profile</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> Bantuan</a>
                <a class="dropdown-item" href="/auth/logout"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Logout</a>
              </div>
            </li>
          </ul>
        
        
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    {{-- header ends --}}
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav" style="position: fixed">
          <li class="nav-item nav-category">Fitur Utama</li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item {{ (request()->is('kirim/*')) ? 'active' : '' }}">
            <a class="nav-link" href="/kirim">
                <i class="menu-icon mdi mdi-cash-multiple"></i>
                <span class="menu-title">Kirim Saldo</span>
            </a>
          </li><li class="nav-item {{ (request()->is('pulsa/*')) ? 'active' : '' }}">
            <a class="nav-link" href="/pulsa">
              <i class="menu-icon mdi mdi-cellphone"></i>
              <span class="menu-title">Beli Pulsa</span>
            </a>
          </li><li class="nav-item {{ (request()->is('topup/*')) ? 'active' : '' }}">
            <a class="nav-link" href="/topup">
              <i class="menu-icon mdi mdi mdi-plus-circle-outline"></i>
              <span class="menu-title">Topup Saldo</span>
            </a>
          </li><li class="nav-item {{ (request()->is('riwayat/*')) ? 'active' : '' }}">
            <a class="nav-link" href="/riwayat">
              <i class="menu-icon mdi mdi-history"></i>
              <span class="menu-title">Riwayat Transaksi</span>
            </a>
          </li>
          @if(auth()->user()->is_admin == "1")
          <li class="nav-item nav-category">Admin Area</li>
          <li class="nav-item {{ (request()->is('user/*')) ? 'active' : '' }}">
            <a class="nav-link" href="/user">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User List</span>
            </a>
          </li>
          <li class="nav-item {{ (request()->is('wallet/*')) ? 'active' : '' }}">
            <a class="nav-link" href="/wallet">
              <i class="menu-icon mdi mdi-cash-multiple"></i>
              <span class="menu-title">Wallet List</span>
            </a>
          </li>
          @endif
        </ul>
      </nav>
      @yield('konten')
    </div>
    <!-- page-body-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
    </footer>
    <!-- partial -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ URL::asset('vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ URL::asset('vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ URL::asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ URL::asset('vendors/progressbar.js/progressbar.min.js') }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ URL::asset('js/off-canvas.js') }}"></script>
  <script src="{{ URL::asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ URL::asset('js/template.js') }}"></script>
  <script src="{{ URL::asset('js/settings.js') }}"></script>
  <script src="{{ URL::asset('js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ URL::asset('js/jquery.cookie.js" type="text/javascript') }}"></script>
  <script src="{{ URL::asset('js/dashboard.js') }}"></script>
  <script src="{{ URL::asset('js/Chart.roundedBarCharts.js') }}"></script>
 
  <!-- End custom js for this page-->
  {{-- accordion js --}}
  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;
    
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
  </script>
</body>

</html>
