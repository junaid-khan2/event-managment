@extends('layout.service_provider')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Service</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('serviceprovider.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('serviceprovider.service.index')}}">Services</a></li>
            <li class="breadcrumb-item active">Edit Service</li>
        </ol>
      
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{route('serviceprovider.service.update', [$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="oldimage" value="{{$data->image}}">
                    <div class="form-group my-2">
                        <label for="exampleInputEmail1">Service Name</label>
                        <input type="text" value="{{$data->name}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Event Name">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                    </div>
                    <div class="row my-2">
                        <label for="exampleInputEmail1">Select Event</label>
                      
                        

                        @foreach ($event as $event)
                        @if($data->events->contains('id', $event->id))
                        <div class="col-md-3 col-lg-3 col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" checked name="event[]" type="checkbox" value="{{$event->id}}" id="flexCheckChecked" >
                                <label class="form-check-label" >
                                  {{$event->name}}
                                </label>
                              </div>
                        </div>
                        @else
                        <div class="col-md-3 col-lg-3 col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" name="event[]" type="checkbox" value="{{$event->id}}" id="flexCheckChecked" >
                                <label class="form-check-label" >
                                  {{$event->name}}
                                </label>
                              </div>
                        </div>
                        @endif
                       
                        @endforeach
                        @error('event')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                    </div>
                    <div class="form-group my-2">
                        <label for="exampleInputEmail1">Select Category</label>
                      
                        <select class="form-select" name="category" aria-label="Default select example">
                            <option disabled selected>Select Category for which you provide servise</option>
                            @foreach($category as $category)
                                @if($data->category_id == $category->id)
                                    <option selected value="{{$category->id}}">{{$category->name}}</option>
                                @else
                                    <option  value="{{$category->id}}">{{$category->name}}</option>
                                @endif    
                            @endforeach
                            
                        </select>
                       
                        @error('category')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                    </div>
                    <div class="form-group my-2">
                        <label for="exampleInputEmail1">Location</label>
                        <input type="text" value="{{$data->location}}" name="location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address">
                        @error('location')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                    </div>
                    <div class="form-group my-2">
                        <label for="">Short Description</label>
                        <textarea class="form-control" name="short_description">{{$data->short_description}}</textarea>
                        @error('short_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="editor">Description</label>
                        <textarea name="description" id="editor">{{$data->description}}</textarea>
                    </div>
                    <div class="form-group my-2">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" value="{{old('image')}}" name="image" class="form-control-file" id="exampleFormControlFile1">
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                   <h3>Pricing</h3> 
                   <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5>BASIC PLAN</h5>
                                    <br>
                                    <button type="button"  id="basicfeaturebtn" class="btn btn-success">Add</button>
                                </div>
                                <div class="card-body">
                                    <div id="basiccard">
                                        <input type="hidden" name="basicfeatureid" value="{{$data->price[0]->id}}">
                                        @foreach (json_decode($data->price[0]->features) as $price)
                                        <div class="form-group my-2">
                                            <label for="exampleFormControlFile1">Feature</label>
                                            <input type="text" value="{{$price}}"  name="basicfeature[]" class="form-control-file" id="exampleFormControlFile1">
                                            
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="form-group my-2">
                                        <label for="exampleFormControlFile1">Price</label>
                                        <input type="text" value="{{$data->price[0]->price}}" name="basicprice" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5>STANDARD PLAN</h5>
                                    <br>
                                    <button type="button"  id="standardfeaturebtn" class="btn btn-success">Add</button>
                                </div>
                                <div class="card-body">
                                    <input type="hidden" name="standardfeatureid" value="{{$data->price[1]->id}}">
                                    <div id="standardcard">
                                        @foreach (json_decode($data->price[1]->features) as $price)
                                            <div class="form-group my-2">
                                                <label for="exampleFormControlFile1">Feature</label>
                                                <input type="text" value="{{$price}}" name="standardfeature[]" class="form-control-file" id="exampleFormControlFile1">
                                                
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="form-group my-2">
                                        <label for="exampleFormControlFile1">Price</label>
                                        <input type="text" value="{{$data->price[1]->price}}"  name="standardprice" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5>ENTERPRISE PLAN</h5>
                                    <br>
                                    <button type="button"  id="enterprisefeaturebtn" class="btn btn-success">Add</button>
                                </div>
                                <div class="card-body">
                                    <input type="hidden" name="enterprisefeatureid" value="{{$data->price[2]->id}}">
                                    <div id="enterprisecard">
                                        @foreach (json_decode($data->price[2]->features) as $price)
                                            <div class="form-group my-2">
                                                <label for="exampleFormControlFile1">Feature</label>
                                                <input type="text" value="{{$price}}"  name="enterprisefeature[]" class="form-control-file" id="exampleFormControlFile1">
                                                
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="form-group my-2">
                                        <label for="exampleFormControlFile1">Price</label>
                                        <input type="text" value="{{$data->price[2]->price}}" name="enterpriseprice" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    

@endsection
@push('script')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea#editor',
    skin: 'bootstrap',
    plugins: 'lists, link, image, media',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
    menubar: false,
  });
</script>
<script>
    $(document).ready(function(){
       $('#basicfeaturebtn').click(function(){
           $('#basiccard').append('<div class="form-group my-2"><label for="exampleFormControlFile1">Feature</label> <input type="text"  name="basicfeature[]" class="form-control-file" id="exampleFormControlFile1"></div>')
       });
       $('#standardfeaturebtn').click(function(){
           $('#standardcard').append('<div class="form-group my-2"><label for="exampleFormControlFile1">Feature</label> <input type="text"  name="standardfeature[]" class="form-control-file" id="exampleFormControlFile1"></div>')
       });
       $('#enterprisefeaturebtn').click(function(){
           $('#enterprisecard').append('<div class="form-group my-2"><label for="exampleFormControlFile1">Feature</label> <input type="text"  name="enterprisefeature[]" class="form-control-file" id="exampleFormControlFile1"></div>')
       });
    });
   </script>
@endpush