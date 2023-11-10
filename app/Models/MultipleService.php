<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleService extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'service_id','event_id'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
