      <!-- TOP Nav Bar -->
      <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <div class="iq-sidebar-logo">
                  <div class="top-logo">
                      <a href="index.html" class="logo">
                          <img src="images/logo.gif" class="img-fluid" alt="Logotipo">
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
