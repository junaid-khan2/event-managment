@extends('layout.app')
@section('title')
    Contact
@endsection
@section('content')
<body class="default-header-p">




		
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

  @include('partials.header')

  <!-- breadcrumb-section - start
  ================================================== -->
  <section id="breadcrumb-section" class="breadcrumb-section clearfix">
    <div class="jarallax" style="background-image: url(assets/images/pic.jpg);">
      <div class="overlay-black">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-12">

              <!-- breadcrumb-title - start -->
              <div class="breadcrumb-title text-center mb-50">
                <span class="sub-title">contact us now</span>
                <h2 class="big-title">keep <strong>in touch</strong></h2>
              </div>
              <!-- breadcrumb-title - end -->

              <!-- breadcrumb-list - start -->
              <div class="breadcrumb-list">
                <ul>
                  <li class="breadcrumb-item"><a href="{{route('index')}}" class="breadcrumb-link">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">contact us</li>
                </ul>
              </div>
              <!-- breadcrumb-list - end -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb-section - end
  ================================================== -->





  <!-- contact-section - start
  ================================================== -->
  <section id="contact-section" class="contact-section sec-ptb-100 clearfix">
    <div class="container">

      <!-- section-title - start -->
      <div class="section-title mb-50">
        <small class="sub-title">contact us</small>
        <h2 class="big-title">Keep in touch <strong>with Webify</strong></h2>
      </div>
      <!-- section-title - end -->

      <!-- contact-form - start -->
      <div class="contact-form form-wrapper text-center">
        <form action="{{route('contact')}}" method="post">
          @csrf
          <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-item">
                <input type="text" name="name" placeholder="Your Name" required>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-item">
                <input type="email" name="email" placeholder="Email Address" required>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-item">
                <input type="text" name="country" placeholder="Your Country" required>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-item">
                <input name="phone" type="tel" placeholder="Phone Number" required>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
              <textarea name="massage" placeholder="Your Message" required></textarea>
              <button type="submit" class="custom-btn">send </button>
            </div>
            
          </div>
        </form>
      </div>
      <!-- contact-form - end -->

    </div>
  </section>
  <!-- contact-section - end
  ================================================== -->





  <!-- google map - start
  ================================================== -->
  {{-- <section id="map-section" class="map-section clearfix">
    <div class="address-wrapper">

      <!-- address-info-topbar - start -->
      <div class="address-info-topbar mb-30 clearfix">
        <div class="address-info-left">
          <h3 class="title-text">harmoni event management</h3>
          <p class="m-0">
            Apple Store, 112 Prince St New York,
            NY 10012, United States 80361,
            United States
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
  </section> --}}
  <!-- google map - end
  ================================================== -->




    @include('partials.footer')


@endsection