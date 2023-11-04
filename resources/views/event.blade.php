@extends('layout.app')
@push('css')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css">
<style>
    /* Change the color of the pointer (thumb) */
.irs-slider {
  background: #FF5733 !important; /* Set your desired color here */
}

/* Change the color of the slider's borders, if needed */
.irs-slider.single {
  border-color: #FF5733 !important; /* Set your desired color here */
}
/* Change the color of the pointer (thumb) */
.irs-single {
  background: #FF5733 !important; /* Set your desired color here */
}

.irs-to , .irs-from, .irs-min , .irs-max, .irs-bar, .irs-handle  {
    background: #FF5733 !important; 
}


</style>
@endpush
@section('title')
    Services
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
        <div class="jarallax" style="background-image: url({{asset('assets/images/breadcrumb/0.breadcrumb-bg.jpg')}});">
            <div class="overlay-black">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12 col-sm-12">

                            <!-- breadcrumb-title - start -->
                            <div class="breadcrumb-title text-center mb-50">
                                <span class="sub-title">Webify events</span>
                                <h2 class="big-title">Webify <strong>Event</strong></h2>
                            </div>
                            <!-- breadcrumb-title - end -->

                            <!-- breadcrumb-list - start -->
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-item"><a href="{{route('index')}}" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Event</li>
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




 <!-- event-search-section - start
    ================================================== -->
    {{-- <section id="event-search-section" class="event-search-section clearfix" style="background-image: url({{asset('assets/images/special-offer-bg.png')}});">
        <div class="container">
            <div class="row">

                <!-- section-title - start -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="section-title">
                        <small class="sub-title">Find best event on Webify</small>
                        <h2 class="big-title">Event <strong>Search</strong></h2>
                    </div>
                </div>
                <!-- section-title - end -->

                <!-- search-form - start -->
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="search-form form-wrapper">
                        <form action="{{route('event.search')}}" method="GET">

                            <ul>
                                <li>
                                    <span class="title">Event keyword</span>
                                    <div class="form-item">
                                        <input value="{{ request('keyword') }}" name="keyword" type="search" placeholder="Event name ">
                                    </div>
                                </li>
                               
                                <li>
                                    <button type="submit" class="submit-btn">search event now</button>
                                </li>
                            </ul>
                            
                        </form>
                    </div>
                </div>
                <!-- search-form - end -->
                
            </div>
        </div>
    </section> --}}
    <!-- event-search-section - end
    ================================================== -->


    <!--
        form search
        ===================================
    -->

    
  <section class="sec-ptb-100 clearfix">
    <div class="container ">
        <div class="card">
            <div class="card-body">
            
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
                    
                  </div>
          
                  <div class="row" id="add_service">
                    
                  </div>
                  
                  <div class="text-center">
                    <button class="btn custom-btn " type="submit">Submit</button>
                  </div>
                </form>
              </div>
        </div>
    </div>
  </section> 
    <!--
        ===============================
        end form search
    -->






    <!-- event-section - start
    ================================================== -->
    <section id="event-section" class="event-section bg-gray-light sec-ptb-100 clearfix">
        <div class="container">
            <div class="row">

                <!-- sidebar-section - start -->
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="sidebar-section">

                        <!-- Add to Calendar - start -->
                        <div title="Add to Calendar" class="addeventatc">
                            Add to Calendar
                            <span class="start">06/18/2015 09:00 AM</span>
                            <span class="end">06/18/2015 11:00 AM</span>
                            <span class="timezone">Europe/Paris</span>
                            <span class="title">Summary of the event</span>
                            <span class="description">Description of the event</span>
                            <span class="location">Location of the event</span>
                            <span class="organizer">Organizer</span>
                            <span class="organizer_email">Organizer e-mail</span>
                            <span class="all_day_event">false</span>
                            <span class="date_format">MM/DD/YYYY</span>
                        </div>
                        <!-- Add to Calendar - end -->

                        <!-- map-wrapper - start -->
                        <div class="map-wrapper mb-30">

                            <h2 class="title-small default-color mb-30">Google Map Search</h2>

                            <div id="google-map">
                                <div id="googleMaps" class="google-map-container"></div>
                            </div>

                        </div>
                        <!-- map-wrapper - end -->

                        {{-- <!-- spacial-event-wrapper - start -->
                        <div class="spacial-event-wrapper text-center" style="background-image: url(assets/images/spacial-event-bg.jpg);">
                            <div class="overlay-black">
                                <p class="sub-title white-color mb-30">26 DECEMBER 2018</p>
                                <h2 class="title-large white-color mb-30">
                                    AMSTERDAM
                                    <strong class="yellow-color">PHP CONFERENCE</strong>
                                </h2>
                                <a href="#!" class="custom-btn">booking ticket</a>
                            </div>
                        </div>
                        <!-- spacial-event-wrapper - end --> --}}
                        
                    </div>
                </div>
                <!-- sidebar-section - end -->

                <!-- - start -->
                <div class="col-lg-9 col-md-12 col-sm-12">

                    <div class="tab-content">
                        <div id="list-style" class="tab-pane fade">

                            @foreach ($event as $item)
                                 <!-- event-item - start -->
                            <div class="event-list-item clearfix">

                                <!-- event-image - start -->
                                <div class="event-image">
                                    {{-- <div class="post-date">
                                        <span class="date">26</span>
                                        <small class="month">june</small>
                                    </div> --}}
                                    <img src="{{asset('uploads/images/'.$item->image)}}" alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->

                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                           <strong>{{$item->name}}</strong>
                                        </h3>
                                    </div>
                                    <p class="discription-text mb-30">
                                       {{$item->short_description}}
                                    </p>
                                 
                                </div>
                                <!-- event-content - end -->

                            </div>
                            <!-- event-item - end -->
                            @endforeach
                           

                           

                        </div>

                        <div id="grid-style" class="tab-pane fade in active show">
                            <div class="row justify-content-center">

                                @forelse ($event as $item)
                                    <!-- event-grid-item - start -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="event-grid-item">
                                        <!-- event-image - start -->
                                        <div class="event-image">
                                            {{-- <div class="post-date">
                                                <span class="date">26</span>
                                                <small class="month">june</small>
                                            </div> --}}
                                            <img src="{{asset('uploads/images/'.$item->image)}}" alt="Image_not_found">
                                        </div>
                                        <!-- event-image - end -->

                                        <!-- event-content - start -->
                                        <div class="event-content">
                                            <div class="event-title mb-30">
                                                <h3 class="title">
                                                    {{$item->name}}
                                                </h3>
                                                
                                            </div>
                                            <div class="event-post-meta ul-li-block mb-30">
                                                {{$item->short_description}}
                                            </div>
                                            <a href="{{route('services.list',['id'=>$item->id])}}" class="tickets-details-btn">
                                                tickets & details
                                            </a>
                                        </div>
                                        <!-- event-content - end -->
                                    </div>
                                </div>
                                
                                <!-- event-grid-item - end -->
                                @empty
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="text-center text-danger">
                                        <h6 class="h6">Service Not Found !</h6>
                                    </div>
                                </div>
                                @endforelse
                                


                                <!-- pagination - start -->
                                {{-- <div class="pagination ul-li clearfix">
                                    <ul>
                                        <li class="page-item prev-item">
                                            <a class="page-link" href="#!">Prev</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#!">01</a></li>
                                        <li class="page-item active"><a class="page-link" href="#!">02</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">03</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">04</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">05</a></li>
                                        <li class="page-item next-item">
                                            <a class="page-link" href="#!">Next</a>
                                        </li>
                                    </ul>
                                </div> --}}
                                <!-- pagination - end -->

                            </div>
                        </div>
                    </div>

                </div>
                <!-- - end -->
                
            </div>
        </div>
    </section>
    <!-- event-section - end
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
        skin: "sharp",
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