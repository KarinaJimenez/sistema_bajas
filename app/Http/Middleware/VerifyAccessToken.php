<?php

namespace App\Http\Middleware;

use Closure;

class VerifyAccessToken
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
        $token = '$2y$10$u9pwJUYdNdF3.iBxytwLtuT0rofOk1A/bQcrznvWWGDxusxOJlTAO';
        $key = $request->headers->get('Authorization');
        
        if($token == $key){
            return $next($request);
        }else{
            return response()->json([
                'error' => 'No autorizado'
            ],401);
        }
    }
}
