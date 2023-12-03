<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\Category;

use Validator, Session;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['data'] = Event::all();

        return view('admin.Event.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data['category'] = Category::all();
        return view('admin.Event.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'short_description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        $messages = [
            'name.required' => 'The name field is required.',
            'short_description.required' => 'The description field is required.',
            'image.required' => 'Please select an image.',
            'image.image' => 'The uploaded file is not an image.',
            'image.mimes' => 'Only JPEG, PNG, JPG, and GIF images are allowed.',
            'image.max' => 'The image size cannot exceed 2MB.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imageName = time().'.'.$request->image->extension();

        // Public Folder
        $request->image->move(public_path('uploads/images'), $imageName);
        $data = Event::create([
            'name'=>$request->name,
            'image'=>$imageName,
            'short_description'=>$request->short_description,
            'content'=>$request->description

        ]);

        foreach($request->category as $category){
            EventCategory::create([
            'event_id'=>$data->id,
            'category_id'=>$category
            ]);
        }
    
        if($data){
             return redirect()->route('admin.event.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['event'] = Event::whereId($id)->with('category')->firstOrFail();
        $data['category'] = Category::all();
        // return $data;
        return view('admin.Event.edit',$data);



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
            $request->image->move(public_path('uploads/images'), $imageName);
        }else{
            $imageName = $request->oldimage;
        }


       $data = Event::whereId($id)->update([
            'name'=>$request->name,
            'image'=>$imageName,
            'short_description'=>$request->short_description,
            // 'content'=>$request->description

        ]);

              if(isset($request->category)){
                foreach($request->category as $category){
                        

                    EventCategory::updateOrCreate(
                        ['event_id' => $id, 'category_id' => $category],
                        [
                           
                            'event_id'=>$id,
                            'category_id'=>$category,
                            
                        ] // Add other fields as needed
                    );
                }
              }

        
            //Remove entry from multiple_service table if event is not selected
            $requestcategory = $request->category;

            $contancategory = EventCategory::where('event_id', $id)->pluck('category_id');
            
            // Find events in the database but not in the request
            $categoryToDelete = $contancategory->diff($requestcategory);
    
            $delete = EventCategory::whereIn('category_id',$categoryToDelete)->where('event_id', $id)->delete();

        if($data){
             return redirect()->route('admin.event.index');
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
    }
}
