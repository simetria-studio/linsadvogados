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
    <link rel="stylesheet" href="{{ asset('dark-html/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('dark-html/css/responsive.css') }}">
    <!-- Full calendar -->
    <link href='{{ asset('dark-html/fullcalendar/core/main.css') }}' rel='stylesheet' />
    <link href='{{ asset('dark-html/fullcalendar/daygrid/main.css') }}' rel='stylesheet' />
    <link href='{{ asset('dark-html/fullcalendar/timegrid/main.css') }}' rel='stylesheet' />
    <link href='{{ asset('dark-html/fullcalendar/list/main.css') }}' rel='stylesheet' />
    <link rel="stylesheet" href="{{ asset('assets/main.min.css') }}">
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
                            <a href="{{ route('clientes') }}" class="iq-waves-effect">
                                <i class="ri-group-line"></i>
                                <span>Clientes</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pericia') }}" class="iq-waves-effect">
                                <i class="ri-file-search-line"></i>
                                <span>Per??cia</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('audiencia') }}" class="iq-waves-effect">
                                <i>
                                    <x-iconpark-hammerandanvil-o />
                                </i>
                                <span>Audi??ncia</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('prazos') }}" class="iq-waves-effect">
                                <i>
                                    <x-iconpark-hammerandanvil-o />
                                </i>
                                <span>Prazos a cumprir</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('processos') }}" class="iq-waves-effect">
                                <i>
                                    <x-iconpark-hammerandanvil-o />
                                </i>
                                <span>Processos Arquivados</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('financeiro') }}" class="iq-waves-effect">
                                <i class="ri-money-dollar-circle-line"></i>
                                <span>Financeiro</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('config') }}" class="iq-waves-effect">
                                <i class="fas fa-cog"></i>
                                <span>Configura????es</span>
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
                            <img src="images/logo.gif" class="img-fluid" alt="">
                            <span>vito</span>
                        </a>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light p-0">

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
                    <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
                    <ul class="navbar-list">
                        <li>
                            <a href="#"
                                class="search-toggle iq-waves-effect d-flex align-items-center bg-primary rounded">

                                <div class="caption">
                                    <h6 class="mb-0 line-height text-white">{{ auth()->user()->name }}</h6>
                                    <span class="font-size-12 text-white">Disponivel</span>
                                </div>
                            </a>
                            <div class="iq-sub-dropdown iq-user-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white line-height">Ol?? {{ auth()->user()->name }}
                                            </h5>
                                            <span class="text-white font-size-12">Disponivel</span>
                                        </div>

                                        <div class="d-inline-block w-100 text-center p-3">
                                            <a class="bg-primary iq-sign-btn" href="{{ route('user.logout') }}"
                                                role="button">Sair<i class="ri-login-box-line ml-2"></i></a>
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
    <script src="{{ url('dark-html/js/jquery.min.js') }}"></script>
    <script src="{{ url('dark-html/js/popper.min.js') }}"></script>
    <script src="{{ url('dark-html/js/bootstrap.min.js') }}"></script>
    <!-- Appear JavaScript -->
    <script src="{{ url('dark-html/js/jquery.appear.js') }}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{ url('dark-html/js/countdown.min.js') }}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{ url('dark-html/js/waypoints.min.js') }}"></script>
    <script src="{{ url('dark-html/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow JavaScript -->
    <script src="{{ url('dark-html/js/wow.min.js') }}"></script>
    <!-- Apexcharts JavaScript -->
    <script src="{{ url('dark-html/js/apexcharts.js') }}"></script>
    <!-- Slick JavaScript -->
    <script src="{{ url('dark-html/js/slick.min.js') }}"></script>
    <!-- Select2 JavaScript -->
    <script src="{{ url('dark-html/js/select2.min.js') }}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{ url('dark-html/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{ url('dark-html/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{ url('dark-html/js/smooth-scrollbar.js') }}"></script>
    <!-- lottie JavaScript -->
    <script src="{{ url('dark-html/js/lottie.js') }}"></script>
    <!-- am core JavaScript -->
    <script src="{{ url('dark-html/js/core.js') }}"></script>
    <!-- am charts JavaScript -->
    <script src="{{ url('dark-html/js/charts.js') }}"></script>
    <!-- am animated JavaScript -->
    <script src="{{ url('dark-html/js/animated.js') }}"></script>
    <!-- am kelly JavaScript -->
    <script src="{{ url('dark-html/js/kelly.js') }}"></script>
    <!-- Flatpicker Js -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ url('dark-html/js/chart-custom.js') }}"></script>
    <!-- Custom JavaScript -->
    <script src="{{ url('dark-html/js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ url('assets/jquery.maskMoney.min.js') }}"></script>
    <script>
        $('#buscaring').on('click', function() {
            $value = $('#ceping').val();
            $.ajax({
                type: 'get',
                url: '{{ route('address.cep') }}',
                data: {
                    'search': $value
                },
                success: function(data) {
                    console.log(data);
                    $('#rua').val(data.street);
                    $('#bairro').val(data.district);
                    $('#cidade').val(data.city);
                    $('#estado').val(data.uf);
                }
            });
        });
        $('[name="cpf"]').mask('000.000.000-00');
        $('[name="search"]').mask('000.000.000-00');
        $('[name="rg"]').mask('99.999.999-9');
        $('[name="cep"]').mask('99999-999');
        $('[name="telefone"]').mask('(99) 9999-9999');
        $('[name="whatsapp"]').mask('(99) 99999-9999');


        $("#valor").maskMoney({
            symbol: 'R$ ',
            thousands: '.',
            decimal: ',',
            symbolStay: true
        });
        $("#parcela").maskMoney({
            symbol: 'R$ ',
            thousands: '.',
            decimal: ',',
            symbolStay: true
        });
    </script>
    @if (Session::has('success'))
        <script type="text/javascript">
            Swal.fire({
                title: 'Sucesso!',
                icon: 'success',
                text: "{{ Session::get('success') }}",
                timer: 5000,
                type: 'success'
            }).then((result) => {
                // Reload the Page
                location.reload();
            });
        </script>
    @endif
</body>

</html>
