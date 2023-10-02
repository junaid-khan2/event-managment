@extends('layout.service_provider')
@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Services</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Services</li>
        </ol>
        <div class="container">
                <img src="{{asset('uploads/services/images/'.$data->image)}}" class="img-fluid" alt="img">
                <h3 class="h3 text-center mt-5">{{$data->name}}</h3>
        </div>
        <div class="container">
            <pre>
                {!! $data->content !!}
            </pre>
        </div>

        <div class="container">
            <div class="row">
            <div class="col-md-4">
                <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Basic Plan</h5>
                            <h6 class="card-subtitle mb-2 text-muted">For Individuals</h6>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <h3 class="card-title">$19/month</h3>
                            <a href="#" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection