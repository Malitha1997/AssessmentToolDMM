<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {


        // if (Auth::user()== Admin) {
        //     return $request->expectsJson() ? null : route('login');
        // }else if(Auth::user()== User){
        //     return $request->expectsJson() ? null : route('login');
        // }else if(Auth::user()== Manager){
        //     return $request->expectsJson() ? null : route('login2');
        // }
        return $request->expectsJson() ? null : route('login2');
    }

    protected function redirectTo2(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login2');
    }
}
