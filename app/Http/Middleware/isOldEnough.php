<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class isOldEnough
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Log::notice(now());
        // Log::notice(auth()->user()->birth_date);
        // Log::notice(Carbon::parse( auth()->user()->birth_date )->diff(now())->y);

        if(Carbon::parse( auth()->user()->birth_date )->diff(now())->y > 30)
            return $next($request);
        else 
            return redirect('dashboard');
    }
}
