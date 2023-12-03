<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Validator, Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['data'] = Category::all();

        return view('admin.category.index',$data);
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        $messages = [
            'name.required' => 'The name field is required.',
            'description.required' => 'The description field is required.',
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
        $request->image->move(public_path('uploads/images/category'), $imageName);
        $data = Category::create([
            'name'=>$request->name,
            'image'=>$imageName,
            'description'=>$request->description

        ]);
        if($data){
             return redirect()->route('admin.category.index');
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
        $data['category'] = Category::whereId($id)->firstOrFail();

        return view('admin.category.edit',$data);
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
            $request->image->move(public_path('uploads/images/category/'), $imageName);
        }else{
            $imageName = $request->oldimage;
        }


       $data = Category::whereId($id)->update([
            'name'=>$request->name,
            'image'=>$imageName,
            'description'=>$request->description,
            // 'content'=>$request->description

        ]);
        if($data){
             return redirect()->route('admin.category.index');
        }else{
            abort(401);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Category::whereId($id)->delete();
        if($data){
            return redirect()->route('admin.category.index');
       }else{
           abort(401);
       }
    }
}
