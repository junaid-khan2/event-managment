<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','image','description'];

    public function services(){
        return $this->hasMany(Service::class,'category_id', 'id');
    }
    public function eventcategoty(){
        return $this->hasMany(EventCategory::class);
    }

    public function events()
    {
        return $this->hasManyThrough(
            Event::class,
            EventCategory::class,
            'category_id',  // Foreign key on EventCategory table
            'id',           // Local key on Category table
            'id',           // Local key on Event table
            'event_id'      // Foreign key on EventCategory table
        );
    }
}
