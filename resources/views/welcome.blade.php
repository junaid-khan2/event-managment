@extends('layout.app')

@section('title')
Home
@endsection

@push('css')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css">

@endpush

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
        <div class="jarallax" style="background-image: url({{asset('assets/images/hero.jpg')}});">
            <div class="overlay-black">
                <div class="container">
                    <div class="row justify-content-center py-5">
                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <!-- breadcrumb-title - start -->
                            <div class="breadcrumb-title text-center mb-50 mt-5">
                                <span class="sub-title">Webify</span>
                                <h2 class="big-title">Event Planner <br> <strong>every event sould be perfect</strong></h2>
                            </div>
                            <!-- breadcrumb-title - end -->

                            <!-- breadcrumb-list - start -->
                            
                              <div class="slider-item-content">

                  
                                <div class="link-groups text-center">
                                  <a href="{{route('about')}}" class="about-btn custom-btn">about us</a>
                                  <a href="{{route('event')}}" class="start-btn custom-btn bg-light">get started!</a>
                                </div>
                  
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

{{-- 
  <section class="sec-ptb-100 clearfix">
    <div class="container border border-danger">
      <form method="POST" action="{{route('plain.search')}}">
        @csrf
        <div class="form-group">
          <label for="" >Select Event</label>
          <select onchange="changeEvent(this)" class="form-control">
            <option selected disabled>Select Event</option>
            @foreach($event as $item)
            <option value="{{$item->id}}"> {{$item->name}} </option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="autocomplete-input">Search Services</label>
          <input type="search" class="form-control d-inline-block" id="autocomplete-input"  placeholder="Search Evnet">
          <button class="btn btn-outline-success d-inline-block" type="submit">Search</button>
        </div>

        <div class="row" id="add_service">
          
        </div>
        
        <div class="text-center">
          <button class="btn btn-primary " type="submit">Submit</button>
        </div>
      </form>
    </div>
  </section> --}}





  <!-- about-section - start
  ================================================== -->
  {{-- <section id="about-section" class="about-section sec-ptb-100 clearfix">
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
  </section> --}}
  <!-- about-section - end
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
                @foreach($event as $item)
                <li>
                  <a data-toggle="tab" href="#{{$item->id}}">
                    <strong><i></i>{{$item->name}}</strong>
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
          <!-- event-tab-menu - end -->

        </div>
      </div>

      <!-- tab-content - start -->
      <div class="tab-content">

        @foreach ($event as $item1)
        <div id="{{$item1->id}}" class="tab-pane fade">
          <div class="row">

           @foreach ($services as $item)
           @if($item->events->contains('id', $item1->id))
               <!-- event-item - start -->
               <div class="col-lg-4 col-md-12 col-sm-12">
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
                      {{$item->short_description}}
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

          </div>
        </div>
        @endforeach


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
        
      </div>
      <div class="grid-item grid-item--width2 video-gallery " data-category="video-gallery">
        <a class="popup-youtube" href="https://youtu.be/-haiaZ011OM">
          <img src="assets/images/gallery/2.image.jpg" alt="Image_not_found">
        </a>
        
      </div>
      <div class="grid-item photo-gallery " data-category="photo-gallery">
        <a class="popup-link" href="assets/images/gallery/3.image.jpg">
          <img src="assets/images/gallery/3.image.jpg" alt="Image_not_found">
        </a>
        
      </div>

      <div class="grid-item photo-gallery " data-category="photo-gallery">
        <a class="popup-link" href="assets/images/gallery/4.image.jpg">
          <img src="assets/images/gallery/4.image.jpg" alt="Image_not_found">
        </a>
        
      </div>
      <div class="grid-item grid-item--width2 video-gallery " data-category="video-gallery">
        <a class="popup-youtube" href="https://youtu.be/-haiaZ011OM">
          <img src="assets/images/gallery/5.image.jpg" alt="Image_not_found">
        </a>
       
      </div>

      <div class="grid-item grid-item--width2 photo-gallery " data-category="photo-gallery">
        <a class="popup-link" href="assets/images/gallery/6.image.jpg">
          <img src="assets/images/gallery/6.image.jpg" alt="Image_not_found">
        </a>
        
      </div>
      <div class="grid-item video-gallery " data-category="video-gallery">
        <a class="popup-youtube" href="https://youtu.be/-haiaZ011OM">
          <img src="assets/images/gallery/7.image.jpg" alt="Image_not_found">
        </a>
       
      </div>
      <div class="grid-item photo-gallery " data-category="photo-gallery">
        <a class="popup-link" href="assets/images/gallery/8.image.jpg">
          <img src="assets/images/gallery/8.image.jpg" alt="Image_not_found">
        </a>
        
      </div>
    </div>

    <div class="text-center">
      <a href="#!" class="custom-btn">view all gallery</a>
    </div>


  </section>
  <!-- event-gallery-section - end
  ================================================== -->


  <!-- advertisement-section - start
  ================================================== -->
  {{-- <section id="advertisement-section" class="advertisement-section clearfix" style="background-image: url(assets/images/special-offer-bg.png);">
    <div class="container">
      <div class="advertisement-content text-center">

        <h2 class="title-large white-color">Are you ready to make <strong>your Own Special Events?</strong></h2>
        <p class="mb-31">“Get started now, Webify Events event management PSD template.”</p>
        <a href="#!" class="purchase-btn">purchase now!</a>
        
      </div>
    </div>
  </section> --}}
  <!-- advertisement-section - end
  ================================================== -->





  <!-- partners-clients-section - start
  ================================================== -->
  {{-- <section id="partners-clients-section" class="partners-clients-section bg-gray-light sec-ptb-100 clearfix">
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
  </section> --}}
  <!-- partners-clients-section - end
  ================================================== -->


  <!-- google map - start
  ================================================== -->
  {{-- <section id="map-section" class="map-section clearfix">
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
  </section> --}}
  <!-- google map - end
  ================================================== -->





