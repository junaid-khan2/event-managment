@extends('layout.service_provider')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  />
@endpush
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
                    <div class="my-2">
                        <h3 class="float-start">Pricing</h3>
                        <button type="button" id="addPlan" class="btn btn-success float-end">Add Plan</button>
                    </div>
                    <br>
                    <br>
                    <hr>
                    <div class="row mt-1" id="pricePlans">
                        <!-- Pricing plans will be added here dynamically -->
                        @php
                            $plainNo = 0;
                        @endphp
                        @foreach ($data->price as $item)
                     
                        <div class="col-md-4 my-1 plan" data-plan="{{ $plainNo }}">
                            <div class="card">
                                <div class="card-header">
                                    <input type="text" value="{{$item->name}}" name="plan[{{ $plainNo }}][name]" class="form-control plan-name" placeholder="Plan Name">
                                    <br>
                                    <button type="button" class="btn btn-danger float-end remove-plan mx-1"><i class="fa-solid fa-trash"></i></button>
                                    <button type="button" class="btn btn-success float-end add-feature mx-1">Add Feature</button>
                                </div>
                                <div class="card-body features" data-plan="{{ $plainNo }}">
                                    @foreach (json_decode($item->features) as $features)
                                    <div class="form-group my-2">
                                        <label for="exampleFormControlFile1">Feature</label>
                                        <input type="text" value="{{$features}}" name="plan[{{ $plainNo }}][features][]" class="form-control-file" id="exampleFormControlFile1">
                                        <button type="button" class="btn btn-danger btn-sm float-end remove-feature"><i class="fa-solid fa-delete-left"></i></button>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="card-footer">
                                    <div class="form-group my-2">
                                        <label for="exampleFormControlFile1">Price</label>
                                        <input type="text" value="{{$item->price}}" name="plan[{{ $plainNo }}][price]" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                            $plainNo++
                        @endphp
                        @endforeach
                    </div>
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
    $(document).ready(function() {
        // Initial plan
        // addPlan();

        // Add plan button click event
        $('#addPlan').click(function() {
            addPlan();
        });

        // Function to add a new plan
        function addPlan() {
            var planNumber = $('.plan').length + 1;

            var planHtml = `
        <div class="col-md-4 my-1 plan" data-plan="${planNumber}">
            <div class="card">
                <div class="card-header">
                    <input type="text" name="plan[${planNumber}][name]" class="form-control plan-name" placeholder="Plan Name">
                    <br>
                    <button type="button" class="btn btn-danger float-end remove-plan mx-1"><i class="fa-solid fa-trash"></i></button>
                    <button type="button" class="btn btn-success float-end add-feature mx-1">Add Feature</button>
                </div>
                <div class="card-body features" data-plan="${planNumber}">
                    <div class="form-group my-2">
                        <label for="exampleFormControlFile1">Feature</label>
                        <input type="text" name="plan[${planNumber}][features][]" class="form-control-file" id="exampleFormControlFile1">
                        <button type="button" class="btn btn-danger btn-sm float-end remove-feature"><i class="fa-solid fa-delete-left"></i></button>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group my-2">
                        <label for="exampleFormControlFile1">Price</label>
                        <input type="text" name="plan[${planNumber}][price]" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </div>
            </div>
        </div>
    `;

            $('#pricePlans').append(planHtml);

            // Add feature button click event
            $('.add-feature').off('click').on('click', function() {
                addFeature($(this));
            });

            // Remove plan button click event
            $('.remove-plan').off('click').on('click', function() {
                removePlan($(this));
            });
        }

        // Function to add a new feature within a plan
        function addFeature(button) {
            var featuresContainer = button.closest('.plan').find('.features');

            var featureHtml = `
                <div class="form-group my-2">
                    <label for="exampleFormControlFile1">Feature</label>
                    <input type="text" name="plan[${featuresContainer.data('plan')}][features][]" class="form-control-file" id="exampleFormControlFile1">
                    <button type="button" class="btn btn-danger btn-sm float-end remove-feature"><i class="fa-solid fa-delete-left"></i></button>
                </div>
            `;

            featuresContainer.append(featureHtml);

            // Remove feature button click event
            $('.remove-feature').off('click').on('click', function() {
                removeFeature($(this));
            });
        }

        // Function to remove a plan
        function removePlan(button) {
            var planContainer = button.closest('.plan');
            planContainer.remove();
        }

        // Function to remove a feature within a plan
        function removeFeature(button) {
            var featureContainer = button.closest('.form-group');
            featureContainer.remove();
        }
    });
</script>
@endpush