<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fugu Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- toastr -->
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

<div class="main-wrapper">
   <!--===================== Sidebar Start =====================-->
 <section class="sidebar">
    <nav class="navbar navbar-expand-lg navbar-light flex-nowrap flex-column justify-content-between align-items-start p-0">
        <div class="mb-lg-5 w-100">
            <div class="d-none d-lg-block">
                <a class="navbar-brand d-flex align-items-start mb-5" href="/dashboard">
                    <img src="" alt="" class="mb-2">
                    <span class="fw-bold ms-2">Fugu</span>
                </a>
            </div>
            <div class="collapse navbar-collapse collapse show" id="navbarNavAltMarkup">
              <ul class="navbar-nav flex-row flex-lg-column justify-content-between align-items-center align-items-lg-start">
                <li>
                  <a class="nav-link d-flex align-items-center active" href="dashboard" data-tooltip="home" data-placement="top">
                    <i class="mdi mdi-view-dashboard"></i><div class="nav-text d-none d-md-block">Home</div>
                  </a>
              </li>
              {{-- <li>
                  <a class="nav-link d-flex align-items-center @@buy-sell" href="exchange" data-tooltip="exchange" data-placement="top">
                    <i class="mdi mdi-repeat"></i><div class="nav-text d-none d-md-block">exchange</div>
                  </a>
              </li>
              <li>
                  <a class="nav-link d-flex align-items-center @@accounts" href="accounts" data-tooltip="account" data-placement="top">
                    <i class="mdi mdi-account"></i><div class="nav-text d-none d-md-block">account</div>
                  </a>
              </li> --}}
              <li>
                  <a class="nav-link d-flex align-items-center @@settings" href="settings" data-tooltip="settings" data-placement="top">
                    <i class="mdi mdi-cog"></i></i><div class="nav-text d-none d-md-block">settings</div>
                  </a>
              </li>
              </ul>
            </div>
        </div>
        <div class="d-none d-lg-block w-100 pb-5">
            <div class="copyright">
                <p>&copy; <script>document.write(new Date().getFullYear());</script> Fugu</p>
            </div>
        </div>
    </nav>
</section>
  <!--===================== Sidebar End =====================-->
  <section class="ms-lg-240 px-lg-4 px-xl-0 mb-100 mb-lg-0">
    <!--===================== Navigation Start =====================-->
<div class="navigation-2 d-flex sticky-top px-lg-4 px-xl-0">
  <div class="container">
      <div class="row">
          <div class="col-12 d-flex justify-content-between align-items-center">
            <div class="d-block d-lg-none">
              <a class="navbar-brand d-flex align-items-start" href="/dashboard">
                  <img src="" alt="" class="mb-2">
                  <span class=" fw-bold  ms-2">Fugu</span>
                </a>
            </div>
            <div class="search-form">
              <form action="#" class="form">
                    <div class="input-group">
                      <input type="text" placeholder="search" class="form-control">
                      <div class="input-group-append  d-flex">
                          <button type="button" class="">
                              <span class="input-text"><i class="fa fa-search"></i></span>
                          </button>
                      </div>
                  </div>
              </form>
            </div>
            <div class="d-flex align-items-center">
                <div class="dropdown text-center text-sm-start">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown">
                        <span class="user-icon rounded-circle text-white"><i class="mdi mdi-account"></i></span>
                        <span class="user-name fw-medium ms-2 d-none d-sm-inline-block">{{Auth::user()->name}}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-light w-100 box-shadow border-0 p-0 mt-2 rounded" aria-labelledby="dropdownMenuButton2">
                        {{-- <li><a class="dropdown-item" href="accounts"><i class="mdi mdi-account"></i>account</a></li> --}}
                        {{-- <li><a class="dropdown-item" href="history"><i class="la la-book"></i>history</a></li> --}}
                        <li><a class="dropdown-item" href="settings"><i class="mdi mdi-cog"></i>settings</a></li>
                        <li><a class="dropdown-item logout" href="logout"><i class="mdi mdi-logout"></i>logout</a></li>
                    </ul>
                </div>
                <!-- dropdown end -->
            </div>

          </div>
      </div>
  </div>
</div>
<!--===================== Navigation End =====================-->
    
    @yield('content')
  </section>
</div>
<!-- jquery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<script src="plugins/toastr/toastr-init.js"></script>
<!-- circle-progress -->
<script src="plugins/circle-progress/circle-progress.min.js"></script>
<script src="plugins/circle-progress/circle-progress-init.js"></script>
<!--  flot-chart js -->
<script src="plugins/apexchart/apexcharts.min.js"></script>
<script src="plugins/apexchart/apexchart-init.js"></script>
<script src="plugins/apexchart/apexchart2-init.js"></script>
<!-- scripts -->
<script src="js/scripts.js"></script>

</body>

</html>