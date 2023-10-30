<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service; 

class Price extends Model
{
    use HasFactory;
    protected $fillable = ['service_id','name','features','price','description'];

    
    public function service()
    {
        return $this->hasOne(Service::class, 'id', 'service_id');
    }
}
