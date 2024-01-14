
@extends('layout.app')
@section('title')
    Service Details
@endsection
@push('css')
    <style>
        .event-details-section .event-pricing-plan .pricing-list ul .pricing-table {
            width: 25% !important;
        }
    </style>
@endpush
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
        <div class="jarallax" style="background-image: url({{asset('assets/images/pic.jpg')}});">
            <div class="overlay-black">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12 col-sm-12">

                            <!-- breadcrumb-title - start -->
                            <div class="breadcrumb-title text-center mb-50">
                                <span class="sub-title">Service single</span>
                                <h2 class="big-title">Webify <strong>Service details</strong></h2>
                            </div>
                            <!-- breadcrumb-title - end -->

                            <!-- breadcrumb-list - start -->
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-item"><a href="index-1.html" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active"><a href="#" class="breadcrumb-link">Service Details</a></li>
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





    <!-- event-details-section - start
    ================================================== -->
    <section id="event-details-section" class="event-details-section sec-ptb-100 clearfix">
        <div class="container">
            <div class="row">

                <!-- col - event-details - start -->
                <div class="col-lg-8 col-md-12 col-sm-12">

                    <!-- event-details - start -->
                    <div class="event-details mb-80">

                        <div class="event-title mb-30">
                            <span class="tag-item">
                                <i class="fas fa-bookmark"></i>
                                Featured Service
                            </span>
                            <h2 class="event-title"><strong>{{$service->name}}</strong></h2>
                        </div>

                        <div id="event-details-carousel" class="event-details-carousel owl-carousel owl-theme">
                            <div class="item">
                                <img src="{{asset('uploads/services/images/'.$service->image)}}" alt="Image_not_found">
                            </div>
                           
                        </div>

                        <div class="event-info-list ul-li clearfix mb-50">
                            {{$service->short_description}}
                        </div>

                        <p class="black-color mb-30">
                            {!! $service->content !!} 
                        </p>

                       

                    </div>
                    <!-- event-details - end -->


               



                </div>
                <!-- col - event-details - end -->

                <!-- sidebar-section - start -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="sidebar-section">

                        <!-- section-title - start -->
                        <div class="section-title mb-30">
                            <h2 class="big-title">Provider <strong>info</strong></h2>
                        </div>
                        <!-- section-title - end -->

                        <!-- location-wrapper - start -->
                        <div class="location-wrapper bg-white">
                            <div>
                                <div class="text-center my-2">
                                    <img class="rounded-circle" height="100" width="100" src="{{asset('uploads/profile/'.$service->user->image)}}" alt="img">
                                </div>
                                <div class="text-center my-2">
                                    <h3>{{$service->user->name}}</h3>
                                </div>
                            </div>
                            <div class="title-wrapper">
                               
                                <small class="up-arrow-icon">
                                    <i class="fas fa-chevron-circle-up"></i>
                                </small>
                                <span class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                <div class="title-content">
                                    <small>Service location</small>
                                    <h3>{{$service->location}}</h3>
                                </div>
                            </div>
                            <div class="contact-links ul-li-block clearfix">
                                <ul>
                                    <li>
                                       <a href="https://wa.me/{{$service->user->whatsapp}}" target="_blank" >
                                            <span class="icon">
                                                <i class="fab fa-whatsapp"></i>
                                            </span>
                                            Whatsapp
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$service->user->facebook}}" target="_blank">
                                            <span class="icon">
                                                <i class="fab fa-facebook-f"></i>
                                            </span>
                                            Facebook
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$service->user->twitter}}" target="_blank">
                                            <span class="icon">
                                                <i class="fab fa-twitter"></i>
                                            </span>
                                            twitter
                                        </a>
                                    </li>
                                </ul>
                                <a href="tel:{{$service->user->phone_no}}" class="custom-btn">CONTACT US NOW</a>
                            </div>
                        </div>
                        <!-- location-wrapper - end -->
                        
                    </div>
                </div>
                <!-- sidebar-section - end -->
                
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                         <!-- event-pricing-plan - start -->
                         <div class="event-pricing-plan mb-80 clearfix">

                            <div class="section-title text-left mb-50">
                                <span class="line-style"></span>
                                <h2 class="big-title">Event <strong>Pricing Plans</strong></h2>
                            </div>
    
                            <div class="pricing-list ul-li clearfix">
                                <ul>
                                    @foreach ($service->price as $item)
                                    <li class="pricing-table mx-1">
                                        <div class="pricing-header clearfix">
                                            <span class="amount">{{$item->price}} PKR</span>
                                            <h3 class="pricing-table-title">{{$item->name}}</h3>
                                        </div>
    
                                        <div class="pricing-body clearfix">
                                            <ul>
                                                @foreach (json_decode($item->features)  as $item2)
                                                <li class="item-on">{{$item2}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
    
                                        <div class="pricing-footer clearfix">
                                            <a href="{{route('booking.make',['service'=>$service->id,'price'=>$item->id])}}" class="custom-btn">get this</a>
                                        </div>
                                    </li>
                                    @endforeach
                                    
    
                                    {{-- <li class="pricing-table popular-pricing-table">
                                        <span class="popularity-sign">best choice</span>
                                        <div class="pricing-header clearfix">
                                            <span class="amount">{{$service->price[1]->price}} PKR</span>
                                            <h3 class="pricing-table-title">{{$service->price[1]->name}}</h3>
                                        </div>
    
                                        <div class="pricing-body clearfix">
                                            <ul>
    
                                                @foreach (json_decode($service->price[1]->features)  as $item)
                                                <li class="item-on">{{$item}}</li>
                                                @endforeach
    
                                            </ul>
                                        </div>
    
                                        <div class="pricing-footer clearfix">
                                            <a href="{{route('booking.make',['service'=>$service->id,'price'=>$service->price[1]->id])}}" class="custom-btn">get this</a>
                                        </div>
                                    </li> --}}
    
                                   
                                    
                                </ul>
                            </div>
    
                        </div>
                        <!-- event-pricing-plan - end -->
                </div>
            </div>
        </div>
    </section>
    <!-- event-details-section - end
    ================================================== -->




        @include('partials.footer')
@endsection