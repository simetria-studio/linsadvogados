<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Lins Advogados</title>
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
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
    <link rel="stylesheet" href="{{ asset('dark-html/css/style.min.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('dark-html/css/responsive.css') }}">
    <!-- Full calendar -->
    <link href='{{ asset('dark-html/fullcalendar/core/main.css') }}' rel='stylesheet' />
    <link href='{{ asset('dark-html/fullcalendar/daygrid/main.css') }}' rel='stylesheet' />
    <link href='{{ asset('dark-html/fullcalendar/timegrid/main.css') }}' rel='stylesheet' />
    <link href='{{ asset('dark-html/fullcalendar/list/main.css') }}' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://kit.fontawesome.com/e67788a73f.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <div class="wrapper">
        <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
                <a href="{{ route('home') }}">
                    <img src="{{ url('assets/img/logo.png') }}" class="img-fluid" alt="" width="80" height="80">
                </a>
                <div class="iq-menu-bt-sidebar">
                    <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                            <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar-scrollbar">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="iq-menu-title">
                            <i class="ri-subtract-line"></i>
                            <span>Dashboard</span>
                        </li>
                        <li class="">
                            <a href="{{ Route('home') }}" class="iq-waves-effect">
                                <i class="ri-home-3-line"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('financeiro') }}" class="iq-waves-effect">
                                <i class="ri-money-dollar-circle-line"></i>
                                <span>Financeiro</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('clientes') }}" class="iq-waves-effect">
                                <i class="ri-group-line"></i>
                                <span>Clientes</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="iq-waves-effect">
                                <i class="ri-file-search-line"></i>
                                <span>Perícia</span>
                            </a>
                        </li>
                        {{-- <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Apps</span></li> --}}
                    </ul>
                </nav>
                <div class="p-3"></div>
            </div>
        </div>
      <!-- TOP Nav Bar -->
      <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <div class="iq-sidebar-logo">
                <div class="top-logo">
                    <a href="index.html" class="logo">
                        <img src="{{ url('assets/img/logo.png') }}" class="img-fluid" alt="Logotipo">
                        <span>vito</span>
                    </a>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="navbar-left">

                    <div class="iq-search-bar">

                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="iq-menu-bt align-self-center">
                    <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                        <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list">
                    </ul>
                </div>
                <ul class="navbar-list">
                    <li>
                        <a href="#"
                            class="search-toggle iq-waves-effect d-flex align-items-center bg-primary rounded">
                            <img src="https://ui-avatars.com/api/?size=512&amp;background=5B4699&amp;color=fff&amp;name={{ auth()->user()->name }}" class="img-fluid rounded mr-3"
                                alt="user">
                            <div class="caption">
                                <h6 class="mb-0 line-height text-white">{{ Auth::user()->name }}</h6>
                                <span class="font-size-12 text-white">Disponivel</span>
                            </div>
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white line-height">Olá {{ Auth::user()->name }}
                                        </h5>
                                        <span class="text-white font-size-12">Disponivel</span>
                                    </div>

                                    <div class="d-inline-block w-100 text-center p-3">

                                        <a class="bg-primary iq-sign-btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                            {{ __('Sair') }}<i class="ri-login-box-line ml-2"></i>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>

                                        {{-- <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign
                                              out</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- TOP Nav Bar END -->

        <div id="content-page" class="content-page">
            @yield('content')
        </div>
    </div>
    <footer class="bg-white iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6 text-right">
                    Copyright {{ date('Y') }} <a href="#">Cube</a> Todos Direitos Reservados.
                </div>
            </div>
        </div>
    </footer>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>
