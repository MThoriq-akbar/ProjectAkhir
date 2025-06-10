
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Restaurant</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Favicons -->
    <link href="{{ url('assets/images/logos/favicon.png') }}" rel="icon">
    <link href="{{ url('assets/images/logos/favicon.png') }}" rel="apple-touch-icon">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ url('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header d-flex flex-column justify-content-center">

        <i class="header-toggle d-xl-none bi bi-list"></i>

        <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ url('/dashboard') }}" class="active"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
            <li><a href="{{ url('login') }}"><i class="fa fa-right-to-bracket navicon"></i><span>Login</span></a></li>
            <li><a href="{{ url('register') }}"><i class="fa fa-user-plus navicon"></i><span>Register</span></a></li>
        </ul>
        </nav>

    </header>

    <main class="main">

    <!-- Hero Section -->
        <section id="hero" class="hero section light-background">
            <img src="{{ url('assets/images/backgrounds/backgroundResto.jpg')}}" alt="">
            <div class="container" data-aos="zoom-out">
                <div class="row justify-content-center">
                <div class="col-lg-9">
                    <h2>Selamat Datang di Restaurant</h2>
                    <p>Kualitas <span class="typed" data-typed-items="Restaurant dan Kepuasan Pelanggan di Utamakan !"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
                    <div class="social-links">
                    <a href="https://www.instagram.com/sma.muhammadiyah2plg_?igsh=MWZidG82NDh3ejk0Mw=="><i class="bi bi-instagram"></i></a>
                    <a href="https://www.facebook.com/share/1FbcpVjHDk/"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>
                </div>
            </div>

        </section><!-- /Hero Section -->
    </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ url('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ url('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ url('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <!-- Bootstrap CSS -->


    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ url('assets/js/main.js') }}"></script>

</body>

</html>
