<?php

namespace App\Http\Middleware;
use App\Property;
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
        $property_id=(int)$request->property_id ;
        $property=Property::find($property_id);
        $seller_id= $property->user_id;
        // $seller_id=(int)$request->property_id ;
        $user_id=(int)Auth::user()->id;
        if ($user_id == $seller_id) {
            return redirect("SellerBID");
        }
        // return redirect('home');
        return $next($request);
    }
}
