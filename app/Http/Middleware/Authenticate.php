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
        // if(Auth::guard('admin')){

        //     return $request->expectsJson() ? null : route('admin.login');

        // }else if (Auth::guard('service_provider')){

        //     return $request->expectsJson() ? null : route('service_provider.login');

        // }else{

        //     return $request->expectsJson() ? null : route('service_provider.login');
        // }

        if (! $request->expectsJson()) {
            if ($request->routeIs('serviceprovider.dashboard')) {
                return route('serviceprovider.login'); // Redirect to service_provider.login for service_provider guard
            } elseif ($request->routeIs('admin.dashboard')) {
                return route('admin.login'); // Redirect to admin.login for admin guard
            }
            
            return route('serviceprovider.login'); // Redirect to the default login route for other guards
        }
    }       
}
