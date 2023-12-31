@extends('layout.app')
@section('title')
    Gallery
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
                                <span class="sub-title">event gallery</span>
                                <h2 class="big-title">Webify <strong>gallery</strong></h2>
                            </div>
                            <!-- breadcrumb-title - end -->

                            <!-- breadcrumb-list - start -->
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-item"><a href="{{route('index')}}" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Webify gallery</li>
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





    <!-- event-gallery-section - start
    ================================================== -->
    <section id="event-gallery-section" class="event-gallery-section sec-ptb-100 clearfix">
        <div class="container">

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
    </section>
    <!-- event-gallery-section - end
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