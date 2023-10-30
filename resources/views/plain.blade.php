@extends('layout.app')
@section('title')
    Booking
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
                                <span class="sub-title">Service booking</span>
                                <h2 class="big-title">Webify <strong>Plain</strong></h2>
                            </div>
                            <!-- breadcrumb-title - end -->

                            <!-- breadcrumb-list - start -->
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-item"><a href="{{url('/')}}" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Plain</li>
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





    <!-- booking-section - start
    ================================================== -->
    <section id="booking-section" class="booking-section bg-gray-light sec-ptb-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <!-- booking-content-wrapper - start -->
                <div class="align-self-center col-lg-8 col-md-12 col-sm-12">
                    <div class="booking-content-wrapper">


                        <!-- billing-info - start -->
                        <div class="billing-info mb-50">

                            <!-- section-title - start -->
                            <div class="section-title mb-30">
                                <h2 class="big-title">Service Plain <strong>information</strong></h2>
                            </div>
                            <!-- section-title - end -->

                            <!-- billing-form - start -->
                            <div class="billing-form form-wrapper">
                                @isset($services)
                                            
                                       
                                <table class="table">
                                    <thead>
                                        <th>Service Name</th>
                                        <th>Service Location</th>
                                        <th>Service Price</th>
                                        <th>Service Features</th>
                                    </thead>
                                    <tbody>
                                        @php
                                        $total = 0;
                                        $values = [];
                                        @endphp
                                        
                                        @foreach($services as $item)
                                        @if(!empty($item->price[0]))
                                        @php
                                       
                                        $total =  $total + $item->price[0]['price'];
                                        $values[] = $item->price[0]['id'];
                                     
                                        @endphp
                                        <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->location}}</td>
                                        <td>{{$item->price[0]['price']}}</td>
                                        <td>
                                            @foreach(json_decode($item->price[0]['features']) as $feature)
                                            {{$feature}} ,
                                            @endforeach
                                        </td>
                                        @else
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->location}}</td>
                                        <td colspan="2">Not Found in Your Price</td>


                                        @endif
                                    </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <th colspan="3">Total Price</th>
                                        <td > <strong>{{$total}}</strong> </td>
                                    </tfoot>
                                </table>
                                <p>Confrom Booking if You are Agre with this</p>
                                <form action="{{route('conform.service.plain')}}" method="post">
                                <div class="text-center">
                                    @csrf
                                    <input type="hidden" name="price_ids" id="price_ids" value="{{ json_encode($values) }}">
                                    <div class="form-item">
                                        <input name="name" required type="text" placeholder="Full Name">
                                    </div>
                                    <div class="form-item">
                                        <input name="email" required type="email" placeholder="Email Address">
                                    </div>
                                    <div class="form-item">
                                        <input name="phone" required type="tel" placeholder="Phone Number">
                                    </div>
                                    <div class="form-item">
                                        <input type="date" name="date" id="">
                                    </div>
                               
                                    <div class="form-item">
                                     
                                        <input type="text" placeholder="Description" name="description" >
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="custom-btn">
                                            Book now
                                        </button>
                                    </div>

                                   
                                </div>
                                </form>
                                @endisset
                                
                            </div>
                            <!-- billing-form - end -->

                        </div>
                        <!-- billing-info - end -->
                        
                    </div>
                </div>
                <!-- booking-content-wrapper - end -->

                
            </div>
        </div>
    </section>
    <!-- booking-section - end
    ================================================== -->

        @include('partials.footer')

@endsection