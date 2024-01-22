<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['service_id','price_id','date','name','email','phone','cnic','address','description'];

    public function user()
    {
        return $this->belongsTo(ServiceProvider::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function price(){
        return $this->belongsTo(Price::class);
    }


    
}
