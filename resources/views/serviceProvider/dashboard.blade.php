@extends('layout.service_provider')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <h3 class="h3">{{$todaybookingsCount}}</h3>
                    <h5 class="h5">Today Booking </h5>
                    
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{route('serviceprovider.booking.today')}}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <h3 class="h3">{{$bookingsCount}}</h3>
                    <h5 class="h5">ALL Booking </h5>
                    
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <h3 class="h3">{{$serviceCount}}</h3>
                    <h5 class="h5">ALL Services </h5>
                    
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Today Booking
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>Service</th>
                        <th>Price</th>
                        <th>Description</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>Service</th>
                        <th>Price</th>
                        <th>Description</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($todaybookings as $booking)
                    <tr>
                      <td>{{$booking->name}}</td>
                      <td>{{$booking->email}}</td>
                      <td>{{$booking->phone}}</td>
                      <td>{{$booking->service->name}}</td>
                      <td>{{$booking->price->price}}</td>
                      <td>{{$booking->description}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection