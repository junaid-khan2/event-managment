<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    public function login_view(){
        if(Auth::guard('admin')->check()){
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
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
  
    if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
        return  redirect()->route('admin.dashboard');
    }else{
        
        return  redirect()->back()
        ->withErrors(['Invalid Careditals'])
        ->withInput();
    }

        
    }
    public function logout(){
        Session::flush();
        
        Auth::logout();

        return redirect('admin');
    }
}
