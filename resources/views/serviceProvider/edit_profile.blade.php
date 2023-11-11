@extends('layout.service_provider')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Profile</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('serviceprovider.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Profile</li>
        </ol>
      
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{route('serviceprovider.update',[$user->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group my-2">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" value="{{$user->name}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
                    </div>
                    <div class="form-group my-2">
                        <label for="exampleInputEmail1">Phone No</label>
                        <input type="tel" value="{{$user->phone_no}}" name="phone_no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone No">
                    </div>
                    <hr>
                  <fieldset>
                    <legend>Sochal Media</legend>
                    <div class="form-group my-2">
                        <label for="exampleInputEmail1">whatsapp</label>
                        <input type="text" value="{{$user->whatsapp}}" name="whatsapp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="whatsapp">
                    </div>
                    <div class="form-group my-2">
                        <label for="exampleInputEmail1">facebook</label>
                        <input type="text" value="{{$user->facebook}}" name="facebook" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="facebook">
                    </div>
                    <div class="form-group my-2">
                        <label for="exampleInputEmail1">instagram</label>
                        <input type="text" value="{{$user->instagram}}" name="instagram" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="instagram">
                    </div>
                    <div class="form-group my-2">
                        <label for="exampleInputEmail1">twitter</label>
                        <input type="text" value="{{$user->twitter}}" name="twitter" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="twitter">
                    </div>
                    <div class="form-group my-2">
                        <label for="exampleInputEmail1">linkdin</label>
                        <input type="text" value="{{$user->linkdin}}" name="linkdin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="linkdin">
                    </div>
                    <div class="form-group my-2">
                        <label for="exampleInputEmail1">tiktok</label>
                        <input type="text" value="{{$user->tiktok}}" name="tiktok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tiktok">
                    </div>
                  </fieldset>
                    <hr>
                    <div class="form-group my-2">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" value="{{$user->image}}" name="image" class="form-control-file" id="exampleFormControlFile1">
                      
                    </div>
                   

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
      
    </div>
    

@endsection