@include('partials.footer')


@endsection

@push("script")
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>

<script>
  item = [];

  function changeEvent(e){
    var id = e.value;

    $.ajax({
      
            url: "{{url('/event/list')}}",
            method: 'POST',
            data: {
               
              "_token": "{{ csrf_token() }}",
              "id": id
            },
            dataType: 'JSON',
          
            success:function(response)
            {
              while(item.length > 0) {
                  item.pop();
              }

              response.forEach(val => {
                console.log(val);
                var item_data = {
                  label: val.name,
                  value: val.id
                }
                item.push(item_data);
                console.log(item);
              });
              
            },
            error: function(response) {
              debugger
              console.log("Error  = "  +response);
            }
        });

       
  }
$("#autocomplete-input").autocomplete({
  source: item,

});
$("#autocomplete-input").on("autocompleteselect", function(event, ui) {
  var selectedValue = ui.item.value;
  var nameofservice = ui.item.label;
  var idofservice = ui.item.value;
  // Do something with the selected value
  $("#add_service").append('  <div class="col-md-12 "><div class="card m-2"><div class="card-body">'+nameofservice+'</div><div class="card-footer"> <div class="form-group"> <label for="priceRange">Price Range</label><input type="text" class="price-range" data-id="'+idofservice+'" /> <input type="hidden" id="'+idofservice+'" name="servicename[]" value="'+idofservice+'"> <input type="hidden" name="serviceminprice[]" id="'+idofservice+'-min" value="0"><input name="servicemaxprice[]" type="hidden" id="'+idofservice+'-max" value="500">  </div> </div>      </div>    </div>');
  console.log(ui.item);
  addRange();
});

function addRange(){
  $(".price-range").each(function () {
      var customId = $(this).data("id");
      var minPrice = 0;
      var maxPrice = 50000;
      var initialMinPrice = $("#"+customId+"-min").val();
      var initialMaxPrice = $("#"+customId+"-max").val();

      var $priceRange = $(this).ionRangeSlider({
        type: "double",
        grid: true,
        min: minPrice,
        max: maxPrice,
        from: initialMinPrice,
        to: initialMaxPrice,
        step: 1000,
        prefix: "Rs",
        onFinish: function (data) {
          $("#"+customId+"-min").val(data.from);
          $("#"+customId+"-max").val(data.to);
        
        },
      });
    });
}
addRange();



</script>


@endpush