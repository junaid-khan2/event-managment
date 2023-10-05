<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceProvider;
use App\Models\Booking;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){
       return view('admin.dashboard');
    }
    public function provider_all(){
        $data['providers'] =  ServiceProvider::get();
        return view('admin.servicesprovider.index',$data);
    }

    public function provider_unverfied(){
        $data['providers'] =  ServiceProvider::whereStatus(0)->get();
        return view('admin.servicesprovider.unverified',$data);
    }

    public function provider_edit($id){
        $data['provider'] = ServiceProvider::whereId($id)->firstOrFail();
        return view('admin.servicesprovider.edit',$data);
    }

    public function provider_update(Request $request, $id ){
        if($request->has('image')){
            $imageName = time().'.'.$request->image->extension();

            // Public Folder
            $request->image->move(public_path('uploads/profile'), $imageName);
        }else{
            $imageName = 'default_user.png';
        }

        $user = ServiceProvider::whereId($id)->update([
            'name'=>$request->name,
            'phone_no'=>$request->phone_no,
            'image'=>$imageName,
            'status'=>$request->status,
            'whatsapp'=>$request->whatsapp,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
            'twitter'=>$request->twitter,
            'linkdin'=>$request->linkdin,
            'tiktok'=>$request->tiktok,
        ]);

       if($user){
        return redirect()->route('admin.provider.unverfived');
       }else{
        echo "Nor working";
       }
    }

    public function booking_today(){
        $data['bookings'] = Booking::with('service')
        ->with('price')
         ->where('created_at', '>=', Carbon::today())
         ->get();

        //  return $data;
    return view('admin.booking.today',$data);
    }
    public function booking_all(){
        $data['bookings'] = Booking::with('service')
        ->with('price')
         ->get();

        //  return $data;
    return view('admin.booking.index',$data);
    }
}
