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
        <div class="jarallax" style="background-image: url({{asset('assets/images/pic.jpg')}});">
            <div class="overlay-black">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12 col-sm-12">

                            <!-- breadcrumb-title - start -->
                            <div class="breadcrumb-title text-center mb-50">
                                <span class="sub-title">Webify events</span>
                                <h2 class="big-title">Webify <strong>Services</strong></h2>
                            </div>
                            <!-- breadcrumb-title - end -->

                            <!-- breadcrumb-list - start -->
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-item"><a href="{{route('index')}}" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Services</li>
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
                        <h2 class="big-title">Services <strong>Search</strong></h2>
                    </div>
                </div>
                <!-- section-title - end -->

                <!-- search-form - start -->
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="search-form form-wrapper">
                        <form action="{{route('service.search')}}" method="GET">

                            <ul>
                                <li>
                                    <span class="title">Services keyword</span>
                                    <div class="form-item">
                                        <input value="{{ request('keyword') }}" name="keyword" type="search" placeholder="Event name,location,etc">
                                    </div>
                                </li>
                             
                                <li>
                                    <span class="title">Services category</span>
                                    <select name="event_name" id="event-category-select">
                                        <option value="{{ request('event_name') }}" selected >{{ request('event_name') }}</option>
                                       @foreach ($event as $item)
                                           <option value="{{$item->name}}">{{$item->name}}</option>
                                       @endforeach
                                    </select>
                                </li>
                                <li>
                                    <span class="title mt-2">Min Price</span>
                                    <div class="form-item">
                                        <input value="{{ request('mix_price') }}" placeholder="Min Price" type="search" name="mix_price" id="">
                                    </div>
                                </li>
                                <li>
                                    <span class="title mt-2">Max Price</span>
                                    <div class="form-item">
                                        <input value="{{ request('max_price') }}" placeholder="Max Price" type="search" name="max_price" id="">
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

                <!-- - start -->
                <div class="col-lg-12 col-md-12 col-sm-12">

                   

                    <div class="tab-content">
                        <div id="list-style" class="tab-pane fade">

                            @foreach ($service as $item)
                                 <!-- event-item - start -->
                            <div class="event-list-item clearfix">

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
                           

                            <div class="pagination ul-li clearfix">
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
                            </div>

                        </div>

                        <div id="grid-style" class="tab-pane fade in active show">
                            <div class="row justify-content-center">

                                @forelse ($service as $item)
                                    <!-- event-grid-item - start -->
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="event-grid-item">
                                        <!-- event-image - start -->
                                        <div class="event-image">
                                            {{-- <div class="post-date">
                                                <span class="date">26</span>
                                                <small class="month">june</small>
                                            </div> --}}
                                            <img src="{{asset('uploads/images/category/'.$item->image)}}" alt="Image_not_found">
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
                                            <a href="{{route('services.view',['id'=>$item->id])}}" class="tickets-details-btn">
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