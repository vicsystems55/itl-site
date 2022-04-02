    <!-- =========================
        Header
    =========================== -->
    <header class="header header-transparent header-full">
        <nav class="navbar navbar-expand-lg sticky-navbar">
          <div class="container">
            <a class="navbar-brand" href="index.html">
              <img style="width: 60px; max-height: 60px;" src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
              <img style="width: 60px; max-height: 60px;" src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
            </a>
            <button class="navbar-toggler" type="button">
              <span class="menu-lines"><span></span></span>
            </button>
            <div class="header__top-right d-none">
              <ul class="list-unstyled d-flex justify-content-end align-items-center mb-0">
                <li>
                  <div class="dropdown lang-dropdown">
                    <button class="dropdown-toggle lang-dropdown-toggle" id="langDropdown" data-toggle="dropdown">
                      <i class="icon-map"></i><span>English</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="langDropdown">
                      <a class="dropdown-item" href="#">Spain</a>
                      <a class="dropdown-item" href="#">France</a>
                    </div>
                  </div>
                </li>
                <li>
                  <ul class="navbar-actions list-unstyled mb-0 d-flex align-items-center">
                    <li class="d-none d-xl-block">
                      <a href="request-quote.html" class="btn action__btn-contact">Request A Quote</a>
                    </li>
                    <li>
                      <button class="action__btn action__btn-login open-login-popup">
                        <i class="icon-user"></i><span>Login</span>
                      </button>
                    </li>
                  </ul><!-- /.navbar-actions -->
                </li>
              </ul>
            </div><!-- /.header-top-right -->
            <div class="collapse navbar-collapse" id="mainNavigation">
              <ul class="navbar-nav ml-auto">
                <li class="nav__item has-dropdown">
                  <a href="{{route('home')}}"  class="dropdown-toggle nav__item-link active">Home</a>
                  
                </li><!-- /.nav-item -->
                <li class="nav__item has-dropdown">
                  <a href="{{route('about')}}"  class="dropdown-toggle nav__item-link">Company</a>
                  
                </li><!-- /.nav-item -->
                <li class="nav__item has-dropdown">
                  <a href="{{route('services')}}"  class="dropdown-toggle nav__item-link">Engineering Solutions</a>
            
                </li><!-- /.nav-item -->
                
                <li class="nav__item has-dropdown">
                  <a href="{{route('blog')}}"  class="dropdown-toggle nav__item-link">Blog</a>
             
                </li><!-- /.nav-item -->
                <li class="nav__item has-dropdown">
                  <a href="{{route('gallery')}}"  class="dropdown-toggle nav__item-link">Gallery</a>
               
                </li><!-- /.nav-item -->
                <li class="nav__item">
                  <a href="{{route('contact')}}" class="nav__item-link">Contacts</a>
                </li><!-- /.nav-item -->
              </ul><!-- /.navbar-nav -->
              <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
            </div><!-- /.navbar-collapse -->
            <div class="d-flex align-items-center">
              <a href="#" class="action__btn action__btn-search ml-30"><i class="icon-search"></i></a>
            </div>
          </div><!-- /.container -->
        </nav><!-- /.navabr -->
      </header><!-- /.Header -->