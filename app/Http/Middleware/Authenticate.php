<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if(Auth::guard('admin')){

            return $request->expectsJson() ? null : route('admin.login');

        }else if (Auth::guard('service_provider')){

            return $request->expectsJson() ? null : route('service_provider.login');

        }else{

            return $request->expectsJson() ? null : route('login');
        }
    }       
}
