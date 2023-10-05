@extends('layout.service_provider')
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Location</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($data as $service)
                        <tr>
                            <th>{{$service->name}}</th>
                            <th><img height="100" width="100" src="{{asset('uploads/services/images/'.$service->image)}}" alt="logo"></th>
                            <th>{{$service->short_description}}</th>
                            <td>
                                <a href="{{route('serviceprovider.service.show',[$service->id])}}" class="btn btn-success btn-sm">View</a>
                                <a href="{{route('serviceprovider.service.edit',[$service->id])}}" class="btn btn-info btn-sm">Edit</a>
                                <form method="post" action="{{route('serviceprovider.service.destroy',[$service->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection