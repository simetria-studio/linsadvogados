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
                      <ul id="topbar-data-icon" class="d-flex p-0 topbar-menu-icon">
                          <li class="nav-item">
                              <a href="#" class="nav-link font-weight-bold search-box-toggle"><i
                                      class="ri-home-4-line"></i></a>
                          </li>
                          <li><a href="#" class="nav-link"><i class="ri-message-line"></i></a></li>
                          <li><a href="#" class="nav-link"><i class="ri-file-list-line"></i></a></li>
                          <li><a href="#" class="nav-link"><i class="ri-question-answer-line"></i></a></li>
                          <li><a href="#" class="nav-link router-link-exact-active router-link-active"><i
                                      class="ri-chat-check-line"></i></a></li>
                          <li><a href="#" class="nav-link"><i class="ri-inbox-line"></i></a>
                          </li>
                      </ul>
                      <div class="iq-search-bar">
                          <form action="#" class="searchbox">
                              <input type="text" class="text search-input" placeholder="Pesquise aqui...">
                              <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                              <div class="searchbox-datalink">
                                  <h6 class="pl-3 pt-3">Páginas</h6>
                                  {{-- <ul class="m-0 pl-3 pr-3 pb-3">
                                        <li class="iq-bg-primary-hover rounded">
                                            <a href="{{ route("financeiro") }}" class="nav-link router-link-exact-active router-link-active pr-2">Financeiro</a></li>
                                        <li class="iq-bg-primary-hover rounded">
                                            <a href="{{ route("clientes") }}" class="nav-link router-link-exact-active router-link-active pr-2">Clientes</a></li>
                                        <li class="iq-bg-primary-hover rounded">
                                            <a href="{{ route("pericia") }}" class="nav-link">Pericia</a>
                                        </li>
                                    </ul> --}}
                              </div>
                          </form>
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
                              <img src="{{ url('dark-html/images/user/1.jpg') }}" class="img-fluid rounded mr-3"
                                  alt="user">
                              <div class="caption">
                                  <h6 class="mb-0 line-height text-white">{{ Auth::user()->name }}</h6>
                                  <span class="font-size-12 text-white">Available</span>
                              </div>
                          </a>
                          <div class="iq-sub-dropdown iq-user-dropdown">
                              <div class="iq-card shadow-none m-0">
                                  <div class="iq-card-body p-0 ">
                                      <div class="bg-primary p-3">
                                          <h5 class="mb-0 text-white line-height">Olá {{ Auth::user()->name }}
                                          </h5>
                                          <span class="text-white font-size-12">Available</span>
                                      </div>
                                      <a href="{{ route('perfil') }}" class="iq-sub-card iq-bg-primary-hover">
                                          <div class="media align-items-center">
                                              <div class="rounded iq-card-icon iq-bg-primary">
                                                  <i class="ri-file-user-line"></i>
                                              </div>
                                              <div class="media-body ml-3">
                                                  <h6 class="mb-0 ">Meu Perfil</h6>
                                                  <p class="mb-0 font-size-12">Ver os detalhes do seu perfil.</p>
                                              </div>
                                          </div>
                                      </a>
                                      <a href="{{ route('edit-perfil') }}" class="iq-sub-card iq-bg-primary-hover">
                                          <div class="media align-items-center">
                                              <div class="rounded iq-card-icon iq-bg-primary">
                                                  <i class="ri-profile-line"></i>
                                              </div>
                                              <div class="media-body ml-3">
                                                  <h6 class="mb-0 ">Editar Perfil</h6>
                                                  <p class="mb-0 font-size-12">Editar seu perfil.</p>
                                              </div>
                                          </div>
                                      </a>
                                      <a href="{{ route('conta') }}" class="iq-sub-card iq-bg-primary-hover">
                                          <div class="media align-items-center">
                                              <div class="rounded iq-card-icon iq-bg-primary">
                                                  <i class="ri-account-box-line"></i>
                                              </div>
                                              <div class="media-body ml-3">
                                                  <h6 class="mb-0 ">Configurações de Conta</h6>
                                                  <p class="mb-0 font-size-12">Alterar as configurações da sua conta.</p>
                                              </div>
                                          </div>
                                      </a>
                                      <a href="{{ route('privacidade') }}" class="iq-sub-card iq-bg-primary-hover">
                                          <div class="media align-items-center">
                                              <div class="rounded iq-card-icon iq-bg-primary">
                                                  <i class="ri-lock-line"></i>
                                              </div>
                                              <div class="media-body ml-3">
                                                  <h6 class="mb-0 ">Configurações de Privacidade</h6>
                                                  <p class="mb-0 font-size-12">Controle suas privacidades.</p>
                                              </div>
                                          </div>
                                      </a>
                                      <div class="d-inline-block w-100 text-center p-3">

                                          <a class="bg-primary iq-sign-btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}<i class="ri-login-box-line ml-2"></i>
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
