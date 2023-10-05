@extends('layout.service_provider')
@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Service</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('serviceprovider.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">View Service</li>
        </ol>
        <div class="card mb-4">
            <img class="card-img-top" src="{{asset('uploads/services/images/'.$data->image)}}" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">{{$data->name}}</h3>
              <h6 class="card-title">{{$data->location}}</h6>
              <div class="card-text">
                {{$data->short_description}}
              </div>
              <pre>
                {!! $data->content !!}
              </pre>
            </div>
            
        </div>

        <div class="container-fluid">
            <div class="row">
                @foreach ($data->price as $price)
                <div class="col-md-4">
                    <div class="card">
                        <h5 class="card-header">{{$price->name}}</h5>
                        <div class="card-body">
                            @foreach(json_decode($price->features) as $feature)
                            <ul>
                                <li>{{$feature}}</li>
                            </ul>
                            @endforeach
                        </div>
                        <div class="card-footer">
                            <h3 class="card-title">{{$price->price}}</h3>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    
    </div>

@endsection