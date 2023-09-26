@extends('layout.admin')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Event Managment</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Create Event</li>
        </ol>
      
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{route('admin.event.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group my-2">
                        <label for="exampleInputEmail1">Event Name</label>
                        <input type="text" value="{{old('name')}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Event Name">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                    </div>
                    <div class="form-group my-2">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" value="{{old('description')}}" name="description" class="form-control" >
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" value="{{old('image')}}" name="image" class="form-control-file" id="exampleFormControlFile1">
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
    </div>
@endsection