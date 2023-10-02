<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Price;
use App\Models\Event;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','event_id','name','image','location','status','avalibality_for_home','short_description','content'];

    public function price(){
        return $this->hasMany(Price::class, 'service_id','id');
    }
    public function event(){
        return $this->belongsTo(Event::class,'event_id','id');
    }
    
}
