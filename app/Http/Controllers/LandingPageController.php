<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Service;
use App\Models\Contact;
use App\Models\Booking;
use App\Models\Price;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookService;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['event'] = Event::all();
        $data['category'] = Category::with('services')->get();
        $data['services'] = Service::with('category')->get();
        // return $data;
        return view('welcome',$data);
    }

    public function services_list(Request $request){
        $service_id =  $request->id;
        $data['page'] = "services_list";

        $data['service'] = Category::whereHas('events', function ($query) use ($service_id) {
            $query->where('event_id', $service_id);
        })->get();
        
        $data['event'] = Event::all();
        
        // return $data;
        
        return view('services',$data);

        // return $categories = Category::whereHas('events', function ($query) use ($service_id) {
        //     $query->where('id', $service_id);
        // })->get();
       
    }

    public function services_show ($id){
        // return $id;
        $data['service'] = Service::whereId($id)->with('price')->with('user')->with('events')->first();
        $data['event'] = Event::all();
        
        return view('single_service',$data);
    }
    public function services(){
        // return ['working'];
        // $data['service'] =  Service::get();
        // $data['event'] = Event::all();
        $data['category'] = Category::all();
        // return $data;
        return view('services_category',$data);
    }

    public function services_category($id){
        $data['page'] = "services_category";
        $data['service'] =  Service::where('category_id',$id)->get();
        
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

    public function ajax_event_search(Request $request){
        $id = $request->input('id');
        $data = Category::whereHas('eventcategoty', function ($query) use ($id) {
            $query->where('event_id', $id);
        })->get();
        
        return response()->json($data);

        
    }

    public function event_search(Request $request){
        $keyword = $request->input('keyword');
        // return $keyword;
        $data['event'] = Event::where('name', 'like', '%' . $keyword . '%')->get();

        return view('event',$data);
    }
    // public function plain_search(Request $request){
    //      // Retrieve your data from the request or the database
            
    //         $filteredServices = [];
    //         $services = [];

    //         // Loop through your data and apply your filtering criteria
    //         for ($i = 0; $i < count($request['servicename']); $i++) {
            
    //             $serviceName = $request['servicename'][$i];
    //             $minPrice = $request['serviceminprice'][$i];
    //             $maxPrice = $request['servicemaxprice'][$i];

    //             // Customize your filter conditions here
    //             if ($serviceName) {
    //                 // $filteredServices[] = [
    //                 //     'servicename' => $serviceName,
    //                 //     'serviceminprice' => $minPrice,
    //                 //     'servicemaxprice' => $maxPrice,
    //                 // ];
                    
    //                 // $services[] = Service::whereId($serviceName)
    //                 // ->with('price')
    //                 //     ->whereHas('price', function ($query) use ($minPrice, $maxPrice) {
    //                 //     $query->where('price', '>=', $minPrice)
    //                 //           ->where('price', '<=', $maxPrice);
    //                 // })->get();
    //                 $services_data =  Service::whereId($serviceName)
    //                 ->with(['price' => function($query) use ($minPrice, $maxPrice) {
    //                     $query->whereBetween('price', [$minPrice, $maxPrice])
    //                           ->orderBy('price', 'desc')
    //                     ->limit(1);
    //                 }])
    //                 ->first();
    //                 if(!empty($services_data->price)){
    //                     $services[] = $services_data;
    //                 }else{
    //                     $services[] = [];
    //                 }
    //             }
    //         }

    //         $data['services'] = $services;

    //         // You can return the filtered data or pass it to your view
           
    //         // return view('plain',$data);
    //         return response()->json($services);
    //     // return $request;
    // }
    public function plain_search(Request $request) {
        // return $request;
        
        $filteredServices = [];
        $services = [];

        if(!$request['servicename']){
            return redirect()->back()->withErrors(['msg' => 'Select Services']);
        }

        // return $request;

        for ($i = 0; $i < count($request['servicename']); $i++) {
            $serviceName = $request['servicename'][$i];
            $minPrice = $request['serviceminprice'][$serviceName-1];
            $maxPrice = $request['servicemaxprice'][$serviceName-1];
            $data['serviceName'] = $serviceName;
            $data['minPrice'] = $minPrice;
            $data['maxPrice'] = $maxPrice;

            // return $data;
            if ($serviceName) {
                $services_data = Service::where('category_id',$serviceName)->with('category')
                    ->with(['price' => function ($query) use ($minPrice, $maxPrice) {
                        $query->whereBetween('price', array(intval($minPrice) , intval($maxPrice)))
                            ->orderBy('price', 'desc')
                            ->first();
                    }])
                    ->first();

                if (!empty($services_data->price)) {
                    $services[] = $services_data;
                }
            }
            // if($serviceName){
            //     $services = Price::whereBetween('price', array(intval(200) , intval(300)))
            //     ->orderBy('price', 'desc')
            //     ->first();
            //     dd($services);

            else{
                echo "NOT FOUND";
            }
        }

        $data['services'] = $services;
        // return $data;
        return view('plain',$data);

        return response()->json($services);
    }

    public function conform_service(Request $request){
        

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|regex:/^\+?\d{1,4}[-.\s]?\d{1,12}$/',
            'cnic' => 'required|string|regex:/^\d{5}-\d{7}-\d$/',
            'address' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        $priceIds = json_decode($request->price_ids, true);
       $plain = Price::whereIn('id',$priceIds)->with('service.user')->get();
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $date = $request->date;
        $cnic = $request->cnic;
        $address = $request->address;
        $description = $request->description;
       foreach($plain as $plain_b){
        $data = Booking::create([
            'service_id'=>$plain_b->service->id,
            'price_id'=>$plain_b->id,
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'cnic'=>$cnic,
            'address'=>$address,
            'date'=>$date,
            'description'=>$description,
        ]);

        // $mailData = [
        //     'serviceprovider_name' => $plain_b->service->user->name,
        //     'service_name' => $plain_b->service->name,
        //     'price_plan' => $plain_b->name,
        //     'name'=>$name,
        //     'email'=>$email,
        //     'phone'=>$phone,
        //     'date'=>$date,
        // ];

      
        
        // Mail::to('jk904465@example.com')->send(new BookService($mailData));
     
       }
       if(true){
        return redirect()->back()->with(['msg'=>'Booking Susscssfluy']);
        }else{
            return redirect()->back()->withErrors('Some Error in Booking')->withInput();
        }
    
        
    }

    public function booking($service, $price){
        $data['service'] = $service;
        $data['price'] = $price;
        return view('booking', $data);
    }
    public function my_booking(Request $request){
        $email = $request->input('email');
        $data = Booking::where('email',$email)->with('service')->with('price')->get();
        return response()->json($data);
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
