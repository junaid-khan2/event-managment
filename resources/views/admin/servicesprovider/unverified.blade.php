@extends('layout.admin')
@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Provider</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Provider</li>
        </ol>
      
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Providers UnVerfied
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone NO</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone NO</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($providers as $provider)
                        <tr>
                            
                            <th><img height="100" width="100" src="{{asset('uploads/profile/'.$provider->image)}}" alt="logo"></th>
                            <th>{{$provider->name}}</th>
                            <th>{{$provider->email}}</th>
                            <th>{{$provider->phone_no}}</th>
                            <td>
                                <a href="{{route('admin.provider.edit',[$provider->id])}}" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection