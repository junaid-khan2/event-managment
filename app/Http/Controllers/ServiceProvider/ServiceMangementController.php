<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Service;
use App\Models\Price;
use App\Models\Category;
use App\Models\MultipleService;
use Illuminate\Http\Request;
use Auth, Validator;

class ServiceMangementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user_id = Auth::user()->id;
        $data['data'] = Service::where('user_id',$user_id)->latest()->get();
        // return $data;
        return view('serviceProvider.services.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data['event'] = Event::all();
        $data['category'] = Category::all();
        // return $data;
        return view('serviceProvider.services.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       
        
        // return $request;
        $user_id =  Auth::user()->id;
        $rules = [
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'event'=>'required',
            'category'=>'required'
        ];

        $messages = [
            'name.required' => 'The name field is required.',
            'image.required' => 'Please select an image.',
            'image.image' => 'The uploaded file is not an image.',
            'image.mimes' => 'Only JPEG, PNG, JPG, and GIF images are allowed.',
            'image.max' => 'The image size cannot exceed 2MB.',
            'event.required'=>'Event Is required',
            'category.required'=>'Category Is required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->has('image')){
            $imageName = time().'.'.$request->image->extension();

            // Public Folder
            $request->image->move(public_path('uploads/services/images'), $imageName);
        }else{
            $imageName = '';
        }

        
        $data = Service::create([
            'user_id'=>$user_id,
            'category_id'=>$request->category,
            'name'=>$request->name,
            'image'=>$imageName,
            'location'=>$request->location,
            'short_description'=>$request->short_description,
            'content'=>$request->description,

        ]);

        foreach($request->event as $event){
            MultipleService::create([
            'user_id'=>$user_id,
            'service_id'=>$data->id,
            'event_id'=>$event
        ]);
        }



            if($request->plan){
                
                foreach ($request->plan as $planId => $plan) {
                         Price::create([
                        'service_id'=>$data->id,
                        'name'=>$plan['name'],
                        'features'=>json_encode($plan['features']),
                        'price'=>$plan['price'],

                    ]);
                }
            }
         
           

        if($data){
             return redirect()->route('serviceprovider.service.index');
        }else{
            abort(401);
        }

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data['data'] = Service::whereId($id)->with('price')->firstOrFail();
        // $data['price'] = $data['data']->price;
        return view('serviceProvider.services.single',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data['data'] = Service::whereId($id)->with('price')->with('events')->firstOrFail();
        $data['event'] = Event::all();
        $data['category'] = Category::all();
        // return $data;
        return view('serviceProvider.services.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {     
       
        $user_id =  Auth::user()->id;

        if($request->has('image')){
            $imageName = time().'.'.$request->image->extension();

            // Public Folder
            $request->image->move(public_path('uploads/services/images'), $imageName);
        }else{
            $imageName = $request->oldimage;
        }

        
        $data = Service::whereId($id)->update([
            'category_id'=>$request->category,            
            'name'=>$request->name,
            'image'=>$imageName,
            'location'=>$request->location,
            'short_description'=>$request->short_description,
            'content'=>$request->description,

        ]);

            // Check if event is selected
        
           // Create or update entry in multiple_service table
            foreach($request->event as $event){
                   

                MultipleService::updateOrCreate(
                    ['service_id' => $id, 'event_id' => $event],
                    [
                        'user_id'=>$user_id,
                        'service_id'=>$id,
                        'event_id'=>$event
                        
                    ] // Add other fields as needed
                );
            }

            //Remove entry from multiple_service table if event is not selected
            $requestEvent = $request->event;

            $contanEvent = MultipleService::where('service_id', $id)->pluck('event_id');
            
            // Find events in the database but not in the request
            $eventsToDelete = $contanEvent->diff($requestEvent);
    
            $delete = MultipleService::whereIn('event_id',$eventsToDelete)->where('service_id', $id)->delete();
           
        

            // Update or create Price entries
            if ($request->plan) {
                foreach ($request->plan as $planId => $plan) {
                    Price::updateOrCreate(
                        ['service_id' => $id, 'name' => $plan['name']],
                        [
                            'service_id' => $id,
                            'features' => json_encode($plan['features']),
                            'price' => $plan['price'],
                        ]
                    );
                }
            }

            // Remove plans that are not in the current request
            $currentPlanNames = collect($request->plan)->pluck('name')->toArray();
            Price::where('service_id', $id)
                ->whereNotIn('name', $currentPlanNames)
                ->delete();
        

        if($data){
             return redirect()->route('serviceprovider.service.index');
        }else{
            abort(401);
        }

       

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // echo "working destorry";
        $service = Service::whereId($id)->delete();

        $price = Price::whereIn('service_id',$id)->get()->delete();
       
        if($service && $price ){
            return redirect()->route('serviceprovider.service.index');
       }else{
           abort(401);
       }
    }
}
