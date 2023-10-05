<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Service;
use Carbon\Carbon;
use Auth;

class ServiceDashboardController extends Controller
{
    public function index(){
      $user_id = Auth::user()->id;
      $data['bookingsCount'] = Booking::with('service')
         ->with('price')
          ->whereHas('service', function ($query) use ($user_id) {
              // Access the $user_id variable within the closure
              $query->where('user_id', $user_id);
          })
          ->count();

         $data['todaybookingsCount'] = Booking::with('service')
         ->with('price')
         ->where('created_at', '>=', Carbon::today())
         ->whereHas('service', function ($query) use ($user_id) {
            // Access the $user_id variable within the closure
            $query->where('user_id', $user_id);
         })
         ->count();

         $data['serviceCount'] = Service::where('user_id',$user_id)->count();

         $data['todaybookings'] = Booking::with('service')
         ->with('price')
          ->where('created_at', '>=', Carbon::today())
          ->whereHas('service', function ($query) use ($user_id) {
              // Access the $user_id variable within the closure
              $query->where('user_id', $user_id);
          })
          ->get();



         //  return $data;
        return view('serviceProvider.dashboard',$data);
     }
     public function booking(){
      $user_id = Auth::user()->id;

      $data['bookings'] = Booking::with('service')
         ->with('price')
          ->whereHas('service', function ($query) use ($user_id) {
              // Access the $user_id variable within the closure
              $query->where('user_id', $user_id);
          })
          ->get();
         //  return $data;

        return view('serviceProvider.booking.index',$data);
     }
     public function booking_today(){
      $user_id = Auth::user()->id;

      $data['bookings'] = Booking::with('service')
         ->with('price')
          ->where('created_at', '>=', Carbon::today())
          ->whereHas('service', function ($query) use ($user_id) {
              // Access the $user_id variable within the closure
              $query->where('user_id', $user_id);
          })
          ->get();

         //  return $data;
    
      return view('serviceProvider.booking.today',$data);
     }
}
