<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Lins Advogados</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}"/> --}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('dark-html/css/bootstrap.min.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('dark-html/css/typography.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('dark-html/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('dark-html/css/responsive.css') }}">
    <!-- Full calendar -->
    <link href='{{ asset('dark-html/fullcalendar/core/main.css') }}' rel='stylesheet' />
    <link href='{{ asset('dark-html/fullcalendar/daygrid/main.css') }}' rel='stylesheet' />
    <link href='{{ asset('dark-html/fullcalendar/timegrid/main.css') }}' rel='stylesheet' />
    <link href='{{ asset('dark-html/fullcalendar/list/main.css') }}' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('dark-html/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dark-html/js/popper.min.js') }}"></script>
    <script src="{{ asset('dark-html/js/bootstrap.min.js') }}"></script>
    <!-- Appear JavaScript -->
    <script src="{{ asset('dark-html/js/jquery.appear.js') }}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{ asset('dark-html/js/countdown.min.js') }}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{ asset('dark-html/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('dark-html/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow JavaScript -->
    <script src="{{ asset('dark-html/js/wow.min.js') }}"></script>
    <!-- Apexcharts JavaScript -->
    <script src="{{ asset('dark-html/js/apexcharts.js') }}"></script>
    <!-- Slick JavaScript -->
    <script src="{{ asset('dark-html/js/slick.min.js') }}"></script>
    <!-- Select2 JavaScript -->
    <script src="{{ asset('dark-html/js/select2.min.js') }}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{ asset('dark-html/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{ asset('dark-html/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{ asset('dark-html/js/smooth-scrollbar.js') }}"></script>
    <!-- lottie JavaScript -->
    <script src="{{ asset('dark-html/js/lottie.js') }}"></script>
    <!-- am core JavaScript -->
    <script src="{{ asset('dark-html/js/core.js') }}"></script>
    <!-- am charts JavaScript -->
    <script src="{{ asset('dark-html/js/charts.js') }}"></script>
    <!-- am animated JavaScript -->
    <script src="{{ asset('dark-html/js/animated.js') }}"></script>
    <!-- am kelly JavaScript -->
    <script src="{{ asset('dark-html/js/kelly.js') }}"></script>
    <!-- Flatpicker Js -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('dark-html/js/chart-custom.js') }}"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('dark-html/js/custom.js') }}"></script>
</body>

</html>

</body>

</html>
