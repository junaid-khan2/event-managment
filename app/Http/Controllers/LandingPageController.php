<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Service;
use App\Models\Contact;
use App\Models\Booking;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['event'] = Event::all();
        $data['services'] = Service::with('event')->get();
        // return $data;
        return view('welcome',$data);
    }

    public function services_list(Request $request){
        $service_id =  $request->id;
        $data['service'] =  Service::whereId($service_id)->get();
        $data['event'] = Event::all();
        return view('services',$data);
       
    }

    public function services_show ($id){
        // return $id;
        $data['service'] = Service::whereId($id)->with('price')->with('user')->with('event')->first();
        $data['event'] = Event::all();
        
        return view('single_service',$data);
    }
    public function services(){
        // return ['working'];
        $data['service'] =  Service::get();
        $data['event'] = Event::all();
        return view('services',$data);
    }

    public function event(){
        $data['event'] = Event::all();
        return view('event',$data);
    }

    public function service_search(Request $request){
        $keyword = $request->input('keyword');
    $eventName = $request->input('event_name');
    $minPrice = $request->input('mix_price');
    $maxPrice = $request->input('max_price');

    // $services = Service::query()
    //     ->when($keyword, function ($query) use ($keyword) {
    //         $query->where(function ($query) use ($keyword) {
    //             $query->where('name', 'like', '%' . $keyword . '%')
    //                 ->orWhereHas('location', function ($query) use ($keyword) {
    //                     $query->where('location', 'like', '%' . $keyword . '%');
    //                 });
    //         });
    //     })
    //     ->when($eventName, function ($query) use ($eventName) {
    //         $query->whereHas('event', function ($query) use ($eventName) {
    //             $query->where('name', 'like', '%' . $eventName . '%');
    //         });
    //     })
    //     ->when($minPrice, function ($query) use ($minPrice) {
    //         $query->whereHas('price', function ($query) use ($minPrice) {
    //             $query->where('value', '>=', $minPrice);
    //         });
    //     })
    //     ->when($maxPrice, function ($query) use ($maxPrice) {
    //         $query->whereHas('price', function ($query) use ($maxPrice) {
    //             $query->where('value', '<=', $maxPrice);
    //         });
    //     })
    //     ->get();
            $data['service'] = Service::with(['event', 'price'])
            ->when($keyword, function ($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%')
                ->orWhere('location','like','%'.$keyword.'%');
            })
            ->when($eventName, function ($query) use ($eventName) {
                $query->whereHas('event', function ($query) use ($eventName) {
                    $query->where('name', 'like', '%' . $eventName . '%');
                });
            })
            ->when($minPrice, function ($query) use ($minPrice) {
                $query->whereHas('price', function ($query) use ($minPrice) {
                    $query->where('price', '>=', $minPrice);
                });
            })
            ->when($maxPrice, function ($query) use ($maxPrice) {
                $query->whereHas('price', function ($query) use ($maxPrice) {
                    $query->where('price', '<=', $maxPrice);
                });
            })
            ->get();


            $data['event'] = Event::all();
            return view('services',$data);
    }

    public function event_search(Request $request){
        $keyword = $request->input('keyword');
        // return $keyword;
        $data['event'] = Event::where('name', 'like', '%' . $keyword . '%')->get();

        return view('event',$data);
    }

    public function booking($service, $price){
        $data['service'] = $service;
        $data['price'] = $price;
        return view('booking', $data);
    }
    public function booking_form(Request $request){
        $data = Booking::create([
            'service_id'=>$request->service_id,
            'price_id'=>$request->price_id,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'date'=>$request->date,
            'description'=>$request->description,
        ]);

        if($data){
            return redirect()->route('index')->with(['msg'=>'Booking Susscssfluy']);
        }else{
             return redirect()->back()->withErrors('Some Error in Booking')->withInput();
        }
        
    }

    public function contact_form(Request $request){
      $data =   Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'country'=>$request->country,
            'phone'=>$request->phone,
            'massage'=>$request->massage,
        ]);

        if($data){
            return redirect()->route('index')->with('massage','from successfuly done');
        }else{
            return redirect()->back()->withErrors('Error in from submisstion');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
