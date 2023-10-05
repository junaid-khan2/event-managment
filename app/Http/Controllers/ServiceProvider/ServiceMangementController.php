<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Service;
use App\Models\Price;
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
            'event'=>'required'
        ];

        $messages = [
            'name.required' => 'The name field is required.',
            'image.required' => 'Please select an image.',
            'image.image' => 'The uploaded file is not an image.',
            'image.mimes' => 'Only JPEG, PNG, JPG, and GIF images are allowed.',
            'image.max' => 'The image size cannot exceed 2MB.',
            'event.required'=>'Event Is required',
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
            'event_id'=>$request->event,
            'name'=>$request->name,
            'image'=>$imageName,
            'location'=>$request->location,
            'short_description'=>$request->short_description,
            'content'=>$request->description,

        ]);

        if($request->basicfeature){
            Price::create([
                'service_id'=>$data->id,
                'name'=>'Basic Plain',
                'features'=>json_encode($request->basicfeature),
                'price'=>$request->basicprice,

            ]);
        }
        if($request->standardfeature){
            Price::create([
                'service_id'=>$data->id,
                'name'=>'Standard Plain',
                'features'=>json_encode($request->standardfeature),
                'price'=>$request->standardprice,

            ]);
        }
        if($request->enterprisefeature){
            Price::create([
                'service_id'=>$data->id,
                'name'=>'EnterPrice Plain',
                'features'=>json_encode($request->enterprisefeature),
                'price'=>$request->enterpriseprice,

            ]);
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
        $data['data'] = Service::whereId($id)->with('price')->firstOrFail();
        $data['event'] = Event::all();
        return view('serviceProvider.services.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
        if($request->has('image')){
            $imageName = time().'.'.$request->image->extension();

            // Public Folder
            $request->image->move(public_path('uploads/services/images'), $imageName);
        }else{
            $imageName = '';
        }

        
        $data = Service::whereId($id)->update([
            
            'event_id'=>$request->event,
            'name'=>$request->name,
            'image'=>$imageName,
            'location'=>$request->location,
            'short_description'=>$request->short_description,
            'content'=>$request->description,

        ]);

        if($request->basicfeatureid){
            Price::whereId($request->basicfeatureid)->update([
                
                'name'=>'Basic Plain',
                'features'=>json_encode($request->basicfeature),
                'price'=>$request->basicprice,

            ]);
        }
        if($request->standardfeatureid){
            Price::whereId($request->standardfeatureid)->update([
                'name'=>'Standard Plain',
                'features'=>json_encode($request->standardfeature),
                'price'=>$request->standardprice,

            ]);
        }
        if($request->enterprisefeatureid){
            Price::whereId($request->enterprisefeatureid)->update([
       
                'name'=>'EnterPrice Plain',
                'features'=>json_encode($request->enterprisefeature),
                'price'=>$request->enterpriseprice,

            ]);
        }
        

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
