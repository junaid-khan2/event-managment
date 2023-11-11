@extends('layout.admin')
@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Services</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Services</li>
        </ol>
      
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Service Table
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>
                      
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>
                        
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($data as $event)
                        <tr>
                            <th>{{$event->name}}</th>
                            <th><img height="100" width="100" src="{{asset('uploads/services/images/'.$event->image)}}" alt="logo"></th>
                            <th>{{$event->short_description}}</th>
                         
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection