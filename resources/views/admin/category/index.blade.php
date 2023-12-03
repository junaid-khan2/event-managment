@extends('layout.admin')
@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Category List</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Category</li>
        </ol>
      
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Event Table
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
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($data as $event)
                        <tr>
                            <th>{{$event->name}}</th>
                            <th><img height="100" width="100" src="{{asset('uploads/images/category/'.$event->image)}}" alt="logo"></th>
                            <th>{{$event->description}}</th>
                            <td>
                                <a href="{{route('admin.category.edit',[$event->id])}}" class="btn btn-info btn-sm">Edit</a>
                                <form method="post" style="display: inline" action="{{route('admin.category.destroy',[$event->id])}}">
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