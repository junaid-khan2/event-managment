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
        <div class="jarallax" style="background-image: url({{asset('assets/images/pic.jpg')}});">
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
        <h1 class="text-center h1 " style="color: #FF5733; font-weight: bold">Make Event Plain</h1>
        <div class="card">
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Message !</strong> {{$errors->first()}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
            
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


                <!-- - start -->
                <div class="col-lg-12 col-md-12 col-sm-12">

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
                                <div class="col-lg-4 col-md-4 col-sm-12">
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
                                                Details
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
                row = '';
                $("#add_service").html('');
              
                response.forEach(val => {
                    row += '<div class="col-md-4 mb-4"> <div class="card"> <div class="card-header"> <div class="row"> <div class="col"> <h5 class="card-title">'+val.name+' </h5> </div> <div class="col"> <input type="checkbox" name="servicename[]" value="'+val.id+'" id=""> <label for="">Select Service</label> </div> </div> </div> <div class="card-body"> <div class="form-group"> <label for="priceRange">Price Range:</label> <input type="text" class="price-range" data-id="'+val.id+'" /><input type="hidden" name="serviceminprice[]" id="'+val.id+'-min" value="0"><input name="servicemaxprice[]" type="hidden" id="'+val.id+'-max" value="500">  </div> </div> </div> </div>';
                });
                $("#add_service").html(row);
                addRange();

              
            },
            error: function(response) {
              debugger
              console.log("Error  = "  +response);
            }
        });

       
  }


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