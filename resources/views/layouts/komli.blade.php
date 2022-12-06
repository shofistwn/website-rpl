<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - RPL</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="https://shofistwn.github.io/rpl/public/assets/img/favicon.png" rel="icon">
    <link href="https://shofistwn.github.io/rpl/public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://shofistwn.github.io/rpl/public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://shofistwn.github.io/rpl/public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="https://shofistwn.github.io/rpl/public/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="https://shofistwn.github.io/rpl/public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="https://shofistwn.github.io/rpl/public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://shofistwn.github.io/rpl/public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="https://shofistwn.github.io/rpl/public/assets/css/main.css" rel="stylesheet">

    <!-- Summernote -->
    <script src="https://shofistwn.github.io/rpl/public/assets/js/jquery.js"></script>
    <link rel="stylesheet" href="https://shofistwn.github.io/rpl/public/assets/vendor/summernote/summernote-bs4.css">
    <script src="https://shofistwn.github.io/rpl/public/assets/vendor/summernote/summernote-bs4.js"></script>

    @stack('style')
    <style>
        table td {
            width: 50%
        }
    </style>

    <!-- =======================================================
  * Template Name: Nova - v1.2.0
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-contact">
    @include('sweetalert::alert')

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        @include('includes.navbar')
    </header><!-- End Header -->

    <main id="main">

        @if (!Request::is('/'))
            <!-- ======= Breadcrumbs ======= -->
            <div class="breadcrumbs d-flex align-items-center"
                style="background-image: url('https://shofistwn.github.io/rpl/public/assets/komli/') }}@yield('komli-img')');">
                <div class="container position-relative d-flex flex-column align-items-center">

                    <h2>@yield('title')</h2>

                </div>
            </div><!-- End Breadcrumbs -->
        @endif

        @yield('content')

    </main>

    <!-- ======= Footer ======= -->
    @include('includes.footer')
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="https://shofistwn.github.io/rpl/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://shofistwn.github.io/rpl/public/assets/vendor/aos/aos.js"></script>
    <script src="https://shofistwn.github.io/rpl/public/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="https://shofistwn.github.io/rpl/public/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="https://shofistwn.github.io/rpl/public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="https://shofistwn.github.io/rpl/public/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="https://shofistwn.github.io/rpl/public/assets/js/main.js"></script>

    @stack('script')

</body>

</html>
