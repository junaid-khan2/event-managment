<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name','image','short_description','content'];

    public function category()
    {
        return $this->hasManyThrough(Category::class, EventCategory::class, 'event_id', 'id', 'id',  'category_id');
    }

    public function multipleServices()
    {
        return $this->hasMany(MultipleService::class);
    }

    public function services()
    {
        return $this->hasManyThrough(Service::class, MultipleService::class);
    }
}
