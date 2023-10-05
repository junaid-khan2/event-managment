@extends('layout.app')

@section('title')
Home
@endsection

@section('content')





		
  <!-- backtotop - start -->
  <div id="thetop" class="thetop"></div>
  <div class='backtotop'>
    <a href="#thetop" class='scroll'>
      <i class="fas fa-angle-double-up"></i>
    </a>
  </div>
  <!-- backtotop - end -->

  <!-- preloader - start -->
  <div id="preloader"></div>
  <!-- preloader - end -->





  <!-- header-section - start
  ================================================== -->
  <header id="header-section" class="header-section sticky-header-section not-stuck clearfix">
    <!-- header-bottom - start -->
    <div class="header-bottom">
      <div class="container">
        <div class="row">

          <!-- site-logo-wrapper - start -->
          <div class="col-lg-3">
            <div class="site-logo-wrapper">
              <a href="{{route('index')}}" class="logo">
                {{-- <img src="{{asset('assets/images/1.site-logo.png')}}" alt="logo_not_found"> --}}
                <h3 style="color:#ffbe30"><strong>Webify Events</strong></h3>
              </a>
            </div>
          </div>
          <!-- site-logo-wrapper - end -->

          <!-- mainmenu-wrapper - start -->
          <div class="col-lg-9">
            <div class="mainmenu-wrapper">
              <div class="row">

                <!-- menu-item-list - start -->
                <div class="col-lg-10">
                  <div class="menu-item-list ul-li clearfix">
                    <ul>
                      <li class="active">
                        <a href="{{route('index')}}">Home</a>
                      </li>
                      <li>
                        <a href="{{route('services')}}">Services</a>
                      </li>
                      <li>
                        <a href="{{route('event')}}">Event</a>
                      </li>
                      <li >
                        <a href="{{route('about')}}">About Us</a>
                        
                      </li>
                      <li >
                        <a href="{{route('contact')}}">contact</a>
                      
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- menu-item-list - end -->

                <!-- menu-item-list - start -->
                <div class="col-lg-2">
                  <div class="user-search-btn-group ul-li clearfix">
                    <ul>
                      <li>
                        
                        <a href="{{route('serviceprovider.dashboard')}}" >
                          <i class="fas fa-user"></i>
                        </a>
                        <div id="login-modal" class="reglog-modal-wrapper mfp-hide clearfix" style="background-image: url(assets/images/login-modal-bg.jpg);">
                          <div class="overlay-black clearfix">

                            <!-- leftside-content - start -->
                            <div class="leftside-content">
                              <div class="site-logo-wrapper mb-80">
                                <a href="#!" class="logo">
                                  {{-- <img src="{{asset('assets/images/2.site-logo.png')}}" alt="logo_not_found"> --}}
                                  <h5 style="color:#ffbe30"><strong>Webify Events</strong></h5>

                                </a>
                              </div>
                              <div class="register-login-link mb-80">
                                <ul>
                                  <li class="active"><a href="#!">Login</a></li>
                                  <li><a href="#!">Register</a></li>
                                </ul>
                              </div>
                              <div class="copyright-text">
                                <p class="m-0 text-light">©2023 <a href="#!" class="yellow-color">webifyevent.com</a> all right reserved, made with <i class="fas fa-heart"></i> by Zulfiqar Ali Zeb </p>
                              </div>
                            </div>
                            <!-- leftside-content - end -->

                            <!-- rightside-content - start -->
                            <div class="rightside-content text-center">

                              <div class="mb-30">
                                <h2 class="form-title title-large white-color">Account <strong>Login</strong></h2>
                                <span class="form-subtitle white-color">Login to our website, or <strong>REGISTER</strong></span>
                              </div>

                              <div class="or-text mb-30">
                                <span>sign in</span>
                              </div>

                              <div class="login-form text-center mb-50">
                                <form action="{{route('serviceprovider.login')}}" method="POST">
                                  @csrf
                                  <div class="form-item">
                                    <input name="email" type="email" placeholder="example@gmail.com">
                                  </div>
                                  <div class="form-item">
                                    <input name="password" type="password" placeholder="Password">
                                  </div>
                                  <button type="submit" class="login-btn">login now</button>
                                </form>
                              </div>

                              <div class="bottom-text white-color">
                                <p class="m-0">
                                  * Denotes mandatory field.
                                </p>
                                <p class="m-0">** At least one telephone number is required.</p>
                              </div>

                            </div>
                            <!-- rightside-content - end -->

                            <a class="popup-modal-dismiss" href="#!">
                              <i class="fas fa-times"></i>
                            </a>

                          </div>
                        </div>
                      </li>
                      <li>
                        <button type="button" class="toggle-overlay search-btn">
                          <i class="fas fa-search"></i>
                        </button>
                        <!-- search-body - start -->
                        <div class="search-body">
                          <div class="search-form">
                            <form action="#">
                              <input class="search-input" type="search" placeholder="Search Here">
                              <div class="outer-close toggle-overlay">
                                <button type="button" class="search-close">
                                  <i class="fas fa-times"></i>
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                        <!-- search-body - end -->
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- menu-item-list - end -->

              </div>
            </div>
          </div>
          <!-- mainmenu-wrapper - end -->

        </div>
      </div>
    </div>
    <!-- header-bottom - end -->
  </header>
  <!-- header-section - end
  ================================================== -->





  <!-- altranative-header - start
  ================================================== -->
  <div class="header-altranative">
    <div class="container">
      <div class="logo-area float-left">
        <a href="{{route('index')}}">
          <h5 style="color:#ffbe30"><strong>Webify Events</strong></h5>
          {{-- <img src="{{asset('assets/images/1.site-logo.png')}}" alt="logo_not_found"> --}}
        </a>
      </div>

      <button type="button" id="sidebarCollapse" class="alt-menu-btn float-right">
        <i class="fas fa-bars"></i>
      </button>
    </div>

    <!-- sidebar menu - start -->
    <div class="sidebar-menu-wrapper">
      <div id="sidebar" class="sidebar">
        <span id="sidebar-dismiss" class="sidebar-dismiss">
          <i class="fas fa-arrow-left"></i>
        </span>

        <div class="sidebar-header">
          <a href="#!">
            {{-- <img src="{{asset('assets/images/2.site-logo.png')}}" alt="logo_not_found"> --}}
            <h3 style="color:#ffbe30"><strong>Webify Events</strong></h3>
          </a>
        </div>

        <!-- sidebar-form - start -->
        <div class="sidebar-form">
          <form action="#">
            <input id="altmenu-sidebar-search" type="search" placeholder="Search">
            <label for="altmenu-sidebar-search"><i class="fas fa-search"></i></label>
          </form>
        </div>
        <!-- sidebar-form - end -->

        <!-- other-pages-links - start -->
        <div class="menu-link-list other-pages-links">
          <h2 class="menu-title">all pages</h2>
          <ul>
            <li>
              <a href="{{route('index')}}">
                <span class="icon"><i class="fas fa-home"></i></span>
                Home
              </a>
            </li>
            <li>
              <a href="{{route('about')}}">
                <span class="icon"><i class="fas fa-home"></i></span>
                About Us
              </a>
            </li>
            <li>
              <a href="{{route('services')}}">
                <span class="icon"><i class="fas fa-home"></i></span>
                our Services
              </a>
            </li>
            <li>
              <a href="{{route('event')}}">
                <span class="icon"><i class="fas fa-home"></i></span>
                event 
              </a>
            </li>
            
           
            <li>
              <a href="{{route('contact')}}">
                <span class="icon"><i class="fas fa-home"></i></span>
                contact us
              </a>
            </li>
          </ul>
        </div>
        <!-- other-pages-links - end -->


        <!-- login-btn-group - start -->
        <div class="login-btn-group">
          <ul>

            <li>
              <a href="#alt-register-modal" class="register-modal-btn">
                Register
              </a>
              <div id="alt-register-modal" class="reglog-modal-wrapper register-modal mfp-hide clearfix" style="background-image: url(assets/images/login-modal-bg.jpg);">
                <div class="overlay-black clearfix">

                  <!-- leftside-content - start -->
                  <div class="leftside-content">
                    <div class="site-logo-wrapper mb-80">
                      <a href="#!" class="logo">
                        <img src="{{asset('assets/images/2.site-logo.png')}}" alt="logo_not_found">
                      </a>
                    </div>
                    <div class="register-login-link mb-80">
                      <ul>
                        <li><a href="#!">Login</a></li>
                        <li class="active"><a href="#!">Register</a></li>
                      </ul>
                    </div>
                    <div class="copyright-text">
                      <p class="m-0">©2019 <a href="#!" class="yellow-color">Webify Events.com</a> all right reserved, made with <i class="fas fa-heart"></i> by jThemes Studio </p>
                    </div>
                  </div>
                  <!-- leftside-content - end -->

                  <!-- rightside-content - start -->
                  <div class="rightside-content text-center">

                    <div class="mb-30">
                      <h2 class="form-title title-large white-color">Account <strong>Register</strong></h2>
                      <span class="form-subtitle white-color">Have an account? <strong>LOGIN NOW</strong></span>
                    </div>

                    <div class="login-form text-center mb-50">
                      <form action="#!">
                        <div class="form-item">
                          <input type="email" placeholder="User Name">
                        </div>
                        <div class="form-item">
                          <input type="password" placeholder="Password">
                        </div>
                        <div class="form-item">
                          <input type="email" placeholder="Repeat Password">
                        </div>
                        <div class="form-item">
                          <input type="password" placeholder="Email Address">
                        </div>
                        <div class="human-verification text-left">
                          <input type="checkbox" id="alt-imnotarobot">
                          <label for="alt-imnotarobot">I'm not a robot</label>
                          <span class="verification-image">
                            <img src="{{asset('assets/images/iamnotrobot.png')}}" alt="Image_not_found">
                          </span>
                        </div>
                        <button type="submit" class="login-btn">login now</button>
                      </form>
                    </div>

                    <div class="bottom-text white-color">
                      <p class="m-0">
                        * Denotes mandatory field.
                      </p>
                      <p class="m-0">** At least one telephone number is required.</p>
                    </div>

                  </div>
                  <!-- rightside-content - end -->

                  <a class="popup-modal-dismiss" href="#!">
                    <i class="fas fa-times"></i>
                  </a>

                </div>
              </div>
            </li>
            <li>
              <a href="#alt-login-modal" class="login-modal-btn">
                Login
              </a>
              <div id="alt-login-modal" class="reglog-modal-wrapper mfp-hide clearfix" style="background-image: url(assets/images/login-modal-bg.jpg);">
                <div class="overlay-black clearfix">

                  <!-- leftside-content - start -->
                  <div class="leftside-content">
                    <div class="site-logo-wrapper mb-80">
                      <a href="#!" class="logo">
                        {{-- <img src="{{asset('assets/images/2.site-logo.png')}}" alt="logo_not_found"> --}}
                        <h5 style="color:#ffbe30"><strong>Webify Events</strong></h5>
                      </a>
                    </div>
                    <div class="register-login-link mb-80">
                      <ul>
                        <li class="active"><a href="#!">Login</a></li>
                        <li><a href="#!">Register</a></li>
                      </ul>
                    </div>
                    <div class="copyright-text">
                      <p class="m-0 text-light">©2023 <a href="#!" class="yellow-color">Webify webifyevent.com</a> all right reserved, made with <i class="fas fa-heart"></i> by Zulfiqar Ali Zeb </p>
                    </div>
                  </div>
                  <!-- leftside-content - end -->

                  <!-- rightside-content - start -->
                  <div class="rightside-content text-center">

                    <div class="mb-30">
                      <h2 class="form-title title-large white-color">Account <strong>Login</strong></h2>
                      <span class="form-subtitle white-color">Login to our website, or <strong>REGISTER</strong></span>
                    </div>


                    <div class="or-text mb-30">
                      <span> sign in</span>
                    </div>

                    <div class="login-form text-center mb-50">
                      <form action="#!">
                        <div class="form-item">
                          <input type="email" placeholder="example@gmail.com">
                        </div>
                        <div class="form-item">
                          <input type="password" placeholder="Password">
                        </div>
                        <button type="submit" class="login-btn">login now</button>
                      </form>
                    </div>

                    <div class="bottom-text white-color">
                      <p class="m-0">
                        * Denotes mandatory field.
                      </p>
                      <p class="m-0">** At least one telephone number is required.</p>
                    </div>

                  </div>
                  <!-- rightside-content - end -->

                  <a class="popup-modal-dismiss" href="#!">
                    <i class="fas fa-times"></i>
                  </a>

                </div>
              </div>
            </li>
            
          </ul>
        </div>
        <!-- login-btn-group - end -->

        <!-- social-links - start -->
        <div class="social-links">
          <h2 class="menu-title">get in touch</h2>
          <div class="mb-15">
            <h3 class="contact-info">
              <i class="fas fa-phone"></i>
              100-2222-9999
            </h3>
            <h3 class="contact-info">
              <i class="fas fa-envelope"></i>
              info@webifyevent.com
            </h3>
          </div>
          <ul>
            <li>
              <a href="#!"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a href="#!"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a href="#!"><i class="fab fa-twitch"></i></a>
            </li>
            <li>
              <a href="#!"><i class="fab fa-google-plus-g"></i></a>
            </li>
            <li>
              <a href="#!"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
          <a href="contact.html" class="contact-btn">contact us</a>
        </div>
        <!-- social-links - end -->

        <div class="overlay"></div>
      </div>
    </div>
    <!-- sidebar menu - end -->
  </div>
  <!-- altranative-header - end
  ================================================== -->





  <!-- slide-section - start
  ================================================== -->
  {{-- <section id="slide-section" class="slide-section clearfix">
    <div id="main-carousel1" class="main-carousel1 owl-carousel owl-theme">

      <div class="item" style="background-image: url({{asset('assets/images/slider/slider-bg1.jpg')}});">
        <div class="overlay-black">
          <div class="container">
            <div class="slider-item-content">

              <span class="medium-text">one stop</span>
              <h1 class="big-text">Event Planner</h1>
              <small class="small-text">every event sould be perfect</small>

              <div class="link-groups">
                <a href="{{route('about')}}" class="about-btn custom-btn">about us</a>
                <a href="#!" class="start-btn">get started!</a>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="item" style="background-image: url({{asset('assets/images/slider/slider-bg2.jpg')}});">
        <div class="overlay-black">
          <div class="container">
            <div class="slider-item-content">

              <span class="medium-text">one stop</span>
              <h1 class="big-text">Event Planner</h1>
              <small class="small-text">every event sould be perfect</small>

              <div class="link-groups">
                <a href="{{route('about')}}" class="about-btn custom-btn">about us</a>
                <a href="#!" class="start-btn">get started!</a>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="item" style="background-image: url({{asset('assets/images/slider/slider-bg3.jpg')}});">
        <div class="overlay-black">
          <div class="container">
            <div class="slider-item-content">

              <span class="medium-text">one stop</span>
              <h1 class="big-text">Event Planner</h1>
              <small class="small-text">every event sould be perfect</small>

              <div class="link-groups">
                <a href="{{route('about')}}" class="about-btn custom-btn">about us</a>
                <a href="#!" class="start-btn">get started!</a>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
  </section> --}}
  <!-- slide-section - end
  ================================================== -->

  <section id="slider-section" class="slide-section" clearfix>
    <div id="main-carousel1" class="main-carousel1 owl-carousel owl-theme">
      <div class="item" style="background-image: url({{asset('assets/images/slider/slider-bg3.jpg')}});">
        <div class="overlay-black">
          <div class="container">
            <div class="slider-item-content">

              <span class="medium-text">Webify</span>
              <h1 class="big-text">Event Planner</h1>
              <small class="small-text">every event sould be perfect</small>

              <div class="link-groups">
                <a href="{{route('about')}}" class="about-btn custom-btn">about us</a>
                <a href="{{route('services')}}" class="start-btn">get started!</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <!-- upcomming-event-section - start
  ================================================== -->
  <section id="upcomming-event-section" class="upcomming-event-section sec-ptb-100 clearfix">
    <div class="container">

      <!-- section-title - start -->
      <div class="section-title text-center mb-50">
        <small class="sub-title"> events</small>
        <h2 class="big-title"> <strong>Awesome Events</strong></h2>
      </div>
      <!-- section-title - end -->

      <!-- upcomming-event-carousel - start -->
      <div id="upcomming-event-carousel" class="upcomming-event-carousel owl-carousel owl-theme">

        @foreach ($event as $item)
             <!-- item - start -->
        <div class="item">
          <div class="event-item">

            <div class="event-image">
              <img src="{{asset('uploads/images/'.$item->image)}}" alt="Image_not_found">
              {{-- <div class="post-date">
                <span class="date">26</span>
                <small class="month">june</small>
              </div> --}}
            </div>

            <div class="event-content">
              <div class="event-title mb-30">
                <h3 class="title">
                  {{$item->name}}
                </h3>
                {{-- <span class="ticket-price yellow-color">Tickets from $52</span> --}}
              </div>
              <div class="event-post-meta ul-li-block mb-30">
                  {{$item->description}}
              </div>
              <a href="{{route('services.list',['id'=>$item->id])}}" class="custom-btn">
                View Services
              </a>
            </div>

          </div>
        </div>
        <!-- item - end -->
        @endforeach
       

      </div>
      <!-- upcomming-event-carousel - end -->

    </div>
  </section>
  <!-- upcomming-event-section - end
  ================================================== -->





  <!-- about-section - start
  ================================================== -->
  <section id="about-section" class="about-section sec-ptb-100 clearfix">
    <div class="container">
      <div class="row">

        <!-- section-title - start -->
        <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="section-title text-left mb-30">
            <span class="line-style"></span>
            <small class="sub-title">we are Webify Events</small>
            <h2 class="big-title"><strong>No.1</strong> Events Management</h2>
            <p class="black-color mb-50">
              Lorem ipsum dollor site amet the best  consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. 
            </p>
            <a href="{{route('about')}}" class="custom-btn">
              about Webify Events
            </a>
          </div>
        </div>
        <!-- section-title - end -->

        <!-- about-item-wrapper - start -->
        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="about-item-wrapper ul-li">
            <ul>

              <li>
                <a href="#!" class="about-item">
                  <span class="icon">
                    <i class="flaticon-handshake"></i>
                  </span>
                  <strong class="title">
                    Friendly Team
                  </strong>
                  <small class="sub-title">
                    More than 200 teams
                  </small>
                </a>
              </li>
              <li>
                <a href="#!" class="about-item">
                  <span class="icon">
                    <i class="flaticon-two-balloons"></i>
                  </span>
                  <strong class="title">
                    perfact venues
                  </strong>
                  <small class="sub-title">
                    perfact venues
                  </small>
                </a>
              </li>
              <li>
                <a href="#!" class="about-item">
                  <span class="icon">
                    <i class="flaticon-cheers"></i>
                  </span>
                  <strong class="title">
                    Unique Scenario
                  </strong>
                  <small class="sub-title">
                    We thinking out of the box
                  </small>
                </a>
              </li>

              <li>
                <a href="#!" class="about-item">
                  <span class="icon">
                    <i class="flaticon-clown-hat"></i>
                  </span>
                  <strong class="title">
                    Unforgettable Time
                  </strong>
                  <small class="sub-title">
                    We make you perfect event
                  </small>
                </a>
              </li>
              <li>
                <a href="#!" class="about-item">
                  <span class="icon">
                    <i class="flaticon-speech-bubble"></i>
                  </span>
                  <strong class="title">
                    24/7 Hours Support
                  </strong>
                  <small class="sub-title">
                    Anytime anywhere
                  </small>
                </a>
              </li>
              <li>
                <a href="#!" class="about-item">
                  <span class="icon">
                    <i class="flaticon-light-bulb"></i>
                  </span>
                  <strong class="title">
                    Briliant Idea
                  </strong>
                  <small class="sub-title">
                    We have million idea
                  </small>
                </a>
              </li>

            </ul>
          </div>
        </div>
        <!-- about-item-wrapper - end -->
        
      </div>
    </div>
  </section>
  <!-- about-section - end
  ================================================== -->




  <!-- special-offer-section - start
  ================================================== -->
  <section id="special-offer-section" class="special-offer-section clearfix" style="background-image: url(assets/images/special-offer-bg.png);">
    <div class="container">
      <div class="row">

        <!-- special-offer-content - start -->
        <div class="col-lg-9 col-md-12 col-sm-12">
          <div class="special-offer-content">
            <h2><strong>30%</strong> Off in June~July for <span>Birthday Events</span></h2>
            <p class="m-0">
              Contact us now and we will make your event unique & unforgettable
            </p>
          </div>
        </div>
        <!-- special-offer-content - end -->

        <!-- event-makeing-btn - start -->
        <div class="col-lg-3 col-md-12 col-sm-12">
          <div class="event-makeing-btn">
            <a href="#!">make an event now</a>
          </div>
        </div>
        <!-- event-makeing-btn - end -->

      </div>
    </div>
  </section>
  <!-- special-offer-section - end
  ================================================== -->





  <!-- event-section - start
  ================================================== -->
  <section id="event-section" class="event-section sec-ptb-100 bg-gray-light clearfix">
    <div class="container">

      <div class="mb-50">
        <div class="row">

          <!-- section-title - start -->
          <div class="col-lg-3 col-md-12 col-sm-12">
            <div class="section-title text-left">
              <span class="line-style"></span>
              <small class="sub-title">Webify events</small>
              <h2 class="big-title"><strong>services</strong> </h2>
            </div>
          </div>
          <!-- section-title - end -->

          <!-- event-tab-menu - start -->
          <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="event-tab-menu clearfix">
              <ul class="nav">
                <li>
                  <a data-toggle="tab" href="#conference-event">
                    <strong><i class="fas fa-microphone"></i> conference</strong> event
                  </a>
                </li>
                <li>
                  <a data-toggle="tab" href="#playground-event">
                    <strong><i class="fas fa-birthday-cake"></i> play ground</strong> event
                  </a>
                </li>
                <li>
                  <a class="active" data-toggle="tab" href="#musical-event">
                    <strong><i class="fas fa-music"></i> musical</strong> event
                  </a>
                </li>
                <li>
                  <a data-toggle="tab" href="#other-event">
                    <strong><i class="far fa-check-square"></i> other</strong> event
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- event-tab-menu - end -->

        </div>
      </div>

      <!-- tab-content - start -->
      <div class="tab-content">

        <!-- conference-event - start -->
        <div id="conference-event" class="tab-pane fade">
          <div class="row">

           @foreach ($services as $item)
            @if($item->event->name == 'Wedding Event')
               <!-- event-item - start -->
               <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="event-item clearfix">
  
                  <!-- event-image - start -->
                  <div class="event-image">
                    {{-- <div class="post-date">
                      <span class="date">26</span>
                      <small class="month">june</small>
                    </div> --}}
                    <img src="{{asset('uploads/services/images/'.$item->image)}}" alt="Image_not_found">
                  </div>
                  <!-- event-image - end -->
  
                  <!-- event-content - start -->
                  <div class="event-content">
                    <div class="event-title mb-15">
                      <h3 class="title">
                        {{$item->name}}
                      </h3>
                      {{-- <span class="ticket-price yellow-color">Tickets from $52</span> --}}
                    </div>
                    <div class="event-post-meta ul-li-block mb-30">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, dicta.
                    </div>
                    <a href="{{route('services.view', ['id'=>$item->id])}}" class="tickets-details-btn">
                      View & details
                    </a>
                  </div>
                  <!-- event-content - end -->
  
                </div>
              </div>
              <!-- event-item - end -->
            @endif
           @endforeach


            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="pagination ul-li clearfix">
                <ul>
                  <li class="page-item prev-item">
                    <a class="page-link" href="#">Prev</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">01</a></li>
                  <li class="page-item active"><a class="page-link" href="#">02</a></li>
                  <li class="page-item"><a class="page-link" href="#">03</a></li>
                  <li class="page-item"><a class="page-link" href="#">04</a></li>
                  <li class="page-item"><a class="page-link" href="#">05</a></li>
                  <li class="page-item next-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
        <!-- conference-event - end -->

        <!-- playground-event - start -->
        <div id="playground-event" class="tab-pane fade">
          <div class="row">

            @foreach ($services as $item)
            @if($item->event->name == 'playground-event')
               <!-- event-item - start -->
               <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="event-item clearfix">
  
                  <!-- event-image - start -->
                  <div class="event-image">
                    {{-- <div class="post-date">
                      <span class="date">26</span>
                      <small class="month">june</small>
                    </div> --}}
                    <img src="{{asset('uploads/services/images/'.$item->image)}}" alt="Image_not_found">
                  </div>
                  <!-- event-image - end -->
  
                  <!-- event-content - start -->
                  <div class="event-content">
                    <div class="event-title mb-15">
                      <h3 class="title">
                        {{$item->name}}
                      </h3>
                      {{-- <span class="ticket-price yellow-color">Tickets from $52</span> --}}
                    </div>
                    <div class="event-post-meta ul-li-block mb-30">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, dicta.
                    </div>
                    <a href="{{route('services.view', ['id'=>$item->id])}}" class="tickets-details-btn">
                      View & details
                    </a>
                  </div>
                  <!-- event-content - end -->
  
                </div>
              </div>
              <!-- event-item - end -->
            @endif
            @endforeach

            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="pagination ul-li clearfix">
                <ul>
                  <li class="page-item prev-item">
                    <a class="page-link" href="#">Prev</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">01</a></li>
                  <li class="page-item active"><a class="page-link" href="#">02</a></li>
                  <li class="page-item"><a class="page-link" href="#">03</a></li>
                  <li class="page-item"><a class="page-link" href="#">04</a></li>
                  <li class="page-item"><a class="page-link" href="#">05</a></li>
                  <li class="page-item next-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
        <!-- playground-event - end -->

        <!-- musical-event - start -->
        <div id="musical-event" class="tab-pane fade in active show">
          <div class="row">

            @foreach ($services as $item)
            @if($item->event->name == 'musical-event')
               <!-- event-item - start -->
               <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="event-item clearfix">
  
                  <!-- event-image - start -->
                  <div class="event-image">
                    {{-- <div class="post-date">
                      <span class="date">26</span>
                      <small class="month">june</small>
                    </div> --}}
                    <img src="{{asset('uploads/services/images/'.$item->image)}}" alt="Image_not_found">
                  </div>
                  <!-- event-image - end -->
  
                  <!-- event-content - start -->
                  <div class="event-content">
                    <div class="event-title mb-15">
                      <h3 class="title">
                        {{$item->name}}
                      </h3>
                      {{-- <span class="ticket-price yellow-color">Tickets from $52</span> --}}
                    </div>
                    <div class="event-post-meta ul-li-block mb-30">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, dicta.
                    </div>
                    <a href="{{route('services.view', ['id'=>$item->id])}}" class="tickets-details-btn">
                      View & details
                    </a>
                  </div>
                  <!-- event-content - end -->
  
                </div>
              </div>
              <!-- event-item - end -->
            @endif
           @endforeach


            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="pagination ul-li clearfix">
                <ul>
                  <li class="page-item prev-item">
                    <a class="page-link" href="#">Prev</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">01</a></li>
                  <li class="page-item active"><a class="page-link" href="#">02</a></li>
                  <li class="page-item"><a class="page-link" href="#">03</a></li>
                  <li class="page-item"><a class="page-link" href="#">04</a></li>
                  <li class="page-item"><a class="page-link" href="#">05</a></li>
                  <li class="page-item next-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
        <!-- musical-event - end -->

        <!-- other-event - start -->
        <div id="other-event" class="tab-pane fade">
          <div class="row">

            @foreach ($services as $item)
            @if($item->event->name !== 'musical-event' && $item->event->name !== 'playground-event' && $item->event->name !== 'conference-event')
               <!-- event-item - start -->
               <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="event-item clearfix">
  
                  <!-- event-image - start -->
                  <div class="event-image">
                    {{-- <div class="post-date">
                      <span class="date">26</span>
                      <small class="month">june</small>
                    </div> --}}
                    <img src="{{asset('uploads/services/images/'.$item->image)}}" alt="Image_not_found">
                  </div>
                  <!-- event-image - end -->
  
                  <!-- event-content - start -->
                  <div class="event-content">
                    <div class="event-title mb-15">
                      <h3 class="title">
                        {{$item->name}}
                      </h3>
                      {{-- <span class="ticket-price yellow-color">Tickets from $52</span> --}}
                    </div>
                    <div class="event-post-meta ul-li-block mb-30">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, dicta.
                    </div>
                    <a href="{{route('services.view', ['id'=>$item->id])}}" class="tickets-details-btn">
                      View & details
                    </a>
                  </div>
                  <!-- event-content - end -->
  
                </div>
              </div>
              <!-- event-item - end -->
            @endif
           @endforeach

            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="pagination ul-li clearfix">
                <ul>
                  <li class="page-item prev-item">
                    <a class="page-link" href="#">Prev</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">01</a></li>
                  <li class="page-item active"><a class="page-link" href="#">02</a></li>
                  <li class="page-item"><a class="page-link" href="#">03</a></li>
                  <li class="page-item"><a class="page-link" href="#">04</a></li>
                  <li class="page-item"><a class="page-link" href="#">05</a></li>
                  <li class="page-item next-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
        <!-- other-event - end -->

      </div>
      <!-- tab-content - end -->

    </div>
  </section>
  <!-- event-section - end
  ================================================== -->





  <!-- event-gallery-section - start
  ================================================== -->
  <section id="event-gallery-section" class="event-gallery-section sec-ptb-100 clearfix">

    <!-- section-title - start -->
    <div class="section-title text-center mb-50">
      <small class="sub-title">Webify Events gallery</small>
      <h2 class="big-title">Beautiful & <strong>Unforgettable Times</strong></h2>
    </div>
    <!-- section-title - end -->

    <div class="button-group filters-button-group mb-30">
      <button class="button is-checked" data-filter="*">
        <i class="fas fa-star"></i>
        <strong>all</strong> gallery
      </button>
      <button class="button" data-filter=".video-gallery">
        <i class="fas fa-play-circle"></i>
        <strong>video</strong> gallery
      </button>
      <button class="button" data-filter=".photo-gallery">
        <i class="far fa-image"></i>
        <strong>photo</strong> gallery
      </button>
    </div>

    <div class="grid zoom-gallery clearfix mb-80" data-isotope="{ &quot;masonry&quot;: { &quot;columnWidth&quot;: 0 } }">
      <div class="grid-item grid-item--height2 photo-gallery " data-category="photo-gallery">
        <a class="popup-link" href="assets/images/gallery/1.image.jpg">
          <img src="assets/images/gallery/1.image.jpg" alt="Image_not_found">
        </a>
        <div class="item-content">
          <h3>John Doe Wedding day</h3>
          <span>Wedding Party, 24 June 2016</span>
        </div>
      </div>
      <div class="grid-item grid-item--width2 video-gallery " data-category="video-gallery">
        <a class="popup-youtube" href="https://youtu.be/-haiaZ011OM">
          <img src="assets/images/gallery/2.image.jpg" alt="Image_not_found">
        </a>
        <div class="item-content">
          <h3>Business Conference in Dubai</h3>
          <span>Food Festival, 24 June 2016</span>
        </div>
      </div>
      <div class="grid-item photo-gallery " data-category="photo-gallery">
        <a class="popup-link" href="assets/images/gallery/3.image.jpg">
          <img src="assets/images/gallery/3.image.jpg" alt="Image_not_found">
        </a>
        <div class="item-content">
          <h3>Envato Author Fun Hiking</h3>
          <span>Food Festival, 24 June 2016</span>
        </div>
      </div>

      <div class="grid-item photo-gallery " data-category="photo-gallery">
        <a class="popup-link" href="assets/images/gallery/4.image.jpg">
          <img src="assets/images/gallery/4.image.jpg" alt="Image_not_found">
        </a>
        <div class="item-content">
          <h3>John Doe Wedding day</h3>
          <span>Wedding Party, 24 June 2016</span>
        </div>
      </div>
      <div class="grid-item grid-item--width2 video-gallery " data-category="video-gallery">
        <a class="popup-youtube" href="https://youtu.be/-haiaZ011OM">
          <img src="assets/images/gallery/5.image.jpg" alt="Image_not_found">
        </a>
        <div class="item-content">
          <h3>New Year Celebration</h3>
          <span>Food Festival, 24 June 2016</span>
        </div>
      </div>

      <div class="grid-item grid-item--width2 photo-gallery " data-category="photo-gallery">
        <a class="popup-link" href="assets/images/gallery/6.image.jpg">
          <img src="assets/images/gallery/6.image.jpg" alt="Image_not_found">
        </a>
        <div class="item-content">
          <h3>John Doe Wedding day</h3>
          <span>Wedding Party, 24 June 2016</span>
        </div>
      </div>
      <div class="grid-item video-gallery " data-category="video-gallery">
        <a class="popup-youtube" href="https://youtu.be/-haiaZ011OM">
          <img src="assets/images/gallery/7.image.jpg" alt="Image_not_found">
        </a>
        <div class="item-content">
          <h3>New Year Celebration</h3>
          <span>Food Festival, 24 June 2016</span>
        </div>
      </div>
      <div class="grid-item photo-gallery " data-category="photo-gallery">
        <a class="popup-link" href="assets/images/gallery/8.image.jpg">
          <img src="assets/images/gallery/8.image.jpg" alt="Image_not_found">
        </a>
        <div class="item-content">
          <h3>Envato Author Fun Hiking</h3>
          <span>Food Festival, 24 June 2016</span>
        </div>
      </div>
    </div>

    <div class="text-center">
      <a href="#!" class="custom-btn">view all gallery</a>
    </div>


  </section>
  <!-- event-gallery-section - end
  ================================================== -->


  <!-- speaker-section - start
  ================================================== -->
  <section id="speaker-section" class="speaker-section clearfix">
    <div class="jarallax" style="background-image: url(assets/images/speaker/Black-White-Dubai-Wallpaper.jpg);">
      <div class="overlay-white">
        <div class="container">

          <!-- speaker-carousel - start -->
          <div class="speaker-carousel">
            <div class="slider-for">

              <div class="item">
                <div class="row">

                  <!-- speaker-image - start -->
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="speaker-image image-wrapper text-center">
                      <img src="{{asset('assets/images/speaker/speakes1.png')}}" alt="Image_not_found">
                      <span class="speaker-name"><strong>Jenni</strong> Berthas</span>
                    </div>
                  </div>
                  <!-- speaker-image - end -->

                  <!-- speaker-content - start -->
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="speaker-content">

                      <!-- section-title - start -->
                      <div class="section-title text-left mb-50">
                        <span class="line-style"></span>
                        <small class="sub-title">Webify Events staffs</small>
                        <h2 class="big-title">Professional <strong>Speakers</strong></h2>
                      </div>
                      <!-- section-title - end -->

                      <div class="speaker-info">
                        <div class="speaker-title mb-30">
                          <span class="speaker-name"><strong>Jenni</strong> Berthas</span>
                          <span class="work-experienc yellow-color"><strong>15 Years</strong> experienced</span>
                        </div>
                        <p class="black-color mb-30">
                          Lorem ipsum dollor site amet the best  consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam...
                        </p>
                        <div class="speaker-social-network ul-li">
                          <h3 class="title title-medium mb-15">
                            <strong>Social</strong> Network
                          </h3>
                          <ul>
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitch"></i></a></li>
                            <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                          </ul>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- speaker-content - end -->

                </div>
              </div>

              <div class="item">
                <div class="row">

                  <!-- speaker-image - start -->
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="speaker-image image-wrapper text-center">
                      <img src="assets/images/speaker/speakes1.png" alt="Image_not_found">
                      <span class="speaker-name"><strong>Jonathan</strong> Doe</span>
                    </div>
                  </div>
                  <!-- speaker-image - end -->

                  <!-- speaker-content - start -->
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="speaker-content">

                      <!-- section-title - start -->
                      <div class="section-title text-left mb-50">
                        <span class="line-style"></span>
                        <small class="sub-title">Webify Events staffs</small>
                        <h2 class="big-title">Professional <strong>Speakers</strong></h2>
                      </div>
                      <!-- section-title - end -->

                      <div class="speaker-info">
                        <div class="speaker-title mb-30">
                          <span class="speaker-name"><strong>Jonathan</strong> Doe</span>
                          <span class="work-experienc yellow-color"><strong>15 Years</strong> experienced</span>
                        </div>
                        <p class="black-color mb-30">
                          Lorem ipsum dollor site amet the best  consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam...
                        </p>
                        <div class="speaker-social-network ul-li">
                          <h3 class="title title-medium mb-15">
                            <strong>Social</strong> Network
                          </h3>
                          <ul>
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitch"></i></a></li>
                            <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                          </ul>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- speaker-content - end -->

                </div>
              </div>

              <div class="item">
                <div class="row">

                  <!-- speaker-image - start -->
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="speaker-image image-wrapper text-center">
                      <img src="assets/images/speaker/speakes1.png" alt="Image_not_found">
                      <span class="speaker-name"><strong>Denies</strong> Suarez</span>
                    </div>
                  </div>
                  <!-- speaker-image - end -->

                  <!-- speaker-content - start -->
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="speaker-content">

                      <!-- section-title - start -->
                      <div class="section-title text-left mb-50">
                        <span class="line-style"></span>
                        <small class="sub-title">Webify Events staffs</small>
                        <h2 class="big-title">Professional <strong>Speakers</strong></h2>
                      </div>
                      <!-- section-title - end -->

                      <div class="speaker-info">
                        <div class="speaker-title mb-30">
                          <span class="speaker-name"><strong>Denies</strong> Suarez</span>
                          <span class="work-experienc yellow-color"><strong>15 Years</strong> experienced</span>
                        </div>
                        <p class="black-color mb-30">
                          Lorem ipsum dollor site amet the best  consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam...
                        </p>
                        <div class="speaker-social-network ul-li">
                          <h3 class="title title-medium mb-15">
                            <strong>Social</strong> Network
                          </h3>
                          <ul>
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitch"></i></a></li>
                            <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                          </ul>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- speaker-content - end -->

                </div>
              </div>

              <div class="item">
                <div class="row">

                  <!-- speaker-image - start -->
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="speaker-image image-wrapper text-center">
                      <img src="assets/images/speaker/speakes1.png" alt="Image_not_found">
                      <span class="speaker-name"><strong>Jonathan</strong> Doe</span>
                    </div>
                  </div>
                  <!-- speaker-image - end -->

                  <!-- speaker-content - start -->
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="speaker-content">

                      <!-- section-title - start -->
                      <div class="section-title text-left mb-50">
                        <span class="line-style"></span>
                        <small class="sub-title">Webify Events staffs</small>
                        <h2 class="big-title">Professional <strong>Speakers</strong></h2>
                      </div>
                      <!-- section-title - end -->

                      <div class="speaker-info">
                        <div class="speaker-title mb-30">
                          <span class="speaker-name"><strong>Jonathan</strong> Doe</span>
                          <span class="work-experienc yellow-color"><strong>15 Years</strong> experienced</span>
                        </div>
                        <p class="black-color mb-30">
                          Lorem ipsum dollor site amet the best  consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam...
                        </p>
                        <div class="speaker-social-network ul-li">
                          <h3 class="title title-medium mb-15">
                            <strong>Social</strong> Network
                          </h3>
                          <ul>
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitch"></i></a></li>
                            <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                          </ul>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- speaker-content - end -->

                </div>
              </div>

            </div>

            <div class="slider-nav">
              <div class="item">
                <div class="item-content">
                  <span class="speaker-thumbnail">
                    <img src="assets/images/speaker/speakes-thumbnail.png" alt="Image_not_found">
                  </span>
                  <h3 class="speaker-name">Jenni Berthas</h3>
                  <span class="sub-title">Webify Events Speaker</span>
                </div>
              </div>

              <div class="item">
                <div class="item-content">
                  <span class="speaker-thumbnail">
                    <img src="assets/images/speaker/speakes-thumbnail.png" alt="Image_not_found">
                  </span>
                  <h3 class="speaker-name">Jonathan Doe</h3>
                  <span class="sub-title">Webify Events Speaker</span>
                </div>
              </div>

              <div class="item">
                <div class="item-content">
                  <span class="speaker-thumbnail">
                    <img src="assets/images/speaker/speakes-thumbnail.png" alt="Image_not_found">
                  </span>
                  <h3 class="speaker-name">Denies Suarez</h3>
                  <span class="sub-title">Webify Events Speaker</span>
                </div>
              </div>

              <div class="item">
                <div class="item-content">
                  <span class="speaker-thumbnail">
                    <img src="assets/images/speaker/speakes-thumbnail.png" alt="Image_not_found">
                  </span>
                  <h3 class="speaker-name">Jonathan Doe</h3>
                  <span class="sub-title">Webify Events Speaker</span>
                </div>
              </div>

            </div>
          </div>
          <!-- speaker-carousel - end -->

        </div>
      </div>
    </div>
  </section>
  <!-- speaker-section - end
  ================================================== -->





  <!-- advertisement-section - start
  ================================================== -->
  <section id="advertisement-section" class="advertisement-section clearfix" style="background-image: url(assets/images/special-offer-bg.png);">
    <div class="container">
      <div class="advertisement-content text-center">

        <h2 class="title-large white-color">Are you ready to make <strong>your Own Special Events?</strong></h2>
        <p class="mb-31">“Get started now, Webify Events event management PSD template.”</p>
        <a href="#!" class="purchase-btn">purchase now!</a>
        
      </div>
    </div>
  </section>
  <!-- advertisement-section - end
  ================================================== -->





  <!-- partners-clients-section - start
  ================================================== -->
  <section id="partners-clients-section" class="partners-clients-section bg-gray-light sec-ptb-100 clearfix">
    <div class="container">

      <!-- section-title - start -->
      <div class="section-title text-center mb-50">
        <small class="sub-title">we are Webify Events</small>
        <h2 class="big-title">We have <strong>Best Partners & Clients</strong></h2>
        <p class="m-0 black-color">
          Lorem ipsum dollor site amet the best  consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. 
        </p>
      </div>
      <!-- section-title - end -->

      <div class="row">

        <!-- partners-wrapper - start -->
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="partners-wrapper">
            <span class="carousel-title">
              Webify Events <strong>sponsors</strong>
            </span>
            <div id="partners-carousel" class="partners-carousel owl-carousel owl-theme">

              <div class="item">
                <ul>

                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>
                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>
                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>
                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>
                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>
                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>

                </ul>
              </div>

              <div class="item">
                <ul>

                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>
                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>
                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>
                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>
                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>
                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>

                </ul>
              </div>

              <div class="item">
                <ul>

                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>
                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>
                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>
                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>
                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>
                  <li>
                    <a href="#!">
                      <img src="assets/images/partners/image1.png" alt="Image_not_found">
                    </a>
                  </li>

                </ul>
              </div>

            </div>
          </div>
        </div>
        <!-- partners-wrapper - end -->

        <!-- clients-testimonial - start -->
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="clients-testimonial" style="background-image: url(assets/images/1.testimonial-bg.jpg);">
            <div class="overlay-black">

              <div class="section-title text-center mb-50">
                <small class="sub-title">testimonial</small>
                <h2 class="big-title">client <strong>says</strong></h2>
              </div>

              <div id="clients-testimonial-carousel" class="clients-testimonial-carousel owl-carousel owl-theme">
                <div class="item text-center">
                  <p class="mb-30">
                    “Bring people together, or turn your passion into a business. Webify Events gives you everything you need to host your best event yet. lorem ipsum diamet adispiscing dispend.”
                  </p>
                  <div class="client-info">
                    <h3 class="client-name">Jenni Hernandes</h3>
                    <span class="client-sub-title">Graphic Designer</span>
                  </div>
                </div>

                <div class="item text-center">
                  <p class="mb-30">
                    “Bring people together, or turn your passion into a business. Webify Events gives you everything you need to host your best event yet. lorem ipsum diamet adispiscing dispend.”
                  </p>
                  <div class="client-info">
                    <h3 class="client-name">Jenni Hernandes</h3>
                    <span class="client-sub-title">Graphic Designer</span>
                  </div>
                </div>

                <div class="item text-center">
                  <p class="mb-30">
                    “Bring people together, or turn your passion into a business. Webify Events gives you everything you need to host your best event yet. lorem ipsum diamet adispiscing dispend.”
                  </p>
                  <div class="client-info">
                    <h3 class="client-name">Jenni Hernandes</h3>
                    <span class="client-sub-title">Graphic Designer</span>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- clients-testimonial - end -->
        
      </div>

    </div>
  </section>
  <!-- partners-clients-section - end
  ================================================== -->


  <!-- google map - start
  ================================================== -->
  <section id="map-section" class="map-section clearfix">
    <div class="address-wrapper">

      <!-- address-info-topbar - start -->
      <div class="address-info-topbar mb-30 clearfix">
        <div class="address-info-left">
          <h3 class="title-text">Webify Events event management</h3>
          <p class="m-0">
           Xyz,
           university Road Peshawar
          </p>
        </div>

        <div class="address-info-right">
          <ul>
            <li>
              <button type="button">
                <span class="icon"><i class="fas fa-street-view"></i></span>
                <small>Direction</small>
              </button>
            </li>
            <li>
              <button type="button">
                <span class="icon"><i class="fas fa-rss"></i></span>
                <small>Save</small>
              </button>
            </li>
          </ul>
        </div>
      </div>
      <!-- address-info-topbar - end -->

      <!-- address-info-bottombar - start -->
      <div class="address-info-bottombar clearfix">
        <div class="address-info-left">
          <div class="rating-star">
            <span class="rating-point">4.5</span>
            <ul>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star-half"></i></li>
            </ul>
          </div>
          <p class="m-0">105 reviews</p>
        </div>

        <div class="address-info-right">
          <button type="button" class="map-larger-btn">
            view larger map
          </button>
        </div>
      </div>
      <!-- address-info-bottombar - end -->
        
    </div>
    <div id="google-map">
      <div id="googleMaps" class="google-map-container"></div>
    </div>
  </section>
  <!-- google map - end
  ================================================== -->





@include('partials.footer')


@endsection