<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceDashboardController extends Controller
{
    public function index(){
        return view('serviceProvider.dashboard');
     }
     public function booking(){
        $data['data'] = [];
        return view('serviceProvider.booking.index',$data);
     }
}
