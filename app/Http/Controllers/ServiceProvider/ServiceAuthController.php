<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceProvider;
use Auth, Validator, Hash , Session;

class ServiceAuthController extends Controller
{
    public function register_view(){
        return view('serviceProvider.register');
    }
    public function register(Request $request){
              // Define your validation rules
        $rules = [
            'name'=>'required',
            'email' => 'required|email|unique:service_providers',
            'password' => 'required',
            'proof_document' => 'required|mimes:jpg,jpeg,png,pdf,docx|max:2048',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput(); // Optionally, to repopulate the form with the old input
        }
        if($request->has('proof_document')){
            $fileName = time().'.'.$request->proof_document->extension();

            // Public Folder
            $request->proof_document->move(public_path('uploads/proof_document'), $fileName);
        }else{
            $fileName = '';
        }
        ServiceProvider::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'proof_document'=>$fileName
        ]);

    
        if(Auth::guard('service_provider')->attempt(['email' => $request->email, 'password' => $request->password])){
            return  redirect()->route('serviceprovider.dashboard');
        }else{
            
            return  redirect()->back()
            ->withErrors(['Invalid Careditals'])
            ->withInput();
        }

    }
    public function login_view(){
        if(Auth::guard('service_provider')->check()){
            return redirect()->route('serviceprovider.dashboard');
        }
        return view('serviceProvider.login');
    }

    public function edit(){
        $data['user'] = Auth::user();

        return view('serviceProvider.edit_profile',$data);
    }

    public function update(Request $request, $id){
        if($request->has('image')){
            $imageName = time().'.'.$request->image->extension();

            // Public Folder
            $request->image->move(public_path('uploads/profile'), $imageName);
        }else{
            $imageName = '';
        }

        $user = ServiceProvider::whereId($id)->update([
            'name'=>$request->name,
            'phone_no'=>$request->phone_no,
            'image'=>$imageName,
            'whatsapp'=>$request->whatsapp,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
            'twitter'=>$request->twitter,
            'linkdin'=>$request->linkdin,
            'tiktok'=>$request->tiktok,
        ]);

       if($user){
        return redirect()->route('serviceprovider.dashboard');
       }else{
        echo "Nor working";
       }
    }

    public function login(Request $request){


          // Define your validation rules
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput(); // Optionally, to repopulate the form with the old input
        }
        
    
        if(Auth::guard('service_provider')->attempt(['email' => $request->email, 'password' => $request->password])){
            return  redirect()->route('serviceprovider.dashboard');
        }else{
            
            return  redirect()->back()
            ->withErrors(['Invalid Careditals'])
            ->withInput();
        }

        
    }
    public function logout(){
        Session::flush();
        
        Auth::logout();

        return redirect('serviceprovider');
    }
}
