@extends('layout.service_provider')
@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Booking</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Booking</li>
        </ol>
      
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Booking Table
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
                        @foreach($data as $service)
                        <tr>
                          <td>Name</td>
                          <td>email</td>
                          <td>phone</td>
                          <td>service</td>
                          <td>price</td>
                          <td>description</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection