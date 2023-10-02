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
                        <label for="">Short Description</label>
                        <textarea class="form-control" name="short_description"></textarea>
                        @error('short_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="editor">Description</label>
                        <textarea name="description" id="editor"></textarea>
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