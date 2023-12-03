<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Price;
use App\Models\Event;
use App\Models\ServiceProvider;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','category_id','name','image','location','status','avalibality_for_home','short_description','content'];
    public function price()
    {
        return $this->hasMany(Price::class, 'service_id', 'id');
    }

    public function multipleServices()
    {
        return $this->hasMany(MultipleService::class);
    }

    public function events()
    {
        return $this->hasManyThrough(Event::class, MultipleService::class, 'service_id', 'id', 'id', 'event_id');
    }

    public function user()
    {
        return $this->belongsTo(ServiceProvider::class, 'user_id', 'id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function users()
    {
        return $this->hasManyThrough(User::class, Booking::class);
    }
    
}
