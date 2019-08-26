<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class checkIfSeller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->property_id = Auth::user()->id) {
            return redirect('SellerBID');
        }
        // return redirect('home');
        return $next($request);
    }
}
