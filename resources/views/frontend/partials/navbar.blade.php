
<body class="u-body--header-side-push-right">
        <main>
          <!-- Header Toggle Button -->
          <button class="btn u-btn-white u-header-toggler u-header-toggler--top-left g-pa-0" id="header-toggler" aria-haspopup="true" aria-expanded="false" aria-controls="js-header" aria-label="Toggle Header" data-target="#js-header">
            <span class="hamburger hamburger--collapse">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
            </span>
          </button>
          <!-- End Header Toggle Button -->
      
          <!-- Sidebar Navigation -->
          <div id="js-header" class="u-header u-header--side" aria-labelledby="header-toggler" data-header-behavior="push" data-header-position="right" data-header-breakpoint="lg" data-header-classes="g-transition-0_5" data-header-body-classes="g-transition-0_5"
          data-header-overlay-classes="g-bg-black-opacity-0_8 g-transition-0_5">
            <div style="background: #070E18;" class="u-header__sections-container g-brd-right--lg g-brd-gray-light-v5 g-py-10 g-py-40--lg g-px-14--lg">
              <div class="u-header__section u-header__section--light">
                <nav class="navbar navbar-expand-lg">
                  <div class="js-mega-menu container">
                    <!-- Responsive Toggle Button -->
                    <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                      <span class="hamburger hamburger--slider">
                    <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                      </span>
                      </span>
                    </button>
                    <!-- End Responsive Toggle Button -->
                    <!-- Logo -->
                <a href="{{URL::to('/')}}" class="navbar-brand g-mb-40--lg">
                    <img src="{{asset('assets/logo/logo.png')}}" alt="Pahenlo Batti Muni" style="height:120px; width:170px;">
                    </a>
                    <!-- End Logo -->
      
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse align-items-center flex-sm-row w-100 g-mt-20 g-mt-0--lg g-mb-40" id="navBar">
                      <ul class="navbar-nav ml-auto text-uppercase text-center g-font-weight-600 u-sub-menu-v1"> 
                        <li class="nav-item g-my-5">
                        <a href="{{route('home')}}" class="nav-link" style="font-size:30px;">Home
                        
                      </a>
                        </li>
                        <li class="nav-item g-my-5">
                                <a href="#!" class="nav-link" style="font-size:27px;">Got Code?
                        
                      </a>
                        </li>
                        <li class="nav-item g-my-5">
                        <a href="#!" class="nav-link" style="font-size:24px;">Album
                        
                      </a>
                        </li>
                        <li class="nav-item g-my-5">
                                <a href="#!" class="nav-link" style="font-size:21px;">About
                        
                      </a>
                        </li>
                        <li class="nav-item g-my-5">
                                <a href="#!" class="nav-link" style="font-size:18px;">Gallery
                        
                      </a>
                        </li>
                      </ul>
                    </div>
                    <!-- End Navigation -->
      
                    <div class="text-center g-hidden-lg-down">
                      <ul class="list-inline g-mb-10">
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                          <a href="#!" class="g-color-main g-color-primary--hover">
                            <i class="fa fa-facebook"></i>
                          </a>
                        </li>
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
                          <a href="#!" class="g-color-main g-color-primary--hover">
                            <i class="fa fa-instagram"></i>
                          </a>
                        </li>
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                          <a href="#!" class="g-color-main g-color-primary--hover">
                            <i class="fa fa-twitter"></i>
                          </a>
                        </li>
                      </ul>
                      <p class="mb-0">2018 &copy; All Rights Reserved.</p>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </div>
          <!-- End Sidebar Navigation -->