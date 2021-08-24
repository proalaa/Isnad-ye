<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckBanned
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && !Auth::user()->active)
        {
            Auth::logout();
            return response()->json(['message' => 'حسابك لم يتم تفعيله من قبل الادمن'] , 401);
        }

        return $next($request);
    }
}
