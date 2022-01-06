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
                <li class="active">
                    <a href="{{ Route('home') }}" class="iq-waves-effect">
                        <i class="ri-home-3-line"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="iq-waves-effect">

                        <span>Financeiro</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="iq-waves-effect">

                        <span>Clientes</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="iq-waves-effect">

                        <span>Pericia</span>
                    </a>
                </li>
                {{-- <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Apps</span></li> --}}
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
