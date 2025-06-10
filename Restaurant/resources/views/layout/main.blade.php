
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="shortcut icon" type="image/png" href="{{ url('assets/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ url('assets/css/styles.min.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-fEfM8kXAZhtbT2z0ZhGEeUebdj+HZ7cYf8ZknHJL+OJPfmD0i93C5Ob+RUvRz1ZbJ6gb7C5Q2UgfI2zkVZNbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between p-3 border-bottom">
            <a href="#" class="text-decoration-none text-dark">
                <h2 class="m-0"><i class="me-2"></i>Restaurant</h2>
            </a>
            <button class="btn btn-sm d-xl-none d-block border-0 bg-transparent sidebartoggler" id="sidebarCollapse">
                <i class="fas fa-times fs-4"></i>
            </button>
        </div>

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                <a class="sidebar-link" href="#" aria-expanded="false">
                    <span>
                    <i class="ti ti-layout-dashboard"></i>
                    </span>
                    <span class="hide-menu">Dashboard</span>
                </a>
                </li>
                <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">~ Restaurant ~</span>
                </li>

                <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('menu') }}" aria-expanded="false">
                    <span>
                    <i class="ti ti-book"></i>
                    </span>
                    <span class="hide-menu">Menu</span>
                </a>
                </li>

                <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('meja') }}" aria-expanded="false">
                    <span>
                    <i class="ti ti-article"></i>
                    </span>
                    <span class="hide-menu">Meja</span>
                </a>
                </li>

                <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('kategori') }}" aria-expanded="false">
                    <span>
                    <i class="ti ti-cards"></i>
                    </span>
                    <span class="hide-menu">Kategori</span>
                </a>
                </li>
                <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('kasir') }}" aria-expanded="false">
                    <span>
                    <i class="ti ti-user"></i>
                    </span>
                    <span class="hide-menu">Kasir</span>
                </a>
                </li>

                <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">~ Pemesanan ~</span>
                </li>

                <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('reservasi') }}" aria-expanded="false">
                    <span>
                    <i class="ti ti-calendar"></i>
                    </span>
                    <span class="hide-menu">Reservasi</span>
                </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            @yield('content')
        </div>
      </div>
    </div>
  </div>
  <script src="{{ url('assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ url('assets/js/app.min.js') }}"></script>
  <script src="{{ url('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ url('assets/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ url('assets/js/dashboard.js') }}"></script>
</body>

</html>
