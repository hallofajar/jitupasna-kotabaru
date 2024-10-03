<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" type="image/png" href={{ asset('assets/favicon.ico') }}" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Jitupasna Kotabaru
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

  <!--    CSS Files     -->
  <link href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}" rel="stylesheet" />
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <link href="{{ asset('assets/dashboard/css/paper-dashboard.css') }}" rel="stylesheet" />

  @yield('css')
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          {{-- <div class="logo-image-small">
            <img src="{{ asset('assets/dashboard/img/logo-small.png') }}">
          </div>
          <p>CT</p> --}}
        </a>
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Lambang_Kabupaten_Kotabaru.png">

      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ $active == 'Dashboard' ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="{{ $active == 'maps' ? 'active' : '' }}">
            <a href="{{ route('maps') }}">
              <i class="nc-icon nc-map-big"></i>
              <p>Maps</p>
            </a>
          </li>

          <li class="">
            <a href="#">
              <h6 class="m-0">Data</h6>
            </a>
          </li>

          <li class="{{ $active == 'resume-all' ? 'active' : '' }}">
            <a href="{{ route('all.resume') }}">
              <i class="nc-icon nc-chart-pie-36"></i>
              <p>RESUME</p>
            </a>
          </li>

          <li class="{{ $active == 'crosstab-all' ? 'active' : '' }}">
            <a href="{{ route('dashboard.crosstab', ['region' => 'all']) }}">
              <i class="nc-icon nc-tile-56"></i>
              <p>Crosstab</p>
            </a>
          </li>

          {{-- <li class="{{ $active == 'tablecrosstab-all' ? 'active' : '' }}">
            <a href="{{ route('dashboard.tablecrosstab.all') }}">
              <i class="nc-icon nc-tile-56"></i>
              <p>table Crosstab</p>
            </a>
          </li> --}}

        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">{{ $title }}</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Action</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">

        @yield('content')

      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://github.com/hallofajar" target="">Jitupasna Kabupaten Kotabaru</a>
                </li>
                <!-- <li><a href="www.sinaugis.com" target="_blank">SINAUGIS</a></li> -->
                <!-- <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li> -->
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by HalloFajar
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="{{ asset('assets/dashboard/js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/dashboard/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/dashboard/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/dashboard/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"
    integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('assets/dashboard/js/plugins/chartjs-plugin-labels.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('assets/dashboard/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/dashboard/js/paper-dashboard.js') }}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->

  @yield('js')
</body>

</html>
