<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Event;

class EventCategory extends Model
{
    use HasFactory;
    protected $fillable = ['event_id','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
