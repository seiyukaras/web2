<header id="header" class="header">
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="topbar-left text-left">
            <ul>
              <li><i class="fa fa-phone"></i> (+53) 22669336 </li>
              <li><i class="fa fa-envelope-o"></i> contacto@mekacuba.com</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="topbar-right text-right">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
              <li><a href="#"><i class="fa fa-twitter"></i> </a></li>
              <li><a href="#"><i class="fa fa-instagram"></i> </a></li>
              <li><div class="search-1">
                <a class="search-btn" href="javascript:void(0);"></a>
                <!-- Overlay Search -->
                <div class="overlay-search">
                  <div class="container">
                    <div class="row">
                      <div class="form_search-wrap">
                        <form>
                          <input class="search-input" placeholder="Type and hit Enter..." type="text">
                          <a href="#" class="search-close">
                            <span></span>
                            <span></span>
                          </a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Overlay Search -->
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- mega menu -->
    <div class="menu">
      <!-- menu start -->
      <nav id="menu-1" class="mega-menu ">
        <!-- menu list items container -->
        <section class="menu-list-items">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <!-- menu logo -->
                <ul class="menu-logo">
                  <li class="head-info">
                    <a href="/"><img id="logo_img" src="/images/logo.png" alt="logo"> </a>
                    <div class="head-info-content">
                      <div class="info-left pull-left">
                        <div class="time">
                          <h6>MON – SAT</h6>
                          <p>24 Hours</p>
                          
                        </div>
                        <div class="time mt-20">
                          <h6>SUNDAY</h6>
                          <p>Lunch: 11:30 – 2:00</p>
                          <p>Evening: 6:30 – 10:00</p>
                        </div>
                      </div>
                      <div class="info-right pull-right">
                        <div class="address">
                          <p>Calle Enramadas esq. Paseo Alameda</p>
                          <p> (+53) 22669336  </p>
                          <p>contacto@mekacuba.com </p>
                          <a href="#"><i class="fa fa-map-o pr-10"></i>  Find us here</a>
                          <ul class="list-inline mt-15">
                            <li><a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li><a href="#"> <i class="fa fa-twitter"></i> </a> </li>
                            <li><a href="#"> <i class="fa fa-google-plus"></i> </a> </li>
                            <li><a href="#"> <i class="fa fa-instagram"></i> </a> </li>
                            <li><a href="#"> <i class="fa fa-tripadvisor"></i> </a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- menu links -->
                <ul class="menu-links">
                  <!-- active class -->
                  <li>
                    <a class="active" href="/"> Home</a>
                    <!-- drop down multilevel  -->
                    </li>
           
                  <li>
                    <a href="/menu"> Menu </a>
                    <!-- drop down multilevel  -->
                   
                  </li>
                <li>
                  <li><a href="/reservation"> Reservar</a>
                  <!-- drop down multilevel  -->
                
                </li>
                <li><a href="/blog">blog </a>
                 <!--  <li><a href="/gallery">Gallery <i class="fa fa-angle-down fa-indicator"></i></a>-->
                <!-- drop down multilevel  -->
                <li><a href="/contact"> Contact us</a></li>
                @guest

                @else
                    <li><a href="{{ route('listBlog') }}"> Crear Blog</a></li>
                    <li><a href="{{ route('listReserva') }}"> Reservaciones</a></li>
                    <li>
                        <a href="javascript:void(0)"> {{ Auth::user()->name }} <i class="fa fa-angle-down fa-indicator"></i></a>

                        <ul class="drop-down-multilevel">
                            <li>
                                <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                  Cerrar Sección
                                </a>
                            </li>
                        </ul>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
          </ul>
        </div>
       </div>
      </div>
    </section>
   </nav>
  <!-- menu end -->
  </div>
</header>
