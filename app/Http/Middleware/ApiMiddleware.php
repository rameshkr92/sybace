<?php

namespace App\Http\Middleware;

use Closure;

// Custom sybace
class ApiMiddleware
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
        if(\Request::segment(3) !== config('sybace.api_key')){
            $response = [
                    'status' => 0,
                    'message' => 'not authorized'
            ];
            return \Response($response);
        }
        
        return $next($request);
    }
}
