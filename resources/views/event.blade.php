@extends('layout.app')
@push('css')
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
@push('script')
		
@endpush