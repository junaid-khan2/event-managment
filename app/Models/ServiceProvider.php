<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ServiceProvider extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'service_provider';

    protected $fillable = [
        'name', 
        'email',
        'password',
        'phone_no',
        'image',
        'status',
        'proof_document',
        'whatsapp',
        'facebook',
        'instagram',
        'twitter',
        'linkdin',
        'tiktok',
    ];
    protected $hidden = [
      'password', 
    ];
}
