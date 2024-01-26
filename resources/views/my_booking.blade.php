@extends('layout.app')
@push('css')
<style>
.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
  }
  
  .example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: linear-gradient(to bottom right, #ff3e00, #ffbe30);;
    color: white;
    font-size: 17px;
    border: 1px solid linear-gradient(to bottom right, #ff3e00, #ffbe30);grey;
    border-left: none;
    cursor: pointer;
  }
  
  .example button:hover {
    background: linear-gradient(to bottom right, #ff3e00, #ffbe30);;
  }
  
  .example::after {
    content: "";
    clear: both;
    display: table;
  }
  </style>
@endpush
@section('title')
    MyBooking
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
                                <h2 class="big-title">Webify <strong>My Booking</strong></h2>
                            </div>
                            <!-- breadcrumb-title - end -->

                            <!-- breadcrumb-list - start -->
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-item"><a href="{{route('index')}}" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mybooking</li>
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
                   <div class="row ">
                        <div class="col-md-8 col-lg-8 offset-md-2 offset-lg-2">
                            <div class="example" action="">
                                <input type="text" id="email" placeholder="Enter Your Email Address" name="search">
                                <button type="button" id="search_btn"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                   </div>

                   <div class="row my-3">
                    <div class="col-12">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">Client Name</th>
                                <th scope="col">Service Name</th>
                                <th scope="col">Price Plain</th>
                                <th scope="col">Date</th>
                              </tr>
                            </thead>
                            <tbody id="bookingtable">
                              
                            </tbody>
                          </table>
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
<!-- Update your existing script section -->
@push('script')
<script>
    $(document).ready(function(){
        $("#search_btn").click(function(){
            var email = $("#email").val();

            if(!email){
                alert("Entery Yor Email");
            }else{
                $.ajax({
                    url: "{{ route('mybookingpost') }}",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        email: email,
                        // Add other data if needed
                    },
                    success(data){
                        console.log(data);
                        var tableBody = $('#bookingtable');
                        tableBody.empty(); // Clear existing rows

                        // Append new rows
                        $.each(data, function (index, data) {
                            var row = '<tr scope="row">' +
                                '<td>' + data.name + '</td>' +
                                '<td>' + data.service.name + '</td>' +
                                '<td>' + data.price.name + '(' + data.price.price + ') </td>' +
                                '<td>' + data.date + '</td>' +
                                '</tr>';
                            tableBody.append(row);
                        });
                    },
                    error(data){
                        console.log(data);
                    }
                });
            }
        })
    })
</script>
@endpush
