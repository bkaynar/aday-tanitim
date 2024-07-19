<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Burak Kaynar">
    <meta name="keywords" content="Kırşehir Ahi Evran Üniversitesi, Ahi Evran Üniversitesi, Kırşehir Üniversitesi, Kırşehir, Ahi Evran, Üniversite, Ahi Evran Üniversitesi Aday Öğrenci, Ahi Evran Üniversitesi Aday Öğrenci Sayfası">
    <meta name="description" content="Kırşehir Ahi Evran Üniversitesi Aday Öğrenci Sayfası">
    <!-- ======== Page title ============ -->
    <title>Kırşehir Ahi Evran Üniversitesi | Aday Öğrenci</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/faveicon.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css">

    <style>
        @font-face {
            font-family: 'Camber';
            src: url('assets/fonts/Camber_W04_Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Camber';
            src: url('assets/fonts/Camber_W04_Medium.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: 'Camber';
            src: url('assets/fonts/Camber_W04_Bold.ttf') format('truetype');
            font-weight: bold;
            font-style: normal;
        }

        @font-face {
            font-family: 'Camber';
            src: url('assets/fonts/Camber_W04_Bold_Italic.ttf') format('truetype');
            font-weight: bold;
            font-style: italic;
        }

        @font-face {
            font-family: 'Camber';
            src: url('assets/fonts/Camber_W04_Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal;
        }


        body {
            font-family: 'Camber', sans-serif;
        }
    </style>
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="box d-grid gap-4">
            <span class="man-pre m-auto">
                <img src="assets/img/banner/ahievran_logo.png" alt="img">
            </span>
            <span class="fz-40 fw-bold text-center d-block" style="color:#285B96">
                Kırşehir Ahi Evran Üniversitesi
            </span>
        </div>
    </div>

    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-md-flex d-center" aria-label="scroll Bar Button"><i class="mat-icon fas fa-angle-double-up"></i></button>
    <!-- Scroll To Top End -->
    @include('analayout.header')
    @yield('content')
    @include('analayout.footer')


    <!--<< All JS Plugins >>-->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Nice Select Js >>-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< Filter Mixtup Js >>-->
    <script src="assets/js/mixitup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="assets/js/wow.min.js"></script>
    <!--<< Main.js >>-->
    <script src="assets/js/main.js"></script>
</body>

</html>